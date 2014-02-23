<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('pages_model', 'pageManager');
    }

	public function index(){
		$this->page();
	}

	public function authentication_page(){
		$this->load->view('/staticPages/login');
	}

}