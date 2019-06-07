<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

// Book REST API Routes
$route['api/books'] = 'api/bookcontroller/books';
$route['api/databuku'] = 'api/bookcontroller/databooks';
$route['api/tambahbuku'] = 'api/bookcontroller/insertbooks';
