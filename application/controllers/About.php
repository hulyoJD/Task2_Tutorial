<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
        $this->load->helper('url');
        
		$this->load->view('include/header');
		$this->load->view('pages/about');
		$this->load->view('include/footer');

	}
}