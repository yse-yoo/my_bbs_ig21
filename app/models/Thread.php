<?php
class Thread extends DB
{
    public $value = [];
    public $values = [];
    public $table_name = "threads";

    function findById($id)
    {
        $sql = "SELECT * FROM {$this->table_name} WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $this->value = $stmt->fetch(PDO::FETCH_DEFAULT); 
        return $this->value;
    }

    function get($limit = 100)
    {
        $sql = "SELECT * FROM {$this->table_name} LIMIT {$limit};";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->values = $stmt->fetchAll(PDO::FETCH_DEFAULT); 
        return $this->values;
    }

    function getLatests($limit = 10)
    {
        $sql = "SELECT * FROM {$this->table_name} ORDER BY createdAt LIMIT {$limit};";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->values = $stmt->fetchAll(PDO::FETCH_DEFAULT); 
        return $this->values;
    }

    function insert($posts)
    {
        $sql = "INSERT INTO {$this->table_name} 
                (title, content) 
                VALUES (:title, :content);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($posts);
    }
}
