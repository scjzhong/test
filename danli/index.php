<?php 

require './Push.php';

$push = Push::getInstance();

$name = $push->getCache('name');

echo $name;die;


// $port = '6380';
// $host = '118.190.22.125';
// $password = 'redis_nihao123###';
// $redis = new \Redis();
// $redis->connect($host, $port);
// $redis->auth($password);
// $redis->set('name','scjzhong');
// echo $redis->get('name');