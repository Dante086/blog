<?php
require_once('../database.php');
require_once('../models/create_post.php');

$connect_db = db_connected($link);

if(!empty($_POST)){
    $title = trim($_POST['title']);
    $date = trim($_POST['date']);
    $content = trim($_POST['content']);
    $img = trim($_POST['img']);
    create_post($connect_db, $title, $date, $content, $img);
}

include('../views/article_admin.php');

