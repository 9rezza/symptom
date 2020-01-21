<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Alarm extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('main_model');
		$this->load->model('alarm_model');
		$this->load->library('template');
        $this->load->library('session');
        $this->load->library('datatables');
        //$this->is_login();
	}

	// public function nav($value)
	// {
	// 	for ($i=0; $i < 3; $i++) { 
	// 		if($i == $value){
	// 			$nav[$i] = "active";
	// 		} else {
	// 			$nav[$i] = "";				
	// 		}
	// 	}
	// 	return $nav;
	// }

	public function index()
	{
		// $data['title'] = "Dashboard";
		// $data['url'] = base_url();
		// $data['circuit'] = base_url('assets/images/circuit/');
		// $this->template->display('content/index', $data);
		$this->alarm();
	}

	public function alarm($tag = false)
	{
		$data['title'] = "ALARM";
		$data['title_icon'] = "fa-warning text-red";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->main_model->get_images()->result();
		$data['symbol'] = $this->main_model->get_symbol()->result();
		$data['textbox'] = $this->main_model->get_textbox()->result();
		$data['position'] = [];
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$data['line'] = $this->alarm_model->get_all_line()->result();
		if($tag){
			$split = str_split($tag);
			if(count($split) == 4){
				$data['tag'] = true;
				$data['selected_line'] = $split[0].$split[1];
				$data['selected_machine'] = $split[2].$split[3];
			} else {
				$data['tag'] = false;
			}
		} else {
			$data['tag'] = false;
		}
		$this->template->display('content/alarm', $data);
	}

	public function upload_action_alarm()
	{
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "xlsx",
            'overwrite' => TRUE,
            'max_size' => "512000000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		if($this->upload->do_upload('actionAlarmFile')) {
			$data = [];
			$file_data = $this->upload->data();
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load($file_data['full_path']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			foreach($sheetData as $key=>$row){
				if($key > 0){
					array_push($data, array(
						'code'=>str_replace('.','_',$row[0]),
						'note'=>$row[1],
						'action'=>nl2br($row[2]),
						'`line.id`'=>$row[3],
						'`machine.id`'=>$row[4],
						'`part.id`'=>$row[5],
					));
				}
			}
			if($this->alarm_model->upload_action_alarm($data)){
				$data["status"] = "success";
				$data["message"] = "success";
				echo json_encode($data);
			} else {
				$data["status"] = "error";
				$data["message"] = "File is broken or wrong format";
				echo json_encode($data);
			}
		} else {
			$data["status"] = "error";
			$data["message"] = $this->upload->display_errors();
			echo json_encode($data);
		}
		
	}

	public function get_alarm_by_machine_code()
	{
		$code = $this->input->post('code');
		$machine = $this->alarm_model->get_machine_by_code($code)->row();
		$date = date('Y-m-d 00:00:00', strtotime('-7 days'));
		if($code != "5aa6"){
			$data = $this->alarm_model->get_history_alarm_by_line_machine($machine->line, $machine->id, $date)->result();
		} else {
			$data = $this->alarm_model->get_history_alarm_by_line_all_machine($machine->line, $date)->result();
		}
		echo json_encode($data);
	}


	




	public function get_alarm_by_code()
	{
		$code = $this->input->post('code');
		$data = $this->alarm_model->get_alarm_by_code($code)->row();
		echo json_encode($data);
	}



































	public function waterpump()
	{
		$data['title'] = "Dashboard";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->main_model->get_images()->result();
		$data['symbol'] = $this->main_model->get_symbol()->result();
		$data['textbox'] = $this->main_model->get_textbox()->result();
		$data['position'] = [];
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/waterpump', $data);
	}

	public function insert_image_symbol()
	{
		$input = $this->input->post();
		$grup = $this->main_model->get_element_count($input['grup'])->num_rows();

		$data = [
			'grup' => $input['grup'],
			'color' => $input['color'],
			'src' => $input['src'],
			'element' => $input['grup'].'_'.$grup,
			'x' => 0,//$input['x'], 
			'y' => 0,//$input['y'], 
		];
		$this->main_model->insert_image($data);
		$feed = $this->main_model->get_image_last()->row();
		echo json_encode($feed);
	}

	public function hmi_update_postition()
	{
		$input = $this->input->post();
		$id = $input['id'];
		$data = [
			'x' => $input['x'], 
			'y' => $input['y'], 
		];
		$this->main_model->update_image($id, $data);
		echo json_encode($input);
	}

	public function update_hmi_z_index()
	{
		$input = $this->input->post();
		$element = $input['element'];
		$data = [
			'z' => $input['z']
		];
		$this->main_model->update_image_by_element($element, $data);
		echo json_encode($input);
	}

	public function hmi_delete()
	{
		$input = $this->input->post();
		$id = $input['id'];
		$this->main_model->delete_image($id);
		echo json_encode($input);
	}

	public function textbox_update_postition()
	{
		$input = $this->input->post();
		$element = $input['element'];
		$data = [
			'x' => $input['x'], 
			'y' => $input['y'], 
		];
		$this->main_model->update_textbox_by_element($element, $data);
		echo json_encode($input);
	}
}