<?php
class Post extends DB
{
    public $value = [];
    public $values = [];
    public $table_name = "posts";

    static $test_data = [
        [
            'id' => 1,
            'posted_name' => '',
            'comment' => '1Get!!!',
            'created_at' => '2024/06/01 00:00'
        ],
        [
            'id' => 2,
            'posted_name' => '',
            'comment' => '2Get!!!',
            'created_at' => '2024/06/01 01:00'
        ],
        [
            'id' => 1,
            'posted_name' => 'テイオー',
            'comment' => '3Get!!!',
            'created_at' => '2024/06/01 02:00'
        ],
    ];

    function findById($id)
    {
        //TODO: DB処理
        $ids = array_column(self::$test_data, 'id');
        $key = array_search($id, $ids);
        if ($key !== false) {
            $this->value = self::$test_data[$key];
            return $this->value;
        }
    }

    function getByThread($thread)
    {
        // $this->values = self::$test_data;
        $sql = "SELECT * FROM {$this->table_name} WHERE thread_id = :thread_id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['thread_id' => $thread['id']]);
        $this->values = $stmt->fetchAll(PDO::FETCH_DEFAULT); 
        return $this->values;
    }

    function insert($posts)
    {
        $sql = "INSERT INTO {$this->table_name} 
                (posted_name, comment, thread_id) 
                VALUES (:posted_name, :comment, :thread_id);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($posts);
    }

}
