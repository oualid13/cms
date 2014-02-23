<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StaticPage extends CI_Controller{

	public function __construct(){
        parent::__construct();
    }

	public function index(){
		$this->home();
	}

	public function home(){

		

		$this->load->view('home');

	}
	

	public function authentication(){

		 $this->load->view('authentication');

	}
	//post
	public function login($username, $password){

		 $this->load->view('authentication');

	}

}