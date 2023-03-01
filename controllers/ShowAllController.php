<?php

require_once("database.php");
require_once("models/show_all.php");  // контроллер

$link = db_connected($link);       // connect

$articles = show_all($link);

include("views/articles.php");  // show all articles in database