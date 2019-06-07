<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

// Book REST API Routes
$route['api/jsonbooks'] = 'api/bookcontroller/jsonbooks';
$route['api/books'] = 'api/bookcontroller/books';
$route['api/addbooks'] = 'api/bookcontroller/addbooks';
$route['api/updatebooks'] = 'api/bookcontroller/updatebooks';
$route['api/deletebooks'] = 'api/bookcontroller/deletebooks';