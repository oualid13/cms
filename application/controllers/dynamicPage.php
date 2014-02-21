<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DynamiquePage extends CI_Controller{

	public function __construct(){
        parent::__construct();
    }

	public function index(){
		$this->page();
	}

	public function page($pageCode="404"){



		$data = array();
		$data['pseudo'] = 'oualid';
		$data['email'] = 'oualid.mahri@gmail.com';
		$data['en_ligne'] = true;

		$cache = $this->parser->parse('view', $data, true);

		 $this->load->view('forum');
		//$this->load->view('view', $data);
	}

}