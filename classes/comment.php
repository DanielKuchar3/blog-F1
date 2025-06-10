<?php
require_once 'database.php';

class Comment extends Database
{
    private $conn;
    private $table = "comments";


    public function __construct($db) {
        $this->conn = $db;
    }


    public function getCommentsByPostId($postId)
    {
        $stmt = $this->connect()->prepare("SELECT comments.*, pouzivatelia.username FROM comments 
                                           JOIN pouzivatelia ON comments.user_id = pouzivatelia.id 
                                           WHERE post_id = ? ORDER BY datum_vytvorenia  DESC");
        $stmt->execute([$postId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addComment($postId, $userId, $text)
    {
        $stmt = $this->connect()->prepare("INSERT INTO comments (post_id, user_id, comment) VALUES (?, ?, ?)");
        return $stmt->execute([$postId, $userId, $text]);
    }

    public function updateComment($id, $newComment) {
        $stmt = $this->conn->prepare("UPDATE comments SET comment = ? WHERE id = ?");
        return $stmt->execute([$newComment, $id]);
    }

    public function deleteComment($id) {
        $stmt = $this->conn->prepare("DELETE FROM comments WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getCommentById($id) {
        $query = "SELECT * FROM comments WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCommentsByUserId($userId){
        $stmt = $this->conn->prepare("SELECT comments.*, posts.title AS post_title 
                                    FROM comments 
                                    JOIN posts ON comments.post_id = posts.id 
                                    WHERE comments.user_id = ? 
                                    ORDER BY datum_vytvorenia DESC");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
