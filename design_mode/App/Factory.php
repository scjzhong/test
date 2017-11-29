<?php

//w为什么使用工厂模式呢，例如要获取一个数据库对象 传统的则是  new \database(); 没用到一次就要new 一下。万一某天你要修改  方法名称或其他的修改 那代码中有n次 new \database();操作你就要修改n处。
//而用工厂模式 只需要修改一次即可
namespace App;

class Factory
{
    static function createDatabase()
    {
        $dbObj =  \App\Database::getInstance();
        return $dbObj;
    }
}