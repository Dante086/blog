<?php
require_once('../database.php');
require_once("../models/show_one.php"); 

$connect_db = db_connected($link);

$one_post = show_one($connect_db, $_GET['id']);

include('../views/article.php');



