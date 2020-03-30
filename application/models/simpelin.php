<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpelin extends CI_Model
{
	function RandomString($length = 8)
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';

	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

	    return $randomString;
	}

	function SimpanData($array)
	{
		$this->db->insert('data_url', $array);
	}

	function BacaData($syarat)
	{
		$this->db->select('url_long')->from('data_url')->where('url_short', $syarat);
		$query = $this->db->get();
		
		return $query->result();
	}
}