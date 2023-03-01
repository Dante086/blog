<?php
function show_all($link){
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = $link->query($query, PDO::FETCH_ASSOC);
    return $result;
}