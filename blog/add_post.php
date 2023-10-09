<?php
    require_once 'bootstrap.php';
    
    if(isset($_POST['post_sub_btn'])){
        $post->createPost();
    }

    if(!isset($_SESSION['loggedUser'])){
        header("Location: index.php");
    }
    require_once 'views/add.post.view.php'
?>