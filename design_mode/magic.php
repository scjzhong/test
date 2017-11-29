<?php 
use Magic\Magic;
include __DIR__.'/Magic/Magic.php';
$magic = new Magic();

//***** __set __get
$magic->title = 'hello';
echo $magic->title;
//***** __set __get

//方法不存在的时候调用
$magic->test('nihao','hello');

//调用不存在的静态方法
$magic::testStatic();

//将对象当做字符串输出
echo $magic;

//将对象当做方法去用
echo $magic("test1");