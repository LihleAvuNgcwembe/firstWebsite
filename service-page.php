<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>Product</title>
		<link rel="stylesheet" href="web_style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<script src="cart.js" defer ></script>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');
			
			.container{
				text-transform: capitalize;
				font-family: 'Nunito', sans-serif;
			}
			
			.container{
				font-size: 62.5%;
				overflow-x: hidden;
				transition: all .2s linear;
				text-transform: capitalize;
				overflow-x: hidden;
				background: #eee;
				max-width: 1500px;
				margin: 0 0;
				padding: 3rem 2rem
				margin-right: 0;
				box-sizing: border-box;
				width: 100%;
			}
			
			.container .title{
				font-family: 'Nunito', sans-serif;
				font-size: 3.5rem;
				color: #444;
				margin-bottom: 3rem;
				text-transform: uppercase;
				text-align: center;
			}
			
			.container .product-container{
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
				gap: 2rem;
			}
			
			.container .product-container .product{
				text-align: center;
				padding: 2rem 2rem 2rem 2rem;
				background: #fff;
				box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
				outline: .1rem solid #ccc;
				height: 15rem;
				outline-offset: -1.5rem;
				cursor: pointer;
			}
			
			.container .product-container .product:hover {
				outline: .2rem solid #222;
				outline-offset: 0;
			}
			
			.container .product-container .product h3{
				text-transform: capitalize;
				font-family: 'Nunito', sans-serif;
				padding: .5rem 0;
				font-size: 2rem;
				color: #444;
			}
			
			.container .product-container .product:hover h3{
				color: #27ae60;
			}
			
			.container .product-container .product .price{
				text-transform: capitalize;
				font-family: 'Nunito', sans-serif;
				font-size: 1rem;
				color: #444
			}

		</style>
	</head>

	<body>
		<header>
			<div class="inner-width">
				<a href="#" class="logo"><img src="img/logo.jpg" alt=""></a>
				<i class="menu-toggle-btn fas fa-bars"></i>
				<nav class="navigation-menu">
					<a href="home.php"><i class="fas fa-home home"></i>Home</a> 
					<a href="About-page.php"><i class="fas fa-align-left about"></i>About</a> 
					<a href="service-page.php"><i class="fab fa-buffer works"></i>product</a> 
					<a href="Staff-page.php"><i class="fas fa-users team"></i>Staff</a> 
					<a href="contact-page.php"><i class="fas fa-headset contact"></i>Contact</a> 
				</nav>
			</div>
		</header>
		
		<script type="text/javascript">
			$(".menu-toggle-btn").click(function(){
				$(this).toggleClass("fa-times");
				$(".navigation-menu").toggleClass("active");
			}); 
		</script>
		
		<div class="container">
			<h3 class="title"> Organic products </h3>
			
			<div class="product-container">
			
				<div class="product" data-name="p-1">
					<img src="img/chili_peppers.JPG" alt="" style="width: 170px; height: 170px;">
					<h3>Chili peppers</h3>
					<div class="price">R40 per kg</div>
				</div>
			
				<div class="product" data-name="p-2">
					<img src="img/Habenaro.JPG" alt="" style="width: 170px; height: 170px;">
					<h3>Habenaro</h3>
					<div class="price">R45 per kg</div>
				</div>
			
				<div class="product" data-name="p-3">
					<img src="img/Green_pepper.JPG" alt="" style="width: 170px; height: 170px;">
					<h3>Robot peppers</h3>
					<div class="price">R80 per 5kg</div>
				</div>
			
				<div class="product" data-name="p-4">
					<img src="img/cabbage.jpg" alt="" style="width: 170px; height: 170px;">
					<h3>Cabbage</h3>
					<div class="price">R10 per head</div>
				</div>
			
				<div class="product" data-name="p-5">
					<img src="img/spinach.JPG" alt="" style="width: 200px; height: 170px;">
					<h3>Spinach</h3>
					<div class="price">R10 per bunch</div>
				</div>
			
				<div class="product" data-name="p-6">
					<img src="img/Amass.png" alt="" style="width: 170px; height: 170px;">
					<h3>Amass</h3>
					<div class="price">R20 per 2l</div>
				</div>
			
				<div class="product" data-name="p-7">
					<img src="img/corn.jpg" alt="" style="width: 170px; height: 170px;">
					<h3>Millie's</h3>
					<div class="price">R20 per cub</div>
				</div>
				
			</div>
		</div>
	</body>
</html>