<?php
class Thread extends DB
{
    public $value = [];
    public $values = [];
    public $table_name = "threads";

    static $test_data = [
        [
            'id' => 1,
            'title' => 'サッカーについて語れ！',
            'description' => 'スレッドの内容。。。',
            'password' => 'password'
        ],
        [
            'id' => 2,
            'title' => 'ドラゴンクエスト攻略法',
            'description' => 'スレッドの内容。。。',
            'password' => 'password'
        ],
        [
            'id' => 3,
            'title' => '海外旅行のおすすめ情報',
            'description' => 'スレッドの内容。。。',
            'password' => 'password'
        ],
        [
            'id' => 4,
            'title' => 'おいしいラーメン屋を教えて',
            'description' => 'スレッドの内容。。。',
            'password' => 'password'
        ],
        [
            'id' => 5,
            'title' => '人生相談Part1',
            'description' => 'スレッドの内容。。。',
            'password' => 'password'
        ],
    ];

    function findById($id)
    {
        // $ids = array_column(self::$test_data, 'id');
        // $key = array_search($id, $ids);
        // if ($key !== false) {
        //     $this->value = self::$test_data[$key];
        //     return $this->value;
        // }
        $sql = "SELECT * FROM {$this->table_name} WHERE id = :id;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $this->value = $stmt->fetch(PDO::FETCH_DEFAULT); 
        return $this->value;
    }

    function get($limit = 100)
    {
        // $this->values = self::$test_data;
        $sql = "SELECT * FROM {$this->table_name} LIMIT {$limit};";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->values = $stmt->fetchAll(PDO::FETCH_DEFAULT); 
        return $this->values;
    }

    function getLatests($limit = 10)
    {
        $sql = "SELECT * FROM {$this->table_name} ORDER BY created_at LIMIT {$limit};";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $this->values = $stmt->fetchAll(PDO::FETCH_DEFAULT); 
        return $this->values;
    }

    function insert($posts)
    {
        $sql = "INSERT INTO {$this->table_name} 
                (title, description, password) 
                VALUES (:title, :description, :password);";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($posts);
    }
}
