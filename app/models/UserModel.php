<?php 

class UserModel extends Database
{
    private $pdo;

    public function __construct(){
        $this->pdo = $this->getConnection();
    }

    public function fetch() {
        $query = $this->pdo->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC) ?? [];
    }

    public function fetchById($id) {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}