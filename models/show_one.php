<?php
function show_one($link, $id){
    $query="SELECT * FROM articles WHERE id = :d";  // формирование запроса
    $result = $link->prepare($query);  //подготовка запроса
    $result -> execute(['d'=>$id]);    // указание методу значение переменной и выполнение запроса
    $arr = $result->fetch(PDO::FETCH_ASSOC); // вытягивание результата из базы ввиде массива $arr
    return $arr;
}









