<?php
class Post extends DB
{
    public $value = [];
    public $values = [];
    public $table_name = "post";

    function findById($id)
    {

    }

    function getByThread($thread)
    {
        // $this->values = self::$test_data;
        $sql = "SELECT * FROM {$this->table_name} WHERE threadId = :threadId;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['threadId' => $thread['id']]);
        $this->values = $stmt->fetchAll(PDO::FETCH_DEFAULT); 
        return $this->values;
    }

    function insert($posts)
    {
        $sql = "INSERT INTO {$this->table_name} 
                (content, threadId) 
                VALUES (:content, :threadId);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($posts);
    }

}
