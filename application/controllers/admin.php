<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

     //constructeur de la classe
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','userManager');
    }

    function index(){
	     if($this->userManager->isLoggedIn()){
	          redirect('admin/dashboard','refresh');
	     } else {
	          redirect('admin/login','refresh');
	     }
	}

	function login(){
	     if($this->userManager->isLoggedIn()){
	          redirect('admin','refresh');
	     } else {
	       
	          //on définit les règles de succès
	          $this->form_validation->set_rules('username','Login','required');
	          $this->form_validation->set_rules('password','Mot de passe','required');

	          //si la validation a échouée on redirige vers le formulaire de login
	          if(!$this->form_validation->run()){
	               $this->load->view('staticPages/login');
	          } else {
	               $username = $this->input->post('username');
	               $password = $this->input->post('password');
	               $validCredentials = $this->userManager->validCredentials($username,$password);

	               if($validCredentials){
	                    redirect('admin/dashboard','refresh');
	               } else {
	                    $data['error_credentials'] = 'Wrong Username/Password';
	                    $this->load->view('staticPages/login',$data);
	               }
	          }
	     }
	     //$cache = $this->parser->parse('view', $data);
	}

	function dashboard(){
	    if($this->userManager->isLoggedIn())
	        $this->load->view('staticPages/admin');
	    else
	    	$this->load->view('staticPages/login');
	}
}
?>