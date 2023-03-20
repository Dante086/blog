<?php

function last_post($link){
 $query = 'SELECT * FROM articles ORDER BY id DESC LIMIT 1';
 $result = $link->query($query, PDO::FETCH_ASSOC);
 $arr = $result->fetch(PDO::FETCH_ASSOC);
 return $arr;
}