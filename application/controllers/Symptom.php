<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Symptom extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('main_model');
		$this->load->model('symptom_model');
		$this->load->library('template');
        $this->load->library('session');
        $this->load->library('datatables');
        //$this->is_login();
	}

	public function index()
	{
		$this->symptom();
	}

	public function symptom()
	{
		$data['title'] = "SYMPTOM";
		$data['title_icon'] = "fa-bar-chart";
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
		$this->template->display('content/symptom', $data);
	}

	public function get_data_today()
	{
		$modul = "5am1";
		$initial = date("Y-m-d 06:00:00");
		$end = date("Y-m-d 06:00:00", strtotime('+1 day'));
		$data["motor_1"] = $this->symptom_model->get_data_today($modul."1",$initial,$end)->result();
		$data["motor_2"] = $this->symptom_model->get_data_today($modul."2",$initial,$end)->result();
		$data["motor_3"] = $this->symptom_model->get_data_today($modul."3",$initial,$end)->result();
		$data["motor_4"] = $this->symptom_model->get_data_today($modul."4",$initial,$end)->result();
		echo json_encode($data);
	}

}