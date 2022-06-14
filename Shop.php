<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport content=" width="device-width, initial-scale=1.0">
	<title> Shop </title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
	integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="style.css">
	
	<style>
		.product img{
			width: 100%;
			height: auto;
			box-sizing: border-box;
			object-fit: cover;
		}
		
		#featured > div.row.mx-auto.container > nav > ul > li.page-item.active > a{
			background-color: LightGreen;
		}
		
		#featured > div.row.mx-auto.container > nav > ul > li:nth-child(n):hover>a{
			background-color: green;
			color: #fff;
		}
		
		.pagination a{
			color: lightGreen;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
		<div class="container">
			<img src="img/logo.jpg" alt="">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i  id="bar" class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
		
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link active" href="Shop.php">Shop</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link" href="blog.php">Blog</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link" href="About-page.php">About</a>
					</li>
			
					<li class="nav-item">
						<a class="nav-link" href="contact-page.php">Contact Us</a>
					</li>
			
					<li class="nav-item">
						<div class="row">
							<div class="col-sm"><i class="fas fa-search"></i></div>
						</div>	
					</li>
				</ul>	
			</div>
		</div>
	</nav>

<section id="featured" class="my-5 py-5">
	<div class="container mt-5 py-5">
		<h2 class="font-weight-bold">Our Products</h2>
		<hr>
		<p>Here you can check out our main products with fair price.</p>
	</div>
	
	<div class="row mx-auto container">
		<div  class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/spinach.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Spinach</h5>
			<h4 class="p-price">R10.00 per Bunch </h4>
			<button class="buy-btn"> Buy Now</button>
		</div>
		
		<div onclick="fecth_info(1)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/Habenaro.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Habenaro</h5>
			<h4 class="p-price">R45.00 per 1kg </h4>
			<button class="buy-btn"onclick="fecth_info(1)">Buy Now</button>
		</div>
		
		<div onclick="fecth_info(2)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/habbash_squash.webp" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Habbash squash</h5>
			<h4 class="p-price">R30.00 </h4>
			<button class="buy-btn" onclick="fecth_info(2)">Buy Now</button>
		</div>
		
		<div onclick="fecth_info(3)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/chili_peppers.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Chili peppers</h5>
			<h4 class="p-price">R40.00 per 1kg </h4>
			<button class="buy-btn"onclick="fecth_info(3)">Buy Now</button>
		</div>
		
		<div onclick="fecth_info(4)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/Green_pepper.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Robot peppers</h5>
			<h4 class="p-price">R80.00 per 5kg </h4>
			<button class="buy-btn" onclick="fecth_info(4)">Buy Now</button>
		</div>
		
		<div onclick="fecth_info(5)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/cabbage.jpg" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Cabbage</h5>
			<h4 class="p-price">R10.00 per head </h4>
			<button class="buy-btn" onclick="fecth_info(5)'">Buy Now</button>
		</div>
		
		<div onclick="fecth_info(6)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/corn.jpg" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Meilies</h5>
			<h4 class="p-price">R60.00</h4>
			<button class="buy-btn" onclick="wfecth_info(6)'">Buy Now</button>
		</div>
		
		<div onclick="fecth_info(7)" class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/Amass.png" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Amass</h5>
			<h4 class="p-price">R20.00 per 2L </h4>
			<button class="buy-btn" onclick="fecth_info(7)">Buy Now</button>
		</div>
		
		<div class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/chili_peppers.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Chili peppers</h5>
			<h4 class="p-price">R40.00 per 1kg </h4>
			<button class="buy-btn" onclick="fecth_info(0)">Buy Now</button>
		</div>
		
		<div class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/chili_peppers.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Chili peppers</h5>
			<h4 class="p-price">R40.00 per 1kg </h4>
			<button class="buy-btn"onclick="window.location.href='Product.php'">Buy Now</button>
		</div>
		
		<div class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/chili_peppers.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Chili peppers</h5>
			<h4 class="p-price">R40.00 per 1kg </h4>
			<button class="buy-btn" onclick="window.location.href='Product.php'">Buy Now</button>
		</div>
		
		<div class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3" src="img/chili_peppers.JPG" alt="" style="width: 200px; height: 200px;">
			<div class="star">
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			</div>
			<h5 class="p-name">Chili peppers</h5>
			<h4 class="p-price">R40.00 per 1kg </h4>
			<button class="buy-btn" onclick="window.location.href='Product.php'">Buy Now</button>
		</div>
		
		<nav aria-label="...">
			<ul class="pagination mt-5">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item" aria-current="page">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
	</div>
</section>

	<section id="blog-home" class="pt5 mt-5 container">
		<h2 class="font-weight-bold pt-5">Shopping Cart</h2>
		<hr>
	</section>
	
<section id="cart-container" class="container my-5">
	<table width="100%"> 
		<thead>
			<tr>
				<td>Remove</td>
				<td>image</td>
				<td>product</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Total</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="#"><i class="fas fa-trash-alt"></i></td>
				<td><image src="img/Habenaro.JPG" alt=""></td>
				<td><h5>Habenaro</h5></td>
				<td><h5>R45 </h5></td>
				<td><input class="w-25 pl-1" value="1"type="number"></td>
				<td><h5>R115.00<h3></td>
					
			</tr>
		</tbody>
	</table>
</section>

<section id="cart-bottom" class="container">

		<div class="row">
			<div class="total col-lg-6 col-md-6 col-12">
				<div>
					<h5> CART TOTAL</h5>
					<div class="d-flex justify-content-between">
						<h6>Subtotal</h6>
						<p>R115.00</p>
					</div>
					
					<div class="d-flex justify-content-between">
						<h6>Delivery</h6>
						<p>R20.00</p>
					</div>
					
					<hr class="second-hr">
					
					<div class="d-flex justify-content-between">
						<h6>Total</h6>
						<p>R135.00</p>
					</div>
					
					<button class="ml-auto">PROCEED TO CHECKOUT</button>
				</div>
			</div>
		</div>
		
	</section>

<footer class="mt-5 py-5">
	<div class="row container mx-auto pt-5"> 
		<div class="footer-one col-lg-3 col-mg-6 col-12 mb-3">
			<img src="img/logo.jpg" alt="">
			<p>
			a family owned commercial farm <br>
			that a is part of Ngcwembe Investments.
			<br>It was acquired in 2018 and has
			been undergoing<br> development in order 
			to commercialize and gain profit. 
			</p>
		</div>
		
		<div class="footer-two col-lg-3 col-mg-6 col-12 mb-3">
			<h5  class="pb-2">Featured</h5>
			<ul class="text-uppercase list-unstyled">
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
			</ul>
		</div>
		
		<div class="footer-three col-lg-3 col-mg-6 col-12 mb-3">
			<h5  class="pb-2">Contact Us</h5>
			<div>
				<h6 class="text-uppercase">Address</h6>
				<p>10 YELLOWWOOD, BREIDBACH, KINGS WILLAIM TOWN</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Phone</h6>
				<p>082 921 7788</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Email</h6>
				<p>123@Kweshi@gmail.com</p>
			</div>
		</div>
		
		<div class="footer-four col-lg-3 col-md-6 col-12">
			<h5  class="pb-2">pics</h5>
				<div class="row">
					<img class="img-fluid w-25 h-100 m-2" src="img/Working_girl.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(1).JPG" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(2).JPG" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(3).JPG" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(4).JPG" alt="">
				</div>
		</div>
	
		<div class="copyright mt-5">
			<div class="row container mx-auto">
				<div class="col-lg-4 col-md-6 col-12 text-nowrap mb-4" >
					<p> Lihle eCommerce © 2022. All Rights Reserved</p>
				</div>
				
		</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="shopping-cart.js"></script>
</body>
</html>