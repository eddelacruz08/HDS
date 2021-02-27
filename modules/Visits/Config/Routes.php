<?php
$routes->group('visits', ['namespace' => 'Modules\Visits\Controllers'], function($routes)
{
    $routes->get('/', 'Visits::index');
    $routes->match(['get', 'post'], 'print', 'Visits::print_attendance');
});
$routes->group('checklists', ['namespace' => 'Modules\Visits\Controllers'], function($routes)
{
    $routes->match(['get', 'post'], 'capture/(:num)', 'Checklist::capture_checklist/$1');
    $routes->match(['get', 'post'], 'scan/(:num)', 'Checklist::scan_checklist/$1');
    $routes->match(['get', 'post'], 'edit/(:num)/(:num)', 'Checklist::edit_checklists/$1/$2');
});
