<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">	
	<title>кулинарный блог</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>кулинарный блог</h1>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>опубликовано: <?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>кулинарный блог<br>Copyright &copy; 2022</p>
		</footer>
	</div>
</body>
</html>
