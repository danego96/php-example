<?php

/**
 * @var Db $db
 */

 if($_SERVER['REQUEST_METHOD']=='POST'){

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);

    //validation

    $errors = [];
    if(empty($data['title'])){
        $errors['title'] = 'Title is required';
    }
    if(empty($data['excerpt'])){
        $errors['excerpt'] = 'Excerpt is required';
    }
    if(empty($data['content'])){
        $errors['content'] = 'Content is required';
    }

if(empty($errors)){
    if($db->query("INSERT INTO posts (title, excerpt, content) VALUES (:title, :excerpt, :content)", $data)){
echo 'Ok';
    } else {
        echo 'DB error';
    }
   // redirect('/posts/create');
 };
}


$title = "My Blog:: New Post"; 

require_once VIEWS . '/post-create.tpl.php';