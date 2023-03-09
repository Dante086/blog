<?php
function delete_post($link, $id){
    $query = "DELETE FROM articles  WHERE id = :d";
    $del = $link->prepare($query);    
   // $result = $del->bindValue(":d", $id);
    $del->bindValue(":d", $id);
    $del->execute();
    //$result->execute();
    
}
