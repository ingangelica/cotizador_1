<?php if ( ! defined('BASEPATH')) exit('No directed script access allowed');

class Login extends MX_Controller {

	function __construct(){
		parent::__construct();
	}

	function index()
	{
		$this->load->view('login');
	}
}
?>