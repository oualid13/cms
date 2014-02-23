<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model{
	
	protected $table = 'pages';
	protected $code;
	protected $title;
	protected $content;
	protected $template;


	/**
	 *	renvoyer une page
	 */
	public function get_page($code){
		return $this->db->select('*')
					->from($this->table)
					->where('code', $code)
					->get()
					->result();
	}




	/**
	 *	Ajoute une page
	 */
	public function add_page($code, $title, $content, $template){

		//	Ces données seront automatiquement échappées
		 return $this->db->set('code',  $code)
				->set('title',   $title)
				->set('content', $content)
				->set('template', $template)
				->set('date_ajout', 'NOW()', false)
				->set('date_modif', 'NOW()', false)
				->insert($this->table);
		
	}
	
	/**
	 *	Édite une page déjà existante
	 */
	public function update_page($code, $title, $content, $template){
		return $this->db->set('title', $title)
				->set('content', $content)
				->set('template', $template)
				->set('date_modif', 'NOW()', false)
				->where('code',  $code)
				->update($this->table);


	}
	
	/**
	 *	Supprime une page
	 */
	public function delete_page($code){
		return $this->db->where('code', $code)
				->delete($this->table);


	}
	
	/**
	 *	Retourne le nombre de page
	 */
	public function count(){
		
	}
	
	/**
	 *	Retourne une liste de page
	 */
	public function list_pages(){
		
	}


}