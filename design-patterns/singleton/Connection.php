<?php


class Connection
{
    /**
     * @var Connection
     */
    private static $instance = null;
    /**
     * @var PDO
     */
    private $pdo;

    private function __construct(string $dsn, string $username, string $password, $opts=[])
    {
        $this->pdo = new PDO($dsn, $username, $password,$opts);
    }

    public static function getInstance(
        string $dsn ='', string $username='', string $password='', $opts=[]): Connection
    {
        if(self::$instance === null)
        {
            self::$instance = new Connection($dsn, $username, $password,$opts);
        }
        return self::$instance;
    }

    public function  getPDO(): PDO
    {
        return $this->pdo;
    }
}