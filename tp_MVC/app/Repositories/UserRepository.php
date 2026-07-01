<?php

require_once "../app/config/Database.php";
require_once "../app/models/User.php";

class UserRepository {
    private $pdo; 

    public function __construct() {
        $this->pdo=Database::getConnection();
    }
    public function getAll() {
        $sql = "SELECT * FROM users";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id) {
        $sql="SELECT * FROM users WHERE id=?";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function create($nom, $email){
        $sql="INSERT INTO users(nom, email) VALUES(?,?)";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$nom,$email]);
    }
    public function update($id,$nom,$email) {
        $sql="UPDATE users SET nom=?, email=? WHERE id=?";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$nom,$email,$id]);
    }
    public function delete ($id) {
        $sql="DELETE from users WHERE id=?";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}

?>