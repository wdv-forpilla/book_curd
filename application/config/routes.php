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
$route['default_controller'] = 'users/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//BOOKS CURD
$route['posts/create'] = 'posts/create';
$route['posts/view'] = 'posts/view';
$route['posts/view_2'] = 'posts/view_2';
$route['posts/update'] = 'posts/update';
$route['posts/delete'] = 'posts/delete';

//NEW BOOKS_AJAX CALLS
$route['books_ajax_fetchdata'] = 'books/books_ajax_fetchdata';
$route['books_ajax_create'] = 'books/books_ajax_create';
$route['books_ajax_edit'] = 'books/books_ajax_edit';
$route['books_ajax_delete'] = 'books/books_ajax_delete';

//NEW AUTHOR_AJAX CALLS
$route['author_ajax_fetchdata'] = 'author/author_ajax_fetchdata';
$route['author_ajax_create'] = 'author/author_ajax_create';
$route['author_ajax_edit'] = 'author/author_ajax_edit';
$route['author_ajax_delete'] = 'author/author_ajax_delete';

$route['posts/(:any)'] = 'posts/edit/$1';
$route['pages/(:any)'] = 'pages/index/$1';




