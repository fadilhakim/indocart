<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'fundamental';
$route['404_override'] = 'fundamental/page404';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'fundamental';
$route['about'] = 'fundamental/about';
$route['contact'] = 'fundamental/contact';


$route['request'] = 'fundamental/request';
$route['indocart'] = 'fundamental/maintenance';

$route['product'] = 'product/category';
$route['product/(:any)'] = 'product/view';
$route['product/(:any)/(:num)'] = 'product/view';

$route['product-list/(:any)'] = 'product/view_list';
$route['product-list/(:any)/(:num)'] = 'product/view_list';

$route['product/detail/(:any)/(:any)/(:num)'] = 'product/detail/$1/$2/$3';


$route['news'] = 'news';
$route['news/detail/(:num)'] = 'news/detail/$1';

//admin route
$route['admin'] = 'admin';
$route['admin/product'] = 'admin/product';
$route['admin/product-list'] = 'admin/list_product';
$route['admin/product-category'] = 'admin/category_product';

$route['admin/news'] = 'admin/news';
$route['admin/subscriber'] = 'admin/subscriber';

//insert
$route['admin/insert/slider'] = 'insert/insert_slider';
$route['admin/insert/product'] = 'insert/insert_product';
$route['admin/add/news'] = 'insert/insert_news';
 
 $route['contact/input_subs'] = 'contact/input_subs';

//delete
$route['admin/delete/product/(:num)'] = 'delete/delete_product';
$route['admin/delete/slider/(:num)/(:any)'] = 'delete/delete_slider';
$route['admin/delete/news/(:num)'] = 'delete/delete_news';


//edit view
$route['admin/edit/product/(:any)/(:any)'] = 'admin/edit_product/$1/$2';
$route['admin/edit/news/(:num)'] = 'admin/edit_news/$1';
$route['admin/edit/slider/(:num)'] = 'admin/edit_slider/$1';

//edit function
$route['admin/edit/slider_f'] = 'update/update_slider';
$route['admin/edit/product_f'] = 'update/update_product';
$route['admin/edit/news_f'] = 'update/update_news';



// $route['cart/remove_item/(:any)'] = 'cart/removeCartItem/$1';