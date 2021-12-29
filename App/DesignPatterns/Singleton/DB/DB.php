<?php
namespace App\DesignPatterns\Singleton\DB;
use PDO;

class DB
{
    private $connection;
    private $host       = 'localhost';
    private $username   = 'root';
    private $password   = '';
    private $dbname     = 'design_patterns';
    private static $obj = null;

    private function __construct()
    {
        $this->connection = new PDO("mysql:host={$this->host}; dbname={$this-> dbname }", $this->username, $this->password);
    }
    
    public static function getDBobject() {
        if( self::$obj == null )
            self::$obj = new DB();
        
        return self::$obj;
    }

    public function getConnection()
    {
        return $this->connection;
    }
    
}