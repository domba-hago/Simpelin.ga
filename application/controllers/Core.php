<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function kirim_mail()
	{
		echo "Terima kasih. Pesan Anda akan kami proses dengan segera<br>";
		echo "<a href='" . base_url('') . "' title='Kembali ke halaman utama'>Halaman Utama</a>";
	}
}