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
        $query = 'INSERT INTO `' . $this->table . '` SET name=:name, date=:date, ganre_id=:ganre_id, votes=:votes, players:=players, author:=author';
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", htmlentities($this->name, ENT_QUOTES, 'UTF-8'));
        $stmt->bindParam(":date", htmlentities($this->date, ENT_QUOTES, 'UTF-8'));
        $stmt->bindParam(":ganre_id", htmlentities($this->ganre_id, ENT_QUOTES, 'UTF-8'));
        $stmt->bindParam(":votes", htmlentities($this->votes, ENT_QUOTES, 'UTF-8'));
        $stmt->bindParam(":players", htmlentities($this->players, ENT_QUOTES, 'UTF-8'));
        $stmt->bindParam(":author", htmlentities($this->author, ENT_QUOTES, 'UTF-8'));

        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function update()
    {
        return true;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, htmlentities($this->id, ENT_QUOTES, 'UTF-8'));

        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }
}
