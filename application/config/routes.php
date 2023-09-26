<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['tentangkami/profil'] = 'frontend/profil';
$route['tentangkami/struktur'] = 'frontend/struktur';
$route['tentangkami/tatakelola'] = 'frontend/tatakelola';
$route['tentangkami/mutu'] = 'frontend/mutu';
$route['tentangkami/ketidakberpihakan'] = 'frontend/ketidakberpihakan';
$route['tentangkami/antisuap'] = 'frontend/antisuap';
$route['tentangkami/artilogo'] = 'frontend/artilogo';

$route['galeri'] = 'frontend/galeri';
$route['media'] = 'frontend/media';


$route['layanan/iso9001'] = 'frontend/iso9001';
$route['layanan/iso13485'] = 'frontend/iso13485';
$route['layanan/iso14001'] = 'frontend/iso14001';
$route['layanan/iso21001'] = 'frontend/iso21001';
$route['layanan/iso22000'] = 'frontend/iso22000';
$route['layanan/iso27001'] = 'frontend/iso27001';
$route['layanan/iso37001'] = 'frontend/iso37001';
$route['layanan/iso45001'] = 'frontend/iso45001';
$route['layanan/iso50001'] = 'frontend/iso50001';

$route['sertifikasi/konsultasi'] = 'frontend/konsultasi';
$route['sertifikasi/sertifikasi_awal'] = 'frontend/sertifikasi_awal';
$route['sertifikasi/sertifikasi_ulang'] = 'frontend/sertifikasi_ulang';
$route['sertifikasi/persyaratan'] = 'frontend/persyaratan';
$route['sertifikasi/permohonan'] = 'frontend/permohonan';
$route['sertifikasi/penolakan'] = 'frontend/penolakan';
$route['sertifikasi/pembekuan'] = 'frontend/pembekuan';
$route['sertifikasi/kajian'] = 'frontend/kajian';
$route['sertifikasi/audit_satu'] = 'frontend/audit_satu';
$route['sertifikasi/audit_dua'] = 'frontend/audit_dua';
$route['sertifikasi/surveillance'] = 'frontend/surveillance';
$route['sertifikasi/perjanjian'] = 'frontend/perjanjian';
$route['sertifikasi/keputusan'] = 'frontend/keputusan';
$route['sertifikasi/penerbitan'] = 'frontend/penerbitan';
$route['sertifikasi/pencabutan'] = 'frontend/pencabutan';
$route['sertifikasi/pengaktifan'] = 'frontend/pengaktifan';
$route['sertifikasi/perluasan'] = 'frontend/perluasan';
$route['sertifikasi/pengurangan'] = 'frontend/pengurangan';

$route['sertifikasi/keluhan'] = 'frontend/keluhan';
$route['sertifikasi/ketentuan_logo'] = 'frontend/ketentuan_logo';
$route['sertifikasi/hak_kewajiban'] = 'frontend/hak_kewajiban';


$route['login'] = 'frontend/login';
$route['register'] = 'frontend/register';

$route['profil'] = 'frontend/profile';
$route['certificate'] = 'frontend/certificate';
