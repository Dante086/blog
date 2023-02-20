
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>кулинарный блог</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Кулинарный блог</h1>
		<a href="admin">панель администратора</a>
		<div>
			<?php foreach ($articles as $a): ?>
			<div class="article">
				<h3><a href="article.php?id=<?=$a['id']?>">  <?=$a['title']?>  </a></h3>
				<em>опубликованно: <?= $a['date']?></em>
				<p><?=$a['content']?></p>			
			</div>
		<?php endforeach ?>			
		</div>
		<footer>
				<p>кулинарный блог<br> Copyright &copy; 2022</p>
			</footer>	
	</div>
</body>
</html>