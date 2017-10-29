<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	private $result;
	function __construct() {
		parent::__construct ();		
		$this->load->model ( 'Login_model' );
		$this->result = array (
				"checkResult" => null,
				"typeNotification" => null 
		);
	}
	public function index() {
		$this->load->view ( 'header' );
		$this->load->view ( 'body', $this->result );
		$this->load->view ( 'footer' );
	}
	public function checkLogin() {
		$dataCheck = array (
				'user' => $this->input->post ( 'user' ),
				'password' => $this->input->post ( 'password' ) 
		);
		$this->result ["typeNotification"] = null;
		$this->result ["checkResult"] = $this->Login_model->check ( $dataCheck );
		if ($this->result ["checkResult"] != false) {
			if (isset ( $this->result ["checkResult"] )) {
				foreach ( $this->result ["checkResult"]->result () as $valor ) {
					$this->result ["typeNotification"] = 1;
					$this->result ["typeMessage"] = "Inicio de Sesion Exitoso!";
				}
			}
		} else {
			if (isset ( $this->result ["checkResult"] )) {
				$this->result ["typeNotification"] = 4;
				$this->result ["typeMessage"] = "Inicio de Sesion Erroneo!";
			}
		}
		$this->load->view ( 'header' );
		$this->load->view ( 'body', $this->result );
		$this->load->view ( 'footer' );
	}
}
