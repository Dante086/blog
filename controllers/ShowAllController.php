<?php

require_once("database.php");
require_once("models/show_all.php");  // контроллер
require_once("models/last_post.php");

$link = db_connected($link);       // connect

$articles = show_all($link);

$last = last_post($link);

include("views/articles.php");  // show all articles in database

//include('test.php');