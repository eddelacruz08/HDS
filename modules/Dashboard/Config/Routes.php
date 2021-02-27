<?php

$routes->group('dashboard', ['namespace' => 'Modules\Dashboard\Controllers'], function($routes)
{
    $routes->get('/', 'Dashboard::index');
    //$routes->get('(:num)', 'Dashboard::index/$1');

    $routes->match(['get', 'post'], 'add', 'Dashboard::add_dashboard/$1');
    $routes->get('(:num)', 'Dashboard::index/$1');
    $routes->get('show/(:num)', 'Dashboard::show_dashboard/$1');//ito yung sa show
    $routes->match(['get', 'post'], 'edit', 'Dashboard::edit_dashboard');
    $routes->get('show/(:num)', 'Dashboard::show_dashboard/$1');//ito yung sa show

    $routes->get('print/(:num)', 'Guests::print_total_student/$1/$2');
});
