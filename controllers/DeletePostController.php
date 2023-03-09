<?php

require_once('../database.php');
require_once('../models/del_post.php');
require_once('../models/show_all.php');

$connect_db = db_connected($link);
delete_post($connect_db, $_GET['id']);
$articles = show_all($connect_db);
include('../views/articles_admin.php');