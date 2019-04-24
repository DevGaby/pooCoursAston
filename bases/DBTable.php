<?php
class DBTable
{
    private $counter = 0;
    public function getCounter(): int
    {
        //return $this->counter;
        return self::$counter;
    }
    public function insert($data)
    {
        echo 'insert';
        self::$counter++;
    }
    public function findAll()
    {
        echo 'findAll';
        //$this->counter++;
        self::$counter++;
    }
    public function delete($id)
    {
        echo 'delete';
        //$this->counter++;
        self::$counter++;
    }
}