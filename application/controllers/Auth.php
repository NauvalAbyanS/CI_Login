<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function test(){
		$this->load->view('auth/login');
	}
	public function index(){
	 	$this->load->view('include/auth_header');
		$this->load->view('auth/login');
		$this->load->view('include/auth_footer');
	}
	public function register(){
		$this->load->view('include/auth_header');
		$this->load->view('auth/register');
		$this->load->view('include/auth_footer');
	}
	
}