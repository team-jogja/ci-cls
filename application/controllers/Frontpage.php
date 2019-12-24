<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/index');
		$this->load->view('templates/front_footer');
	}

	public function about()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/about');
		$this->load->view('templates/front_footer');
	}

	public function why()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/why');
		$this->load->view('templates/front_footer');
	}

	public function explore()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/explore');
		$this->load->view('templates/front_footer');
	}

	public function rms()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/rms');
		$this->load->view('templates/front_footer');
	}

	public function ecommerce()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/ecommerce');
		$this->load->view('templates/front_footer');
	}

	public function fullfillment()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/fullfillment');
		$this->load->view('templates/front_footer');
	}

	// public function blog()
	// {
	// 	$this->load->view('templates/front_header');
	// 	$this->load->view('frontpage/blog');
	// 	$this->load->view('templates/front_footer');
	// }

	public function career()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/career');
		$this->load->view('templates/front_footer');
	}

	public function contact()
	{
		$this->load->view('templates/front_header');
		$this->load->view('frontpage/contact');
		$this->load->view('templates/front_footer');
	}

	

	
}
