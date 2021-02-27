<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2021-02-07 20:00:37 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 701
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(701): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print('1')
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
