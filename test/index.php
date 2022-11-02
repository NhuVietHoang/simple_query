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
    'name'=> 'test10',
    ];
    // categories::create($data);
// $test = categories::get();
// $test = categories::where(['id','>','1'])->count();
// $test = categories::limit('2','3')->get();

// $test = categories::where(['id','>','1'])->first();
// $test = categories::select(['id','name'])->get();



dd($test);




