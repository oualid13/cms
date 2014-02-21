<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->library('parser');
    }

	public function index(){
		$this->accueil();
	}

	public function accueil(){
		$data = array();
		$data['pseudo'] = 'oualid';
		$data['email'] = 'oualid.mahri@gmail.com';
		$data['en_ligne'] = true;

		$cache = $this->parser->parse('view', $data);
		 $this->load->view('forum');
		//$this->load->view('view', $data);
	}

	//	Cette page accepte une variable $_GET facultative
	public function bonjour($pseudo = ''){
		echo 'Salut à toi : ' . $pseudo;
	}

}