<?php
defined('BASEPATH') OR exit('No direct script access allowed');



/*** Dashboard   ****/




/**** Admin controller section ****/
$route['dashboard'] = "admin/dashboard";
$route['articles'] = "admin/articles";
$route['allUsers'] = "admin/allUsers";
$route['editUser'] = "admin/editUser";
$route['editUser/(:num)'] = "admin/editUser/$1";
$route['editArticle'] = "admin/editArticle";
$route['editArticle/(:num)'] = "admin/editArticle/$1";







/**** Login controller section ****/
$route['postLogin'] = "adminlogin/postLogin";
$route['logout'] = "adminlogin/logout";



$route['default_controller'] = 'adminlogin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
