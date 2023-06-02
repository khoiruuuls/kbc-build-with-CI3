<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// sign in - sign up

$route['auth/user-profile'] = 'SignController/user';
$route['auth/sign-in'] = 'SignController/signin';
$route['auth/sign-up'] = 'SignController/signup';
$route['auth/sign-up-consultant'] = 'SignController/signupConsultant';

// main route
$route['faq'] = 'HomeController/faq';
$route['blog'] = 'HomeController/blog';
$route['consultation'] = 'HomeController/consultation';
$route['eksplorasi'] = 'HomeController/eksplorasi';
$route['detail/program'] = 'HomeController/detailProgram';
$route['detail-program/(:num)'] = 'HomeController/detailProgram/$1';
$route['detail-consultant/(:num)'] = 'HomeController/detail/$1';




$route['detail-pesanan'] = 'HomeController/pesanan';
$route['pembayaran'] = 'HomeController/pembayaran';




$route['wishlist'] = 'Profile/wishlist';
$route['profile/my-program'] = 'Profile/myprogram';