<?php

class ForumController {
    private $forumModel;

    public function __construct() {
        $this->forumModel = new ForumModel();
    }

    public function getPosts() {
        return $this->forumModel->fetchPosts();
    }

    public function createPost($data) {
        return $this->forumModel->insertPost($data);
    }

    public function deletePost($id) {
        return $this->forumModel->removePost($id);
    }
}