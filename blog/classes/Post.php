<?php

class Post extends QueryBilder {
    public $newPostStatus = NULL;

    public function createPost(){
        $title = $_POST['post_title'];
        $description = $_POST['post_description'];
        $createAt = date("Y-m-d");
        $userId = $_SESSION['loggedUser']->id;

        $sql = "INSERT INTO posts VALUES (NULL,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$title,$description,$userId,$createAt]);

        if($query){
            $this->newPostStatus = true;
        }else {
            $this->newPostStatus = false;
        }   
    }

    public function deletePost($id){
        $sql = "DELETE FROM posts WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        
    }
}