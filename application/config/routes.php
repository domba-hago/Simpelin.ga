<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'pages';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

$route['u/(:any)']		= 'pages/u/$1';
$route['tentang']		= 'pages/about';
$route['bantuan']		= 'pages/help';