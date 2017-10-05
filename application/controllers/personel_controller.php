<?php
class Personel_controller extends CI_Controller{
	
	/*function __construct() {
		parent::__construct();
		$this->load->model('insert_model');
	}*/
	
	public function index()
	{
		/*$this->load->helper(array('form', 'url'));
		$this->load->libary('form_validation');
		
		$this->form_validation->set_rules('v_name', 'Vorname', 'required', array('required'=> 'Bitte geben Sie einen %s.'));
		$this->form_validation->set_rules('n_name', 'Nachname', 'required', array('required'=> 'Bitte geben Sie einen %s.'));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', array('required'=> 'Bitte geben Sie einen %s.'));
		if($this->form_validation->run() == FALSE){
			$this->load-view('formular_personalien');
		}else{
			$this->load->view('sucess_page');
		}*/
	}
	
	
	
	public function test ()
	{
		//print_r($_POST);
		//die('lol');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_data($_POST);
		$this->form_validation->set_rules('v_name', 'Vorname', 'required', array('required'=> 'Bitte geben Sie einen %s.'));
		$this->form_validation->set_rules('n_name', 'Nachname', 'required', array('required'=> 'Bitte geben Sie einen %s.'));
		$this->form_validation->set_rules('email', 'Email', 'required', array('required'=> 'Bitte geben Sie einen %s.'));
		if($this->form_validation->run() == FALSE){
			$this->load->view('formular_personalien');
		}else{
			$data = array(
			'Vorname' => $this->input->post('v_name'),
			'Nachname' => $this->input->post('n_name'),
			'Email' => $this->input->post('email')
			);
			$this->load->model('insert_model');
			$this->insert_model->form_insert($data);
			$this->load->view('sucess_page');
		}
	}	
}