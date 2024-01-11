<?php

/**
 * @var Db $db
 */

 if($_SERVER['REQUEST_METHOD']=='POST'){
    $db->query("INSERT INTO posts (title, excerpt, content) VALUES (?, ?, ?)", [
        $_POST['title'], $_POST['excerpt'], $_POST['content']
    ]);
 };

$title = "My Blog:: New Post"; 

require_once VIEWS . '/post-create.tpl.php';