<?php
class ForumModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function fetchPosts() {
        $query = "SELECT * FROM posts ORDER BY created_at DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertPost($title, $content, $userId) {
        $query = "INSERT INTO posts (title, content, user_id, created_at) VALUES (:title, :content, :user_id, NOW())";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':user_id', $userId);
        return $stmt->execute();
    }

    public function removePost($postId) {
        $query = "DELETE FROM posts WHERE id = :post_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':post_id', $postId);
        return $stmt->execute();
    }
}
?>