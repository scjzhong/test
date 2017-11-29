<?php 
namespace Magic;
class Magic
{
    protected $arr = [];
    
    public function __construct()
    {
        
    }
    
    public function __get($key)
    {
        return $this->arr[$key];
    }
    
    public function __set($key,$value)
    {
        $this->arr[$key]  = $value;
    }
    
    public function __call($func,$param)
    {
        var_dump($func);
        print_r($param);
    }
    
    public static function __callstatic($func,$param)
    {
        echo $func;
    }
    
    public function __toString()
    {
        return __CLASS__;
    }
    
    public function __invoke($param)
    {
        var_dump($param);
        return "invoke";
    }
}