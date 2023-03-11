<?php


function change_post($link, $id){
    $query = "UPDATE * FROM aricles WHERE id = :d" ;                        
    $result = $link->query($query);
    $result->execute(['d'=>$id]);
    $arr = $result->fetch(PDO::FETCH_ASSOC);
    return $arr;
}
    



