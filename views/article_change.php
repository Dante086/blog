<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	
	<title>добавление статей</title>
	<link rel="stylesheet"  href="../style.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-light" style="background-color: rgb(126, 243, 16);">
		<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><b>кулинарный блог</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" aria-current="page" href="AdminPanelController.php">Админ.панель</a>
				</div>
			</div>
		</div>
		</nav>
	</nav>

	<div class="container">
		<h3>редактирование или добавление статей</h3>
	</div>
	<div >
		<form method="post" action="../controllers/CreatePostController.php">   <!--?action=<?=$_GET['add']?>--> 
			<ul>
				<li class="col-sm-4">
					<label>	название </label>  
					
							<input type="text" name="title" value="<?= $post['title']?>">  <!--написать в value ссылку на конкретную статью для редактирования	-->	
						</li>
						<li class="col-sm-4">
							<label>	дата </label>
							<input type="date" name="date" value="<?= $post['date'] ?>">
						</li>
						<li class="col-sm-4">
							<label>	содержимоe </label>
							<div >
							<textarea name="content"  required><?= $post['content']   ?></textarea>
							</div>
						</li>
						<li class="col-sm-4">
							<input type="submit" name="отправить" >
					
					
				</li>
			</ul>
		</form>
		<br>
		
	</div>
	<footer>
		 <div>
                    <a href="../controllers/ShowAllController.php">вернуться</a><br>
                </div>
                <div><br></div>
		<p>кулинарный блог<br> Copyright &copy; 2022</p>
	</footer>
</body>
</html>