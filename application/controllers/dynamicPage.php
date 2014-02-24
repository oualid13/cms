<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DynamicPage extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('pages_model', 'pageManager');
    }

	public function index(){
		$this->display_page();
	}

	public function display_page($pageCode="HOME"){



		/*$data = array();
		$data['pseudo'] = 'oualid';
		$data['email'] = 'oualid.mahri@gmail.com';
		$data['en_ligne'] = true;

		$cache = $this->parser->parse('view', $data, true);

		$this->load->view('forum');*/

		$result = $this->pageManager->get_page($pageCode)[0];
		
		if ($result->type =='static')
			$this->load->view('staticPages/' . $pageCode);
		else {
			$data ['title'] = $result->title;
			$data ['content'] = $result->content;
			$data ['template'] = $result->template;
			$this->parser->parse('/panels/head', $data);
			$this->parser->parse('/panels/header', $data);
			$this->parser->parse('/template/'. $data['template'], $data);
			$this->parser->parse('/panels/footer', $data);

		}
	}

	public function add_page ($code, $title, $content, $template){

		$result = $this->pageManager->add_page($code, $title, $content, $template);
		var_dump($result);

	}

	public function update_page ($code, $title, $content, $template){

		$result = $this->pageManager->update_page($code, $title, $content, $template);
		var_dump($result);

	}

	public function delete_page ($code){

		$result = $this->pageManager->delete_page($code);
		var_dump($result);

	}

}