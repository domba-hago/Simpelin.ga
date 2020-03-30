<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('simpelin');
	}

	function proses()
	{
		$urlStr = $this->input->post('url');
		$parsed = parse_url($urlStr);

		if (empty($parsed['scheme']))
			$urlStr = 'http://' . ltrim($urlStr, '/');

		$data['url_long']	= $urlStr;
		$data['url_short']	= $url_short = $this->simpelin->RandomString();

		$this->simpelin->SimpanData($data);
		$this->session->set_flashdata('status', '<p class="status alert alert-success">Link pendek Anda<br>' . base_url('u/' . $url_short) . '</p>');
		redirect(base_url(''));
	}

	function index()
	{
		$this->load->view('index');
	}

	function u($url)
	{
		$url = $this->simpelin->BacaData($url);
		foreach ($url as $row)
		{
			echo 'Redirect to: ' . $row->url_long;
			redirect($row->url_long);
		}
	}

	function about()
	{
		$this->load->view('about');
	}

	function help()
	{
		$this->load->view('help');
	}
}