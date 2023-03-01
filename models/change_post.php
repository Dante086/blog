<?php

/*
function change_post($link, $id){
    $query = "SELECT * FROM aricles WHERE id = :d" ;                         //НАПИСАТЬ запрос на вывод конкретной статьи для редактирования!!!
    $result = $link->query($query);
    $result->execute(['d'=>$id]);
    $arr = $result->fetch(PDO::FETCH_ASSOC);
    return $arr;
}
    



