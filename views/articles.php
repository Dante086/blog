<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>кулинарный блог</title>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<h3>Кулинарный блог</h3>			
			</div>
		
		
				<section class="main-content">
					<div class="container">
						<div class="row">
							<?php foreach ($articles as $a): ?>
								<div class="col-lg-4 .co-sm-6">						
									<div class="posts">
										<img src="<?=$a['img']?>">
										<h3><a href="controllers/ShowOneController.php?id=<?=$a['id']?>">  <?=$a['title']?>  </a></h3>
										<!-- <em>опубликованно: <?= $a['date']?></em>  
										<!--<p><?=$a['content']?></p>	-->							
									</div>						
								</div>
							<?php endforeach ?>	
						</div>
					</div>
				</section>
				<br>
					<footer class="footer">
						<p>кулинарный блог<br> Copyright &copy; 2022</p>
						<a  aria-current="page" href="controllers/AdminPanelController.php">Админ.панель</a>
					</footer>
			
		</div>
	</body>
</html>