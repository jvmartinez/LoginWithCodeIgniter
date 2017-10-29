<?php
class Login_model extends CI_Model{
	function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	function check($data){
		$query = $this->db->get_where( 'Login', array('user'=>$data["user"],'password'=>$data["password"]) );
		//$sql = "select * from Login where user='".$data['user']."' and password='".$data['password']."'";
		//$query = $this->db->query($sql);
		if ($query->num_rows () > 0) {
			return $query;
		} else {
			return false;
		}
	}
}