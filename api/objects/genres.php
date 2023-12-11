<?php

class Genres
{
    private $conn;
    private $table = 'genres';

    public $id;
    public $name;
    public $status;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    

}
