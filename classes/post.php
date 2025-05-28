<?php

require_once 'Database.php';

class Post extends Database {

    private $conn;
    

     public function __construct() {
        $this->conn = $this->connect();
    }

    public function getAllPosts() {
        $stmt = $this->conn->prepare("SELECT * FROM posts ORDER BY datum_vytvorenia DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPostById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

     public function addPost($title, $content, $excerpt ,$image) {
        $stmt = $this->conn->prepare("INSERT INTO posts (title, content, excerpt , image, datum_vytvorenia) VALUES (?, ?, ?, ?, NOW())");
        return $stmt->execute([$title, $content, $excerpt ,$image]);
    }

    public function updatePost($id, $title, $excerpt, $content, $image = null) {
    if ($image) {
        $stmt = $this->conn->prepare("UPDATE posts SET title = ?, excerpt = ?, content = ?, image = ?, datum_vytvorenia = NOW() WHERE id = ?");
        $stmt->execute([$title, $excerpt, $content, $image, $id]);
    } else {
        $stmt = $this->conn->prepare("UPDATE posts SET title = ?, excerpt = ?, content = ?, image = ?, datum_vytvorenia = NOW() WHERE id = ?");
        $stmt->execute([$title, $excerpt, $content, $image, $id]);
    }

    return $stmt->rowCount() > 0;
    }

    public function deletePost($id) {
        $stmt = $this->conn->prepare("DELETE FROM posts WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
