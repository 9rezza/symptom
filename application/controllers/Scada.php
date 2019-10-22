<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Scada extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('main_model');
		$this->load->model('scada_model');
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
		$this->shop();
	}

	public function shop()
	{
		$data['title'] = "PRESS SHOP";
		$data['title_icon'] = "fa-home";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->scada_model->get_images()->result();
		$data['symbol'] = $this->scada_model->get_symbol()->result();
		$data['textbox'] = $this->scada_model->get_textbox()->result();
		$data['position'] = [];
		$data['line'] = $this->scada_model->get_all_line()->result();
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/shop', $data);
	}

	public function line($param)
	{
		$param;
		$data['title'] = "PRESS SHOP";
		$data['title_icon'] = "fa-home";
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
		$this->template->display('content/line', $data);
	}

	public function alarm()
	{
		$data['title'] = "ERROR / ALARM";
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
		$this->template->display('content/alarm', $data);
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

	// public function chart()
	// {
	// 	$data['title'] = "Dashboard";
	// 	$data['url'] = base_url();
	// 	// $data['data']['x'] = [];
	// 	// $data['data']['y'] = [];
	// 	$data['data'] = [];
	// 	$data['data2'] = [];
	// 	$data['data3'] = [];
	// 	$data['data4'] = [];
	// 	for($i = date('Y-m-d H:i:s	', strtotime('-179 second')); $i < date('Y-m-d H:i:s', strtotime('+1 second')); $i = date('Y-m-d H:i:s', strtotime('+1 second', strtotime($i)))){
	// 		array_push($data['data'], array(strtotime($i)*1000, rand(1200,1500)/100));
	// 	}
	// 	for($i = date('Y-m-d H:i:s	', strtotime('-179 second')); $i < date('Y-m-d H:i:s', strtotime('+1 second')); $i = date('Y-m-d H:i:s', strtotime('+1 second', strtotime($i)))){
	// 		array_push($data['data2'], array(strtotime($i)*1000, rand(2000,3000)/100));
	// 	}
	// 	for($i = date('Y-m-d H:i:s	', strtotime('-179 second')); $i < date('Y-m-d H:i:s', strtotime('+1 second')); $i = date('Y-m-d H:i:s', strtotime('+1 second', strtotime($i)))){
	// 		array_push($data['data3'], array(strtotime($i)*1000, rand(10000,15000)/100));
	// 	}
	// 	for($i = date('Y-m-d H:i:s	', strtotime('-179 second')); $i < date('Y-m-d H:i:s', strtotime('+1 second')); $i = date('Y-m-d H:i:s', strtotime('+1 second', strtotime($i)))){
	// 		array_push($data['data4'], array(strtotime($i)*1000, rand(100000,110000)/100));
	// 	}
	// 	// print_r(json_encode($data['data']));
	// 	$this->template->display('content/chart', $data);
	// }

	// public function production()
	// {
	// 	$data['title'] = "Dashboard";
	// 	$data['url'] = base_url();
	// 	$data['hmi'] = base_url('assets/images/hmi/');
	// 	$data['images'] = $this->main_model->get_production_images()->result();
	// 	$data['symbol'] = $this->main_model->get_symbol()->result();
	// 	$data['production'] = $this->main_model->get_production()->row();
	// 	$data['position'] = [];
	// 	foreach ($data['images'] as $s){
	// 		array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
	// 	}
	// 	$this->template->display('content/production', $data);
	// }

	// public function production_status_check()
	// {
	// 	// $input = $this->input->post();
	// 	// $element = $input['element'];
	// 	$feed = $this->main_model->production_status_check()->row();
	// 	echo json_encode($feed);
	// }

	// public function production_trigger($API_KEY)
	// {
	// 	$proses = $this->main_model->production_status_check()->row();
		
	// 	if(strtolower($API_KEY) == 'rezzaisthebest'){
	// 		if($proses->line_stop == 0){
	// 			if($proses->status > 1){
	// 				$data['status'] = '3';
	// 				$this->main_model->production_status_change($data);
	// 				echo 'ERROR';
	// 			} else {
	// 				$data['status'] = '1';
	// 				$this->main_model->production_status_change($data);
	// 				echo 'SUCCESS';
	// 			}
	// 		} else {				
	// 			echo 'ERROR';
	// 		}
	// 	} else {
	// 		// echo json_encode('error');
	// 	}
	// 	// $feed = $this->main_model->production_status_check()->row();
	// 	// echo json_encode($feed);
	// }

	// public function production_reset_process($API_KEY)
	// {
	// 	$proses = $this->main_model->production_status_check()->row();

	// 	if(strtolower($API_KEY) == 'rezzaisthebest'){
	// 		if($proses->status == 2){
	// 			$data['status'] = '0';
	// 			$this->main_model->production_status_change($data);
	// 			echo 'ERROR';
	// 		} else {
	// 			$data['status'] = '0';
	// 			$this->main_model->production_status_change($data);
	// 			echo 'SUCCESS';
	// 		}
	// 	} else {
	// 		// echo json_encode('error');
	// 	}
	// 	// $feed = $this->main_model->production_status_check()->row();
	// 	// echo json_encode($feed);
	// }

	// public function production_status_change()
	// {
	// 	$input = $this->input->post();
	// 	$this->main_model->production_status_change($input);
	// 	echo json_encode('success');
	// }

	// public function production_added()
	// {
	// 	$time_now = date('Y-m-d H:i:00');
	// 	$production = $this->main_model->get_production()->row();
	// 	if($time_now == $production->timestamp){
	// 		$data['total'] = $production->total + 1;
	// 		$data['count_speed'] = $production->count_speed + 1;
	// 	} else {
	// 		$data['timestamp'] = $time_now;
	// 		$data['total'] = $production->total + 1;
	// 		$data['count_speed'] = 1;
	// 		$data['speed'] = $production->count_speed;
	// 	}
	// 	$this->main_model->update_production($data);
	// 	$feed = $this->main_model->get_production()->row();
	// 	echo json_encode($feed);
	// }





	// public function production_update_postition()
	// {
	// 	$input = $this->input->post();
	// 	$id = $input['id'];
	// 	$data = [
	// 		'x' => $input['x'], 
	// 		'y' => $input['y'], 
	// 	];
	// 	$this->main_model->update_production_image($id, $data);
	// 	echo json_encode($input);
	// }

	// public function update_production_z_index()
	// {
	// 	$input = $this->input->post();
	// 	$element = $input['element'];
	// 	$data = [
	// 		'z' => $input['z']
	// 	];
	// 	$this->main_model->update_production_by_element($element, $data);
	// 	echo json_encode($input);
	// }









	

	// public function production_line_stop_check()
	// {
	// 	// $input = $this->input->post();
	// 	// $element = $input['element'];
	// 	$feed = $this->main_model->production_line_stop_check()->row();
	// 	echo json_encode($feed);
	// }

	// public function production_trouble($API_KEY)
	// {
	// 	$proses = $this->main_model->production_line_stop_check()->row();

	// 	// if(strtolower($API_KEY) == 'rezzaisthebest'){
	// 		if($proses->line_stop == 0){
	// 			$data['line_stop'] = '1';
	// 			$this->main_model->production_line_stop_change($data);
	// 			echo 'SUCCESS';
	// 		} else if($proses->line_stop == 2){
	// 			$data['line_stop'] = '3';
	// 			$this->main_model->production_line_stop_change($data);
	// 			echo 'SUCCESS';
	// 		} else {
	// 			echo 'ERROR';				
	// 		}
	// 	// } else {
	// 	// 	// echo json_encode('error');
	// 	// }
	// 	// $feed = $this->main_model->production_line_stop_check()->row();
	// 	// echo json_encode($feed);
	// }

	// public function production_line_stop_change()
	// {
	// 	$input = $this->input->post();
	// 	$this->main_model->production_status_change($input);
	// 	echo json_encode('SUCCESS');
	// }

	// public function production_line_stop_update()
	// {
	// 	$input = $this->input->post();
	// 	$data['line_stop'] = $input['line_stop'];
	// 	$this->main_model->production_status_change($data);
	// 	$data2['time'] = $input['time'];
	// 	$this->main_model->production_line_stop_update($data2);
	// 	$feed = $this->main_model->get_production()->row();
	// 	echo json_encode($feed);
	// }

	// public function reset_production()
	// {
	// 	$data['timestamp'] = "0000-00-00 00:00:00";
	// 	$data['total'] = 0;
	// 	$data['count_speed'] = 0;
	// 	$data['speed'] = 0;
	// 	$data['line_stop'] = 0;
	// 	$data['eff'] = 100;
	// 	$this->main_model->update_production($data);
	// 	$feed = $this->main_model->get_production()->row();
	// 	echo json_encode($feed);
	// }

	// public function test()
	// {
	// 	$data2['time'] = 1;
	// 	$this->main_model->production_line_stop_update($data2);
	// 	$this->main_model->production_line_stop_update($data2);
	// 	echo json_encode('SUCCESS');
	// }

	// //--------------------------------------------------------------------------------------------------------------------
	// public function monitoring()
	// {
	// 	$data['title'] = "Dashboard";
	// 	$data['url'] = base_url();
	// 	$data['hmi'] = base_url('assets/images/hmi/');
	// 	$data['images'] = $this->main_model->get_monitoring_images()->result();
	// 	$data['symbol'] = $this->main_model->get_symbol()->result();
	// 	$data['monitoring'] = $this->main_model->get_monitoring()->row();
	// 	$data['position'] = [];
	// 	foreach ($data['images'] as $s){
	// 		array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
	// 	}
	// 	$this->template->display('content/monitoring', $data);
	// }

	// public function monitoring_added()
	// {
	// 	$time_now = date('Y-m-d H:i:00');
	// 	$monitoring = $this->main_model->get_monitoring()->row();
	// 	// if($time_now == $production->timestamp){
	// 	// 	$data['total'] = $production->total + 1;
	// 	// 	$data['count_speed'] = $production->count_speed + 1;
	// 	// } else {
	// 		$data['timestamp'] = $time_now;
	// 		$data['actual'] = $monitoring->actual + 1;
	// 		$data['selisih'] = $data['actual'] - $monitoring->target;
	// 	// }
	// 	$this->main_model->update_monitoring($data);
	// 	$feed = $this->main_model->get_monitoring()->row();
	// 	echo json_encode($feed);
	// }

	// public function reset_monitoring()
	// {
	// 	$monitoring = $this->main_model->get_monitoring()->row();
	// 	$data['timestamp'] = date("Y-m-d H:i:s");
	// 	$data['actual'] = 0;
	// 	$data['selisih'] = $data['actual'] - $monitoring->target;
	// 	$this->main_model->update_monitoring($data);
	// 	$feed = $this->main_model->get_monitoring()->row();
	// 	echo json_encode($feed);
	// }

	// /////////////////////////////////////////////////////
	

	// public function benchmark_record_data($API_KEY)
	// {
	// 	if(strtolower($API_KEY) == 'rezzaisthebest'){
	// 		$data['timestamp'] = date("Y-m-d H:i:00");
	// 		$this->main_model->add_benchmark_record($data);
	// 		echo 'SUCCESS';
	// 	}
	// }



















	





















	// public function stream()
	// {
	// 	$data['title'] = "Stream";
	// 	$data['url'] = base_url();
	// 	$this->template->display('content/stream', $data);
	// }

	// public function sample()
	// {
	// 	$data['title'] = "Dashboard";
	// 	$data['url'] = base_url();
	// 	$data['circuit'] = base_url('assets/images/circuit/');
	// 	$data['arr'] = [];
	// 	for ($i=1; $i<=100; $i++){		
	// 		array_push($data['arr'], $i);
	// 	}
	// 	$this->load->view('content/sample2', $data);
	// }


















	// public function get_curr_last_hour() //JSON
	// {
	// 	$hour = date('Y-m-d H:i:s', strtotime('-1 hour'));
	// 	$data = $this->main_model->get_curr_last_hour($hour)->result();
	// 	echo json_encode($data);
	// }

	// public function get_curr_now() //JSON
	// {
	// 	$raw = $this->input->post('minute');
	// 	$minute = date('Y-m-d H:i:s', $raw);
	// 	$data = $this->main_model->get_curr_now($minute)->result();
	// 	echo json_encode($data);
	// }

	// public function get_data_chart() //JSON
	// {
	// 	$from = $this->input->post('from');
	// 	$to = $this->input->post('to');
	// 	$clause = $this->input->post('clause');
	// 	$arr = $this->input->post('arr');
	// 	$clauseparam = explode(",", $arr);
	// 	$data = $this->main_model->get_data_chart($from, $to, $clause, $clauseparam)->result();
	// 	echo json_encode($data);
	// }

	// public function export_arus() //JSON
	// {
	// 	$from = $this->input->post('from');
	// 	$to = $this->input->post('to');
	// 	$clause = $this->input->post('clause');
	// 	$arr = $this->input->post('arr');
	// 	// $from = "2019-05-19 13:24";
	// 	// $to = "2019-05-19 14:24";
	// 	// $clause = "SECOND";
	// 	// $arr = "00";
	// 	$clauseparam = explode(",", $arr);
	// 	$data = $this->main_model->export_data($from, $to, $clause, $clauseparam)->result();
	// 	$file = $this->download('Record', $data);
	// 	// print_r($file);
	// }

    // public function download($name, $data)
    // {		
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    //     $sheet->setCellValue('A1', 'TIMESTAMP');
    //     $sheet->setCellValue('B1', 'ARUS 1');
    //     $sheet->setCellValue('C1', 'ARUS 2');
    //     $sheet->setCellValue('D1', 'ARUS 3');
    //     $sheet->setCellValue('E1', 'ARUS RATA-RATA');
    //     $sheet->setCellValue('F1', 'POWER APPARENT');
    //     $sheet->setCellValue('G1', 'POWER REAL ');
		
	// 	$i = 2;
	// 	foreach($data as $dt){
	// 		$sheet->setCellValue('A'.$i, $dt->timestamp);
	// 		$sheet->setCellValue('B'.$i, $dt->cur_1);
	// 		$sheet->setCellValue('C'.$i, $dt->cur_2);
	// 		$sheet->setCellValue('D'.$i, $dt->cur_3);
	// 		$sheet->setCellValue('E'.$i, $dt->cur_avg);
	// 		$sheet->setCellValue('F'.$i, $dt->power_app);
	// 		$sheet->setCellValue('G'.$i, $dt->power_real);
	// 		$i++;
	// 	} 
		
	// 	$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
	// 	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	// 	header('Content-Disposition: attachment; filename="'.$name.'.xlsx"');		
	// 	// ob_start();
	// 	// $writer->save("php://output");
	// 	// $xlsData = ob_get_contents();
	// 	// ob_end_clean();

	// 	// $response =  array(
	// 	// 	'op' => 'ok',
	// 	// 	'file' => "data:application/vnd.ms-excel;base64,".base64_encode($xlsData)
	// 	// );
	// 	// return $response;
	// 	return $writer->save("php://output");
 
    // }

	// public function export_area()
	// {
	// 	$data['title'] = "Export";
	// 	$data['url'] = base_url();
	// 	$area = $this->main_model->get_area()->result();
	// 	$data['area'] = $area;
	// 	foreach ($area as $a)
	// 	{
	// 		$data[$a->kode] = $this->main_model->get_pm_area($a->id)->result();
	// 		// $abc = $a->kode;
	// 		// print_r($$abc);
	// 	}
	// 		// print_r($area['kode']);

	// 	$this->template->display('content/area', $data);
	// }

}