<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> блог</title>		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"> 
	</head>
	<body class="body" aria-hidden="false" >
	<div class="row flex-nowrap justify-content-between align-items-center">     
      <div class=" text-center">
	  <img src="img/bon1.png" alt="" width="315" height="90"> 
      </div>      
    </div>
	<div class="container" >
	<hr>
	
	<!--<div class="nav-scroller py-1 mb-2">
		<nav class="nav d-flex justify-content-evenly" >
			
			<a class="p-2 link-secondary" href="#">вегетарианство</a>
			<a class="p-2 link-secondary" href="#">сладости</a>
			<a class="p-2 link-secondary" href="#">правильное питание</a>      
		</nav>
  </div> -->
	<hr>
  <div class="container-sm">	
				<div class="blog-post fs-5" >
				<h2 class="blog-post-title" style="text-align: center;">Приветствую Вас на станицах моего блога </h2>				
				
				<p class="lh-lg" style="width: 850px; text-align: center; margin-left:80px;">Этот блог я решил вести для себя, для тех людей кому интересна разнообразная и изысканная кухня.
					Блюда, которые я буду здесь освещать, будут самые разные. От простой уличной еды, 
					до высокой кухни ресторанов удостоенных звезды Мишлен.</p>				
			</div>

			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-lg" style="display: inline-block;"> 						     
					<div class="col-md-12" >
						<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >
							<div class="col p-2 d-flex flex-column position-static text-truncate" >								
								<h3 class="mb-0">Последний пост</h3>
								<div class="mb-1 text-muted"><?=$last['date']?></div>
								<h4><?=$last['title']?></h4><hr>
								
								<p class="card-text mb-auto " style="color: #6c7977;"><?=$last['content']?></p>
								
								
								<a href="controllers/ShowOneController.php?id=<?=$last['id']?>" class="stretched-link">Продолжить чтение</a>
							</div>
							<div class="col-auto d-none d-lg-block">
								<img src="<?=$last['img']?>" alt="" width="400" height="250">
								
							</div>
						</div>
					</div>
				</div>					
			</nav>
		</div>
		<br>
		<div class="container-sm">
		<div class="col-md-12" style="background-color:lightgray;">
        <div class="h-100 p-5  rounded-3">
          <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">заметки автора</font></font></h4>
          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">здесь я буду описывать свои наблюдения о кулинарии и о жизни в целом</font>
		  <font style="vertical-align: inherit;"></font></font></p>
          </div>
      </div>
		</div>

		<div id="carouselExampleCaptions" class="carousel slide container-sm" style="margin:top 50px; padding: 20px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/f2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>вкусные блюда разных стран</h5>
        <p>блюда на праздничный стол </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/f3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Легкие и полезные закуски</h5>
        <p>на каждый день</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/f4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>смелое сочетание ингредиентов</h5>
        <p>полет фантазии в кулинарном мире</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

			<section class="main-content">
				<div class="container">
					<div class="row g-0 text-center ">
						<?php foreach ($articles as $a): ?>
							<div class="col-lg-4 .col-sm-6 " >
								<div class="card border-0 h-50 d-inline-block" >
									<div class="card-img ">
										<img src="<?=$a['img']?>"  alt="...">
									</div>
									<div class="product-card">
										<h5 class="card-title"><a href="controllers/ShowOneController.php?id=<?=$a['id']?>">  <?=$a['title']?>  </a></h5>
									</div>
									<div class="product-content">
										<p><a href="controllers/ShowOneController.php?id=<?=$a['id']?>" ><?=$a['content']?></a></p>
									</div>									
								</div>
							</div>

							
						<?php endforeach ?>	
					</div>
				</div>
			</section>
						<br>
							<footer>
								<div>
									<p>кулинарный блог<br> Copyright &copy; 2022</p>
									
								</div>						
							</footer>
		</div>				
		
	</body>
</html>