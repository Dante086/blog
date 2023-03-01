<?php
require_once('../database.php');
require_once('../models/show_all.php');

$connect_db = db_connected($link);
$articles = show_all($connect_db);
include('../views/articles_admin.php');