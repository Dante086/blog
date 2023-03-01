<?php
function create_post($connect_db, $title, $date, $content){
    $query = "INSERT INTO articles(title, date, content) VALUES ('$title', '$date', '$content')  ";
    $connect_db->exec($query);
    
}