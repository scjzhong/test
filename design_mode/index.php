<?php

//echo __DIR__.'\App\Database.php';

require_once __DIR__.'\App\Database.php';

require_once __DIR__.'\App\Factory.php';

$dataBaseObj = \App\Factory::createDatabase();
//print_r($dataBaseObj);die;
$sql = 'select count(*) from req_record limit 1';

//使用了单例模式所以这里是不能这样进行创建的。
//$db = new App\Database();
// $db = \App\Database::getInstance(); 
// $pdo = new PDO("mysql:dbname=api;host=118.190.22.125", 'root', '123456');
// var_dump($dataBaseObj);
$res = $dataBaseObj->where($sql);

print_r($res);
//15381071382
