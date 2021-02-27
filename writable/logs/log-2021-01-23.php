<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2021-01-23 00:01:03 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'date BETWEEN  AND  ORDER BY c.updated_at desc' at line 1
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * FROM g...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM g...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM g...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT * FROM g...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): Modules\Guests\Models\GuestsModel->getGuests(NULL, NULL)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-23 00:01:13 --> Undefined variable: date1
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 191, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:02:06 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 317
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(317): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:03:05 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 315
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(315): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:03:33 --> Undefined index: user_type
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(195): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 195, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:03:50 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'date BETWEEN 2021-01-18 AND 2021-01-22 ORDER BY c.updated_at desc' at line 1
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * FROM g...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM g...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM g...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT * FROM g...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(198): Modules\Guests\Models\GuestsModel->getGuests('2021-01-18', '2021-01-22')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-23 00:04:09 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'date BETWEEN 2021-01-18 AND 2021-01-22 ORDER BY updated_at desc' at line 1
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * FROM g...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM g...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM g...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT * FROM g...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(198): Modules\Guests\Models\GuestsModel->getGuests('2021-01-18', '2021-01-22')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-23 00:05:12 --> Undefined index: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(244): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 244, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:06:24 --> Undefined variable: date2
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(190): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 190, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:07:25 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 315
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(315): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:08:02 --> Call to a member function get() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-23 00:08:14 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 315
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(315): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:09:37 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:10:37 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:15:04 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:15:23 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:15:56 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:16:58 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 317
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(317): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:18:18 --> syntax error, unexpected '$date1' (T_VARIABLE), expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 00:18:32 --> Too few arguments to function Modules\Guests\Models\GuestsModel::getGuests(), 1 passed in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 199 and exactly 2 expected
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(199): Modules\Guests\Models\GuestsModel->getGuests(Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:18:49 --> Unknown column 'a' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * FROM g...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM g...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM g...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT * FROM g...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(199): Modules\Guests\Models\GuestsModel->getGuests('status', 'a', '2021-01-21', '2021-01-24')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-23 00:19:01 --> syntax error, unexpected '=', expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 00:19:12 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= a AND 2021-01-21' at line 1
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * FROM g...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM g...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM g...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT * FROM g...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(199): Modules\Guests\Models\GuestsModel->getGuests('status = a', '2021-01-21', '2021-01-24')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-23 00:19:32 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 317
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(317): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:19:46 --> Undefined variable: model
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(322): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 322, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:19:49 --> Undefined variable: model
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(322): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 322, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:19:49 --> Undefined variable: model
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(322): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 322, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:20:26 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:20:26 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:21:22 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:29:17 --> Unknown column '$date1' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT * FROM g...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT * FROM g...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT * FROM g...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT * FROM g...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(199): Modules\Guests\Models\GuestsModel->getGuests('2021-01-22', '2021-01-22')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-23 00:29:51 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:33:03 --> syntax error, unexpected '%'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(190): spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 00:33:23 --> syntax error, unexpected '%'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(190): spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 00:34:05 --> syntax error, unexpected '%'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(190): spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 00:37:18 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:37:39 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:37:39 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:38:28 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:38:43 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:38:57 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:38:57 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 316
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(316): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_guest()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:40:35 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 486
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(486): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 00:40:56 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 486
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(486): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:36:25 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\index.php(44): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 44, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\app\Views\theme\index.php(139): view('Modules\\Guests\\...', Array)
#4 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('App\\Views\\theme...', Array, NULL)
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(35): view('App\\Views\\theme...', Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->index()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-23 16:36:33 --> Undefined variable: guest_defined_list
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\index.php(44): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 44, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\app\Views\theme\index.php(139): view('Modules\\Guests\\...', Array)
#4 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#5 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('App\\Views\\theme...', Array, NULL)
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(35): view('App\\Views\\theme...', Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->index()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-23 16:38:41 --> Undefined variable: viewName
#0 C:\xampp\htdocs\HDS\app\Views\theme\index.php(139): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 139, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('App\\Views\\theme...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(494): view('App\\Views\\theme...', Array)
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:42:05 --> Undefined index: start_date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(337): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 337, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:42:41 --> Undefined index: start_date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(343): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 343, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:43:00 --> Undefined index: gender
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(348): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 348, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:43:55 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 485
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(485): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:44:02 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 485
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(485): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:50:57 --> syntax error, unexpected '{'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:51:43 --> syntax error, unexpected '{'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:52:00 --> syntax error, unexpected ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:53:37 --> syntax error, unexpected ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:55:32 --> syntax error, unexpected ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:55:37 --> Undefined index: start_date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(340): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 340, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:56:03 --> Undefined index: start_date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(346): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 346, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:56:48 --> Undefined index: start_date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(361): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 361, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:57:13 --> syntax error, unexpected ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 16:57:26 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 485
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(485): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 16:57:32 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 485
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(485): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:10:20 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 485
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(485): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:17:12 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 486
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(486): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:17:19 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 486
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(486): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:17:27 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 486
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(486): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:17:42 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 486
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(486): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:23:47 --> Undefined variable: guests
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestPDF.php(77): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 77, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(267): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:24:36 --> syntax error, unexpected end of file
#0 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(267): view('Modules\\Guests\\...')
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-23 17:25:01 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(267): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:25:55 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(267): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:26:28 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(267): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:28:06 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(267): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:31:02 --> Undefined index: margin_bottom
#0 C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Tag\BlockTag.php(974): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 974, Array)
#1 C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Tag.php(250): Mpdf\Tag\BlockTag->close(Array, 197)
#2 C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Mpdf.php(13776): Mpdf\Tag->CloseTag('LI', Array, 197)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(268): Mpdf\Mpdf->WriteHTML(' <div class="wr...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:31:40 --> Undefined index: margin_bottom
#0 C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Tag\BlockTag.php(974): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 974, Array)
#1 C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Tag.php(250): Mpdf\Tag\BlockTag->close(Array, 197)
#2 C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Mpdf.php(13776): Mpdf\Tag->CloseTag('LI', Array, 197)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(268): Mpdf\Mpdf->WriteHTML(' <div class="wr...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:32:14 --> Argument 1 passed to view() must be of the type string, array given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 268
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(268): view(Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:32:38 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(268): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:32:59 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(266): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:33:08 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(266): view('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:34:07 --> Undefined variable: guests_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Views\guests\guestspdf.php(43): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 43, Array)
#1 C:\xampp\htdocs\HDS\system\View\View.php(236): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\HDS\system\Common.php(176): CodeIgniter\View\View->render('Modules\\Guests\\...', Array, NULL)
#3 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(266): view('Modules\\Guests\\...', Array)
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-23 17:34:16 --> Argument 1 passed to view() must be of the type string, array given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 266
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(266): view(Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:40:44 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 350
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(350): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:41:01 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 741
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(741): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print('1')
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:41:10 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 350
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(350): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:42:30 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 346
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(346): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:42:41 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 346
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(346): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:42:48 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 346
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(346): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:42:48 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Mpdf.php:9540) in C:\xampp\htdocs\HDS\system\Debug\Exceptions.php:161
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\xampp\\htdocs...', 161, Array)
#1 C:\xampp\htdocs\HDS\system\Debug\Exceptions.php(161): header('HTTP/1.1 500 In...', true, 500)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(TypeError))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2021-01-23 17:42:58 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 346
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(346): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:42:58 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\HDS\vendor\mpdf\mpdf\src\Mpdf.php:9540) in C:\xampp\htdocs\HDS\system\Debug\Exceptions.php:161
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\xampp\\htdocs...', 161, Array)
#1 C:\xampp\htdocs\HDS\system\Debug\Exceptions.php(161): header('HTTP/1.1 500 In...', true, 500)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(TypeError))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2021-01-23 17:45:15 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 343
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(343): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:45:24 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 343
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(343): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:45:35 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 343
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(343): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:45:45 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 343
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(343): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:45:52 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 343
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(343): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:46:24 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 347
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:47:20 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 347
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:49:28 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 348
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(348): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:50:50 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 348
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(348): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:51:07 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 348
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(348): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:51:29 --> Call to a member function setContentType() on null
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-23 17:51:38 --> Call to a member function setContentType() on null
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-23 17:52:25 --> Call to undefined method Mpdf\Mpdf::setContentType()
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): Mpdf\Mpdf->__call('setContentType', Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:53:04 --> Call to undefined method Mpdf\Mpdf::SetContentType()
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): Mpdf\Mpdf->__call('SetContentType', Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 17:53:38 --> Call to a member function setContentType() on null
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-23 17:53:47 --> Call to a member function setContentType() on null
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-23 18:15:07 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 347
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 18:15:13 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 347
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 18:15:23 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 347
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 18:15:33 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 347
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(347): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-23 18:22:36 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 345
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(345): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
