<?php

class Database
{
    private static $pdo;
    private $dsn;
    private $user;
    private $pass;
    private static $instance = null;
    public function __construct($hostname = null, $database = null, $user = null, $password = null)
    {
        if ($hostname == null && $database == null && $user == null && $password == null) {
            $this->dsn = "mysql:host=localhost;dbname=blog";
            $this->user = "root";
            $this->pass = "";
        } else {
            $this->dsn = "mysql:host=" . $hostname . ";dbname=" . $database;
            $this->user = $user;
            $this->pass = $password;
        }
        try {
            self::$pdo = new PDO($this->dsn, $this->user, $this->pass);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $except) {
            echo "Echec de la connexion: " . $except->getMessage();
        }
    }
    public static function getInstance($host,$dbname,$user,$pass){
        if(is_null(self::$instance)){
        self::$instance = new Database($host,$dbname,$user,$pass);
        }
        return self::$instance;
        }
    public function execute_query($sql, $params = null)
    {
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        // if ($params != null) {
        //     return true;
        // }
        return $stmt;
    }

    public function getPDO()
    {
        return self::$pdo;
    }
}
