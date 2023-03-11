<?php
function create_post($connect_db, $title, $date, $content, $img){
    $query = "INSERT INTO articles(title, date, content, img) VALUES ('$title', '$date', '$content', '$img')  ";
    $connect_db->exec($query);
    return $connect_db;
    
}