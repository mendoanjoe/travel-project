<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['URL'] = 'CONTROLLER';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['search'] = 'home/search';
$route['prebooking'] = 'home/prebooking';
$route['booking'] = 'home/booking';
$route['payment'] = 'home/payment';

$route['admin/home/order/approve/(:num)'] =  'admin/order_approve/$1';
$route['admin/home/order/cancel/(:num)'] =  'admin/order_cancel/$1';

$route['admin/ticket/view'] = 'admin/ticket_view';
$route['admin/ticket/view/(:num)'] = 'admin/ticket_view/$hehe';

$route['admin/ticket/seat'] = 'admin/ticket_seat';
$route['admin/ticket/seat/(:num)'] = 'admin/ticket_seat/$1';

$route['admin/ticket/status'] = 'admin/ticket_status';
$route['admin/ticket/status/(:num)'] = 'admin/ticket_status/$1';

$route['admin/route/view'] = 'admin/route_view';
$route['admin/route/view/(:num)'] = 'admin/route_view/$1';

$route['admin/route/seat'] = 'admin/route_seat';
$route['admin/route/seat/(:num)'] = 'admin/route_seat/$1';

$route['admin/route/status'] = 'admin/route_status';
$route['admin/route/status/(:num)'] = 'admin/route_status/$1';

$route['admin/airplane/view'] = 'admin/airplane_view';
$route['admin/airplane/view/(:num)'] = 'admin/airplane_view/$1';

$route['admin/airplane/seat'] = 'admin/airplane_seat';
$route['admin/airplane/seat/(:num)'] = 'admin/airplane_seat/$1';

$route['admin/airplane/status'] = 'admin/airplane_status';
$route['admin/airplane/status/(:num)'] = 'admin/airplane_status/$1';

$route['admin/ticket/op/create'] = 'admin/ticket_create';
$route['admin/ticket/op/update/(:num)'] = 'admin/ticket_update/$1';
$route['admin/ticket/op/update/seat/(:num)'] = 'admin/ticket_update_seat/$1';
$route['admin/ticket/op/update/status/(:num)'] = 'admin/ticket_update_status/$1';
$route['admin/ticket/op/delete/(:num)'] = 'admin/ticket_delete/$1';

$route['admin/route/op/create'] = 'admin/route_create';
$route['admin/route/op/update/(:num)'] = 'admin/route_update/$1';
$route['admin/route/op/update/status/(:num)'] = 'admin/route_update_status/$1';
$route['admin/route/op/delete/(:num)'] = 'admin/route_delete/$1';

$route['admin/airplane/op/create'] = 'admin/airplane_create';
$route['admin/airplane/op/update/(:num)'] = 'admin/airplane_update/$1';
$route['admin/airplane/op/update/status/(:num)'] = 'admin/airplane_update_status/$1';
$route['admin/airplane/op/delete/(:num)'] = 'admin/airplane_delete/$1';

$route['admin/reserved/view/(:num)'] = "admin/reserved_view/$1";
$route['admin/reserved/op/delete/(:num)'] = 'admin/reserved_delete/$1';

$route['admin/setting/save'] = "admin/setting_save";
