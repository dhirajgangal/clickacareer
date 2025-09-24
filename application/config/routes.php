<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "clickacareer";
$route['404_override'] = '';
//$route['404_override']         = ($this->uri->segment(1) == 'admin' ? 'errors/admin_404' : 'errors/front_404');
$route['translate_uri_dashes'] = TRUE;

/****** Start front entity route ********/
$route['services']          = 'clickacareer/services';
$route['ourstory']         = 'clickacareer/ourstory';
$route['leadershipteam']  = 'clickacareer/leadershipteam';
$route['joblisting']       = 'clickacareer/joblisting';
$route['contact']       = 'clickacareer/contact';

$route['job_description/(:num)'] = 'clickacareer/job_description/$1';
$route['profile/(:num)'] = 'clickacareer/profile/$1';
$route['joblisting']          = 'clickacareer/joblisting';
/****** End front entity route ********/

/****** Start admin panel route ********/
// $route['admin']        = 'admin/login/index';
/****** End front entity route *********/


/* End of file routes.php */
/* Location: ./application/config/routes.php */