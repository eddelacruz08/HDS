<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2021-01-22 15:15:58 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 337
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(337): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 15:16:07 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 337
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(337): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 15:16:17 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 337
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(337): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 15:37:34 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 728
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(728): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print('1')
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 17:55:23 --> Call to a member function where() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 17:55:33 --> Undefined index: date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(195): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 195, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:02:29 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:02:39 --> Call to a member function where() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:03:18 --> Call to a member function get() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:04:18 --> Call to a member function get() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:05:08 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:05:21 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:07:08 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:07:47 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:07:54 --> Unknown column 'BETWEEN' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 18:08:10 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:08:31 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:08:57 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:09:07 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:09:22 --> Trying to access array offset on value of type null
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(271): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to acces...', 'C:\\xampp\\htdocs...', 271, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:13:31 --> Undefined property: Modules\Guests\Controllers\Guests::$db
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(219): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 219, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:13:55 --> Object of class Modules\Guests\Models\GuestsModel could not be converted to string
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:14:21 --> Object of class Modules\Guests\Models\GuestsModel could not be converted to string
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:19:48 --> Not unique table/alias: 'guests'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array, Array, Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 18:20:14 --> Unknown column '0.date' in 'field list'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array, Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 18:21:22 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(13): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array, Array, Array)
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-22 18:21:46 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(13): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array, Array)
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-22 18:22:13 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:22:23 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:22:31 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:22:38 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:22:45 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:23:10 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND `date` = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 18:24:06 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:24:50 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:25:52 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:26:34 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:26:57 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 341
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(341): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:28:27 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:28:36 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:28:47 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:30:19 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:30:29 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:30:30 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:31:15 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:31:26 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:31:51 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:32:43 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:33:53 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 345
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(345): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:34:08 --> Call to a member function get() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:50:47 --> Call to a member function get() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 18:51:01 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:51:30 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:52:04 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:52:56 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:53:13 --> syntax error, unexpected ')', expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:53:23 --> Illegal parameter data types date and row for operation '='
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 18:53:44 --> Array to string conversion
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 437, Array)
#1 C:\xampp\htdocs\HDS\system\Database\Query.php(437): implode(',', Array)
#2 C:\xampp\htdocs\HDS\system\Database\Query.php(404): CodeIgniter\Database\Query->matchNamedBinds('SELECT `guests`...', Array)
#3 C:\xampp\htdocs\HDS\system\Database\Query.php(197): CodeIgniter\Database\Query->compileBinds()
#4 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\Query->getQuery()
#5 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#6 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#7 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#8 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get(Array)
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#10 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#11 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#12 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#13 {main}
CRITICAL - 2021-01-22 18:54:30 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:54:52 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:55:08 --> syntax error, unexpected '$end_date_filter' (T_VARIABLE), expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:55:29 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:55:41 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:56:04 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:56:16 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:56:43 --> syntax error, unexpected '"AND"' (T_CONSTANT_ENCAPSED_STRING), expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:57:10 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:57:24 --> syntax error, unexpected '"'AND'"' (T_CONSTANT_ENCAPSED_STRING), expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 18:57:34 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:57:43 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:58:01 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 18:58:39 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:01:16 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:01:32 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:01:45 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:01:55 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:02:21 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 19:02:33 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 19:02:41 --> Trying to access array offset on value of type null
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(274): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to acces...', 'C:\\xampp\\htdocs...', 274, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:03:55 --> Call to a member function where() on array
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 19:07:43 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(24): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(218): App\Models\BaseModel->get('status = a')
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-22 19:08:57 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:23:34 --> Too few arguments to function Modules\Guests\Controllers\Guests::print_total_student(), 0 passed in C:\xampp\htdocs\HDS\system\CodeIgniter.php on line 847 and exactly 2 expected
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 19:23:48 --> Undefined variable: start_date_filter
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 191, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:24:03 --> Undefined variable: html
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(308): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 308, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:24:12 --> Undefined variable: html
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(308): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 308, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:24:25 --> Too few arguments to function Modules\Guests\Models\GuestsModel::getGuestTotalPdf(), 0 passed in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 191 and exactly 2 expected
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): Modules\Guests\Models\GuestsModel->getGuestTotalPdf()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:24:47 --> Unknown column '$1' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT p.* FROM...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT p.* FROM...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT p.* FROM...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT p.* FROM...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): Modules\Guests\Models\GuestsModel->getGuestTotalPdf('$1', '$2')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student('$1', '$2')
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-22 19:25:33 --> Unknown column '$start_date_filter' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT p.* FROM...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT p.* FROM...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT p.* FROM...')
#3 C:\xampp\htdocs\HDS\modules\Guests\Models\GuestsModel.php(20): CodeIgniter\Database\BaseConnection->query('SELECT p.* FROM...')
#4 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): Modules\Guests\Models\GuestsModel->getGuestTotalPdf('$start_date_fil...', '$end_date_filte...')
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student('$start_date_fil...', '$end_date_filte...')
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2021-01-22 19:25:49 --> Too few arguments to function Modules\Guests\Controllers\Guests::print_total_student(), 0 passed in C:\xampp\htdocs\HDS\system\CodeIgniter.php on line 847 and exactly 2 expected
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 19:26:42 --> Too few arguments to function Modules\Guests\Controllers\Guests::print_total_student(), 0 passed in C:\xampp\htdocs\HDS\system\CodeIgniter.php on line 847 and exactly 2 expected
#0 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2021-01-22 19:26:50 --> Undefined variable: html
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(309): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 309, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:27:02 --> Undefined variable: html
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(309): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 309, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:27:46 --> Undefined variable: html
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(309): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 309, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:28:48 --> Too few arguments to function Modules\Guests\Models\GuestsModel::getGuestTotalPdf(), 0 passed in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 191 and exactly 2 expected
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(191): Modules\Guests\Models\GuestsModel->getGuestTotalPdf()
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:29:27 --> Undefined index: guest_pdf
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(231): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 231, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:29:52 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:30:09 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 344
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(344): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:32:13 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 19:32:48 --> Unknown column 'AND' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:14:18 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:34:33 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(13): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array, Array)
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-22 22:35:54 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(13): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array, Array)
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-22 22:36:19 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:37:09 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(271): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 271, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:37:17 --> Trying to access array offset on value of type null
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(273): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to acces...', 'C:\\xampp\\htdocs...', 273, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:37:29 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 22:37:40 --> Trying to access array offset on value of type null
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(273): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Trying to acces...', 'C:\\xampp\\htdocs...', 273, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:40:28 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:40:47 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:41:09 --> syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ']'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 22:41:21 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:41:45 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:41:45 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:41:53 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:44:13 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:44:39 --> Argument 1 passed to CodeIgniter\HTTP\RedirectResponse::to() must be of the type string, null given, called in C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php on line 342
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(342): CodeIgniter\HTTP\RedirectResponse->to(NULL)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 22:45:17 --> Unknown column 'between' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:45:33 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND `date` = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:45:51 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND 0 = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:46:44 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND `date` = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:46:51 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND `date` = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:47:11 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(12): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array, '21-01-20')
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2021-01-22 22:47:23 --> syntax error, unexpected '$end_date_filter' (T_VARIABLE), expecting ')'
#0 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\HDS\system\Autoloader\Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Guests\\...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Guests\\...')
#3 [internal function]: spl_autoload_call('Modules\\Guests\\...')
#4 C:\xampp\htdocs\HDS\system\CodeIgniter.php(801): class_exists('\\Modules\\Guests...', true)
#5 C:\xampp\htdocs\HDS\system\CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2021-01-22 22:47:53 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND `date` = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 22:48:12 --> Unknown column 'date.between' in 'where clause'
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(217): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 23:01:25 --> Cannot redeclare Modules\Guests\Models\GuestsModel::getGuestTotalPdf()
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2021-01-22 23:02:23 --> Cannot redeclare Modules\Guests\Models\GuestsModel::getGuestTotalPdf()
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2021-01-22 23:03:03 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(225): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 23:03:27 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(225): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 23:03:39 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(225): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 23:03:47 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-20'
ORDER BY `created_at` DESC' at line 5
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(225): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 23:04:00 --> You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '21-01-19'
AND `date` = '21-01-20'
ORDER BY `created_at` DESC' at line 4
#0 C:\xampp\htdocs\HDS\system\Database\MySQLi\Connection.php(330): mysqli->query('SELECT `guests`...')
#1 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(738): CodeIgniter\Database\MySQLi\Connection->execute('SELECT `guests`...')
#2 C:\xampp\htdocs\HDS\system\Database\BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT `guests`...')
#3 C:\xampp\htdocs\HDS\system\Database\BaseBuilder.php(1783): CodeIgniter\Database\BaseConnection->query('SELECT `guests`...', Array, false)
#4 C:\xampp\htdocs\HDS\system\Model.php(437): CodeIgniter\Database\BaseBuilder->get()
#5 C:\xampp\htdocs\HDS\app\Models\BaseModel.php(28): CodeIgniter\Model->findAll()
#6 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(225): App\Models\BaseModel->get(Array)
#7 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#8 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#9 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#11 {main}
CRITICAL - 2021-01-22 23:04:33 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(279): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 279, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 23:04:43 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(279): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 279, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2021-01-22 23:04:52 --> Invalid argument supplied for foreach()
#0 C:\xampp\htdocs\HDS\modules\Guests\Controllers\Guests.php(279): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 279, Array)
#1 C:\xampp\htdocs\HDS\system\CodeIgniter.php(847): Modules\Guests\Controllers\Guests->print_total_student()
#2 C:\xampp\htdocs\HDS\system\CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController(Object(Modules\Guests\Controllers\Guests))
#3 C:\xampp\htdocs\HDS\system\CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\HDS\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
