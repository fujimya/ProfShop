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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Controller_Masuk/masuk_akun';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['de69812784f2c02dffff1be7t84cfe52'] = 'Controller_Masuk/masuk_akun';

$route['ed3ceb87d825abdf4a52508302ef5037'] = 'Controller_Salah';
$route['b6cdac2ab744696e170350fe2e6f979f'] = 'Controller_User';
$route['de69812784f2c02044e61be7t84cfe52'] = 'ControllerUtama';

$route['b8e02d83ede9831bf79fb654793d8021'] = '';
$route['b5609916968e1e51feaaca29025a9ef1'] = '';

$route['6a031c485889b7b03a0852cfaeabf7f2'] = '';
$route['05bc3787f7fb67472fe96b4fc985e472'] = '';

$route['4419ecc30ef2367f60f853083eadafce'] = '';
$route['80d22e374dbdeb59260fe3de024b281c'] = '';
