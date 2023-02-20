<?php

function articles_all($link){
  $query = "SELECT * FROM  articles ORDER BY id DESC";
  $result = mysqli_query($link, $query);

  if(!$result){
    die(mysqli_error($link));
  }

  $n = mysqli_num_rows($result);
  $articles = array();

  for ($i=0; $i < $n; $i++)
   { 
    $row = mysqli_fetch_assoc($result);
    $articles[] = $row;
  }
  return $articles;
}

function articles_get($link, $id_article){
  //запрос
  $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
  $result = mysqli_query($link, $query);

  if (!$result) die(mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;
  

}

function articles_new($link, $title, $date, $content){
  $title = trim($title);
  $content = trim($content);

  if ($title == " ") { return false; }

  $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";

  $query = sprintf($t, mysqli_real_escape_string($link, $title),mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));

  $result = mysqli_query($link, $query);

  if (!$result) { die(mysqli_error($link)); echo "ошибка";}

  return true;
}

function articles_edit($link, $id, $title, $date, $content){
  $title = trim($title);
  $date = trim($date);
  $content = trim($content);
  $id = (int)$id;
  if ($title == '') {
    return false;
  }
  $sql = "UPDATE articles SET title='%s', content='%s', date= '%s' WHERE id = '%id' ";


   //формирование запроса в базу
  $query = sprintf($sql, mysqli_real_escape_string($link, $title), 
    mysqli_real_escape_string($link, $content),
     mysqli_real_escape_string($link, $date), $id );

    // выполнение запроса с помощью ф-ии mysql_query и запись результата в переменную $result
  $result = mysqli_query($link, $query);

    // проверка запроса на выполнение и присвоение переменной
  if (!$result) {
    die(mysqli_error($link));
  }
  //  возврат полученного измененного содержимого базы с помощью ф-ии 
  return mysqli_affected_rows($link);
}


// удаление данных из базы по id

function articles_delete($link, $id){
  $id = (int)$id;
  $query = sprintf( "DELETE FROM articles WHERE id = '%id'", $id);
 
  $instruction = mysqli_query($link, $query);

  if (!$instruction) {
    die(mysqli_error($link));
  }
  return mysqli_affected_rows($link);

}




?>
