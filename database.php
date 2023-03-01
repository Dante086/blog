<?php
define ('MYSQL_SERVER', 'mysql:dbname=blog;host=127.0.0.1', false);
define('MYSQL_USER', 'root', false);
define('MYSQL_PASSWORD', '', false);

$link = "";
function db_connected($link){
    $link = new PDO(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD) or 
    die('Error:'. print_r($link->errorInfo()));    
    return $link;
}
 ?>
