<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){		
		$data['judul'] = "Fibonacci";
		$this->load->view('v_header',$data);
		$this->load->view('v_web',$data);
		$this->load->view('v_footer',$data);
	}

	
}