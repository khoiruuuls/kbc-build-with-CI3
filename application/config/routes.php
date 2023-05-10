<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// sign in - sign up

$route['auth/sign-in'] = 'SignController/signin';
$route['auth/sign-up'] = 'SignController/signup';
$route['auth/sign-up-consultant'] = 'SignController/signupConsultant';

// main route
$route['faq'] = 'HomeController/faq';
$route['blog'] = 'HomeController/blog';
$route['consultation'] = 'HomeController/consultation';
$route['coaching'] = 'HomeController/coaching';
