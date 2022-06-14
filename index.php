<?php
	session_start();
	$name = $_SESSION['NAME'];
	if ($name==true) {
		
	}
	else
	{
		header("location:projlogin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/release/v5.7.2/css/all.css" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="swiper.min.css">
	<link rel="stylesheet" type="text/css" href="project2.css">
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<header>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-12">
				<div class="logo">
			</div>
			</div>
			<div class="col-md-4 col-12 text-center">
				<h2 class="my-md-3 site-title text-white">Online Medical Store</h2>
			</div>
			<div class="col-md-4 col-12 text-right">
				<p class="my-md-4 header-links">
					<a class="px-0 text-white"><?php
						$name = $_SESSION['NAME'];
						echo "$name";
					?></a>
					<a href="logout1.php" class="px-1"><i class="fa fa-sign-out"></i></a>
				</p>
			</div>
		</div>
	</div>
	
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
		<div class="collapse navbar-collapse text-center" id="collapsenavbar">
		<ul class="navbar-nav" id="nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link text-white">Home</a>
			</li>
			<li class="nav-item">
				<a href="about.php" class="nav-link text-white">About</a>
			</li>
			<li class="nav-item">
				<a href="category.php" class="nav-link text-white">Categories</a>
			</li>
			<li class="nav-item">
				<a href="contact.php" class="nav-link text-white">Contact Us</a>
			</li>
			<li class="nav-item">
				<a href="feedback.php" class="nav-link text-white">Feedback</a>
			</li>
			
		</ul>
		<form action="" class="navbar-form">
		<div class="form-group input-group p-1 search">
			<input type="text" placeholder="What are you looking for?" class="form-control" id="searchterm">
			<div class="input-group-btn rounded btn-warning">
			<button type="button" class="btn btn-default">
			<span class="fa fa-search"></span>
			</button>
			</div>
		</div>
	</form>
		<ul class="navbar-nav ml-auto" id="nav">
			<li class="nav-item">
				<a href="cart.php" class="nav-link text-white">
					<h5 class="px-0 cart">
					<i class="fa fa-cart-plus"></i> Cart
					<?php

					if(isset($_SESSION['cart'])){
						$count = count($_SESSION['cart']);
						echo "<span id=\"cart_count\"class=\"text-warning bg-light\">$count</span>";
					}else{
						echo "<span id=\"cart_count\"class=\"text-warning bg-light\">0</span>";
					}
					?>
				</h5></a>
			</li>
		</ul>
</div>
</div>
</nav>
</header>

<div class="bgimg">
	<div class="container text-center text-green headerset">
		<h2>Welcome To Our Medical Website!!</h2>
		<h1>IT'S NICE TO MEET YOU</h1>
	</div>
</div>

<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image: url(banner/1.jpg);"></div>
     <div class="swiper-slide" style="background-image: url(banner/2.jpg);"></div>
     <div class="swiper-slide" style="background-image: url(banner/3.jpg);"></div>
     <div class="swiper-slide" style="background-image: url(banner/4.jpg);"></div>
     <div class="swiper-slide" style="background-image: url(banner/5.jpg);"></div>
     <div class="swiper-slide" style="background-image: url(banner/6.jpg);"></div>
     <div class="swiper-slide" style="background-image: url(banner/7.jpg);"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
	

	</div>
		
<br>
<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<div class="post-slider">
		<h1 class="slider-title">HOMEOPATHY</h1>
		<i class="fa fa-chevron-left prev"></i>
		<i class="fa fa-chevron-right next"></i>

		<div class="post-wrapper">
			<div class="post card">
				<img src="homeopathy/a.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Serotonin Dopamine Liquescence</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>320/-</p>	
				</div>
			</div>

			<div class="post card">
				<img src="homeopathy/b.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">T-Relief<br>Pain Gel</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>39/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="homeopathy/c.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Unda<br>#20</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>70/-</p>
			</div>
		</div>

			<div class="post card">
				<img src="homeopathy/d.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">BodyAnew Cleanse<br>Oral Drops</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>999/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="homeopathy/e.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Lymphomyosot<br>Rx Injectables</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>80/-</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
<br><br>



<!-- //Page Wrapper -->
	<div class="page-wrapper">
	<div class="post-slider">
		<h1 class="slider-title">VITAMINS & SUPPLEMENTS</h1>
		<i class="fa fa-chevron-left prev"></i>
		<i class="fa fa-chevron-right next"></i>

		<div class="post-wrapper">
			<div class="post card">
				<img src="Vitamins/a.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Inlife Multivitamin<br>Supplements</h3>
		<p class="card-text"><i class="fa fa-inr">&nbsp;</i>635/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="Vitamins/b.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">HealthKart Multivitamin</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>325/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="Vitamins/c.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 			<h3 class="card-title">NutrineLife Multivitamin</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>963/-</p>
			</div>
		</div>

			<div class="post card">
				<img src="Vitamins/d.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Sapien Body Total<br>B Vitamin Complex-60</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>1500/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="Vitamins/e.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Purayati Multivitamins<br>Tablets</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>70/-</p>
				</div>
			</div>
			
		</div>
	</div>

</div>
<br><br>

<!-- //Page Wrapper -->

<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<div class="post-slider">
		<h1 class="slider-title">AYURVEDA</h1>
		<i class="fa fa-chevron-left prev"></i>
		<i class="fa fa-chevron-right next"></i>

		<div class="post-wrapper">
			<div class="post card">
				<img src="ayurveda/a.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Himalaya Liv.52 Tablets</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>120/-</p>	
				</div>
			</div>

			<div class="post card">
				<img src="ayurveda/b.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Zandu Kesari Jivan<br>900 gm</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>521/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="ayurveda/c.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Dabur Chyawanprash<br>1 kg</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>320/-</p>
			</div>
		</div>

			<div class="post card">
				<img src="ayurveda/d.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Himalaya Confido Tablets</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>125/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="ayurveda/e.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Himalaya Pure Ashvagandha</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>300/-</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
<br><br>





<!-- //Page Wrapper -->
	<div class="page-wrapper">
	<div class="post-slider">
		<h1 class="slider-title">HEALTH FOODS & DRINKS</h1>
		<i class="fa fa-chevron-left prev"></i>
		<i class="fa fa-chevron-right next"></i>

		<div class="post-wrapper">
			<div class="post card">
				<img src="food/a.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Merck SevenSeas<br>Cold Liver Oil</h3>
		<p class="card-text"><i class="fa fa-inr">&nbsp;</i>400/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="food/b.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Herbalife Energy<br>Drink Lemon</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>50/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="food/c.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 			<h3 class="card-title">Protinex Vanilla Delight 400gm</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>420/-</p>
			</div>
		</div>

			<div class="post card">
				<img src="food/d.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Neuherbs Organic Green Coffee Beans</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>40/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="food/e.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Wow Biotin Maximum Strength Veg Capsule</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>360/-</p>
				</div>
			</div>
			
		</div>
	</div>

</div>
<br><br>

<!-- //Page Wrapper health -->

<!-- //Page Wrapper -->
	<div class="page-wrapper">
	<div class="post-slider">
		<h1 class="slider-title">HEALTHCARE DEVICES</h1>
		<i class="fa fa-chevron-left prev"></i>
		<i class="fa fa-chevron-right next"></i>

		<div class="post-wrapper">
			<div class="post card">
				<img src="health/a.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">C-Rest Neck Massager Pillow Massage Tool</h3>
		<p class="card-text"><i class="fa fa-inr">&nbsp;</i>500/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="health/b.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Dr. Physio (USA) Electric heat Shiatsu</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>1000/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="health/c.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 			<h3 class="card-title">Flamingo HC 1002 Heating Belt</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>880/-</p>
			</div>
		</div>

			<div class="post card">
				<img src="health/d.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Equinox Hot Water Bottle with Cover</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>900/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="health/e.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Thermocare Gel Electric Water Bag</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>500/-</p>
				</div>
			</div>
			
		</div>
	</div>

</div>
<br><br>

<!-- //Page Wrapper -->
		
<!-- Page Wrapper -->
<div class="page-wrapper">
	
	<div class="post-slider">
		<h1 class="slider-title">SKINCARE</h1>
		<i class="fa fa-chevron-left prev"></i>
		<i class="fa fa-chevron-right next"></i>

		<div class="post-wrapper">
			<div class="post card">
				<img src="skin/a.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Vaseline Intensive Care Deep Restore Body</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>120/-</p>	
				</div>
			</div>

			<div class="post card">
				<img src="skin/b.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Nivea Nourishing Lotion Body Milk</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>121/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="skin/c.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Parachute Advanced Body Lotion</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>110/-</p>
			</div>
		</div>

			<div class="post card">
				<img src="skin/d.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Lakme Absolute Perfect Radiance</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>260/-</p>
				</div>
			</div>

			<div class="post card">
				<img src="skin/e.jpg" class="slider-image">
				<div class="overlay">
					<button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
					<button type="button" class="btn btn-secondary" title="Add to Cart "><i class="fa fa-shopping-cart"></i></button>
					</div>
				<div class="card-body text-center post-info">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
    		 		<h3 class="card-title">Fair & Lovely Men Facewash</h3>
					<p class="card-text"><i class="fa fa-inr">&nbsp;</i>120/-</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
<br><br>


	<div class="footer-wrapper">
		<div class="container-fluid">
			<div class="footer-social-icons">
				<ul>
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
				</ul>
			</div>

			<div class="footer-mid-part">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-one">
							<div class="footer-heading"><h2>Contact Us</h2></div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-map-marker"></i></div>
							<div class="footer-contact-text">
								<p>Address: Room No.3 Navpurush Chhatrawas Ravindrapuri, Ghazipur</p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-phone"></i></div>
							<div class="footer-contact-text">
								<p><a href="tel: +91 7238981464">+91 7238981464</a></p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-fax"></i></div>
							<div class="footer-contact-text">
								<p><a href="fax: +91 7238981464">+91 7238981464</a></p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-envelope"></i></div>
							<div class="footer-contact-text">
								<p><a href="mailto: himanshubaranwak01@gmail.com">himanshubaranwal01@gmail.com</a></p>
							</div>
							<div class="clr"></div>
						</div>
								<div class="footer-contact-box">
							<div class="footer-contact-icon"><i class="fa fa-globe"></i></div>
							<div class="footer-contact-text">
								<p><a href="http://Online_Medical_Store.com">http://Online_Medical_Store.com</a></p>
							</div>
							<div class="clr"></div>
						</div>
						</div>
					
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-two">
							<div class="footer-heading"><h2>Quick Links</h2></div>
							<div class="footer-link">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="contact.php">Categories</a></li>
									
									<li><a href="contact.php">Contact Us</a></li>
									<li><a href="feedback.php">Feedback</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-two">
							<div class="footer-heading"><h2>Sources</h2></div>
							<div class="footer-link">
								<ul>
									<li><a href="#">Netmeds</a></li>
									<li><a href="#">Medlife</a></li>
									<li><a href="#">MedlinePlus</a></li>
									<li><a href="#">Mayo Clinic</a></li>
									<li><a href="#">WebMd</a></li>
									<li><a href="#">E-Patients</a></li>
								</ul>
						</div>
					</div>
				</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="footer-section-three">
							<div class="footer-heading"><h2>Get in touch</h2></div>
							<div class="footer-form">
								<form method="post" action="#">
									<div class="footer-form-box">
										<input type="text" class="footer-form-style" placeholder="Name">
									</div>
									<div class="footer-form-box">
										<input type="text" class="footer-form-style" placeholder="Email">
									</div>
									<div class="footer-form-box">
										<input type="text" class="footer-form-style" placeholder="Phone No.">
									</div>
									<div class="footer-form-box">
										<input type="submit" class="footer-form-submit-style" value="SUBMIT">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<p>
								Copyright © 2020 Online Medical Store All Rights Reserved
							</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="swiper.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		
		<script src="script.js"></script>
		<script>
			

    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      centeredSliderSpeed:3000,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });

   
  </script>
 
</body>
</html>