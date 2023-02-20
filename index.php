<?php
require_once("database.php");
require_once("models/articles.php");  // контроллер

$link = db_connect();       // connect

$articles = articles_all($link);

include("views/articles.php");  // show all articles in database

?>
