<?php

$routes->group('guests', ['namespace' => 'Modules\Guests\Controllers'], function($routes)
{
    $routes->get('/', 'Guests::index');
    $routes->get('delete/(:num)', 'Guests::delete_guest/$1');
    $routes->match(['get', 'post'], 'add', 'Guests::add_guest');
    $routes->match(['get', 'post'], 'print', 'Guests::print_total_student');
    $routes->get('show/(:num)', 'Guests::show_guest/$1');//ito yung sa show
    $routes->match(['get', 'post'], 'edit/(:num)', 'Guests::edit_guest/$1');
    $routes->get('print/(:num)', 'Guests::print/$1');//ito yung sa show
    $routes->get('print_summary/(:num)/(:num)', 'Guests::print_summary/$1/$2');//ito yung sa show
});

$routes->group('visits', ['namespace' => 'Modules\Guests\Controllers'], function($routes)
{
    $routes->get('(:num)', 'Visits::index/$1');
    $routes->match(['get', 'post'], 'add/(:num)', 'Visits::add/$1');
    $routes->match(['get', 'post'], 'edit/(:num)/(:num)', 'Visits::edit/$1/$2');
    $routes->get('start/(:num)', 'Visits::start/$1');
    $routes->get('end/(:num)/(:num)', 'Visits::end/$1/$2');
    $routes->get('delete/(:num)/(:num)', 'Visits::delete/$1/$2');
});
