<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
     
     public function __construct(){
        parent::__construct();
     }

     function validCredentials($username,$password){
	    

	     $password = $this->encrypt->sha1($password);

	     //requête préparée, beaucoup plus sécurisé
	     $q = "SELECT * FROM users WHERE username = ? AND password = ?";

	     $data = array($username,$password);
	     $q = $this->db->query($q,$data);

	     if($q->num_rows() > 0){
	          $r = $q->result();
	          $session_data = array('username' => $r[0]->username,'logged_in' => true);
	          $this->session->set_userdata($session_data);
	          return true;
	     } else { return false; }
	}

	function isLoggedIn(){
	     if($this->session->userdata('logged_in')){
	     	return true; 
	     }else{ 
	     	return false; 
	     }
	}
}
?>