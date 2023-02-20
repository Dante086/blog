<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	
	<title>добавление статей</title>
	<link rel="stylesheet"  href="../style.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>редактирование или добавление статей</h3>
	</div>
	<div>
		<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
			<ul>
				<li class="form-row">
					<label>	название </label>   	
					<input type="text" name="title" value="<?=$article['title'] ?>" autofocus required>		
				</li>
				<li class="form-row">
					<label>	дата </label>
					<input type="date" name="date" value="<?=$article['date']?>" required>
				</li>
				<li class="form-row">
					<label>	содержимоe </label>
					<div >
					<textarea name="content"  required><?=$article['content'] ?></textarea>
					</div>
				</li>
				<li class="form-row">
					<button type="submit">Отправить</button>
				</li>
			</ul>
		</form>
		<br>
		
	</div>
	<footer>
		 <div>
                    <a href="../admin/index.php">вернуться</a><br>
                </div>
                <div><br></div>
		<p>кулинарный блог<br> Copyright &copy; 2022</p>
	</footer>
</body>
</html>

