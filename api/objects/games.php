<?php

class Games
{
    private $conn;
    private $table = 'games';

    public $id;
    public $name;
    public $date;
    public $ganre_id;
    public $votes;
    public $players;
    public $author;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = 'SELECT g.id, g.name, g.date, j.name as \'genre\', g.votes, g.players, g.author FROM `' . $this->table . '` g LEFT JOIN genres j ON g.ganre_id = j.id ORDER BY g.votes DESC';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function add()
    {
        $query = 'INSERT INTO `' . $this->table . '` SET ';
    }
}
