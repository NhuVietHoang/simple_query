<?php
require  "../vendor/autoload.php";
use Viethoang\Query\Config\Connection;
use Viethoang\Query\QueryBuilder\QueryBuilder as DB;
use Viethoang\Query\Test\Categories;


$config = [
    'driver'=>'mysql',
    'host'=>'localhost',
    'dbname'=>'kinh.mat',
    'username'=>'root',
    'password'=>'12345',
];
Connection::$config = $config;
$data = [
    'name'=> 'test2',
    ];
$test = categories::find(['id'=>2]);
echo '<pre>';
var_dump($test);
echo '</pre>';

