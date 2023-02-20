<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf8">
        <title>кулинарный блог</title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        </head>
    <body>
        <div class="container">
            <h1>редактирование</h1>
            <a href="index.php?action=add">добавить статью</a>
        
            <div>
                <table class="admin-table">
                    <tr>
                        <th>дата</th>
                        <th>заголовок</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($articles as $a): ?>
                        <tr>
                            <td><?=$a['date'] ?></td>
                            <td><?=$a['title'] ?></td>
                            <td>
                                <a href="index.php?action=edit&id=<?=$a['id']?>">редактировать</a>
                            </td>
                            <td>                        
                                <a href="admin.php?action=delete&id=<?=$a['id']?>">удалить</a>
                            </td>
                        </tr>
                        <?php endforeach ?> 
                </table>
            </div>         
            <footer>
                <div>
                    <a href="../index.php">вернуться</a><br>
                </div>
                <p>кулинарный блог <br>Copyright &copy; 2022</p>
            </footer>
        </div>
    </body>
</html>



































