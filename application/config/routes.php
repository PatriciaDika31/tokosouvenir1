<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'DashBoard'; //mengatur controller yg akan digunakan untuk default controller.
$route['404_override'] = ''; //untuk menampilkan jika halaman tidak ditemukan
$route['translate_uri_dashes'] = FALSE; //mengganti - menjadi _ pada uri segment jika diperlukan. 
//uri segment adalah mengambil data dari url