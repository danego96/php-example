<?php



$title = 'My Blog :: Home';

$posts = $db->query("SELECT * FROM posts ORDER BY id ASC")->fetchall();
$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->fetchall();

require_once VIEWS . '/index.tpl.php';
