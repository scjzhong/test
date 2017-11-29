<?php 

class Push
{
    public static $_instance;
    private $redis;
    const PORT = '6380';
    const HOST = '118.190.22.125';
    const PASSWORD = 'redis_nihao123###';
    private function __construct($host, $port, $password)
    {
        $this->redis = new \Redis();
        $this->redis->connect($host, $port);
        $this->redis->auth($password);
    }
    
    public static function getInstance()
    {
        if(empty(self::$_instance)){
            self::$_instance = new self(self::HOST, self::PORT, self::PASSWORD);
        }
        
        return self::$_instance;
    }
    
    public function getCache($cachKey)
    {
        return $this->redis->get($cachKey);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}