<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>AboutUs</title>
		<link rel="stylesheet" href="web_style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<style>
		
			body{
				font-family: verdana,sans-serif;
			}
			
			.mySlides{
				.display: none;
			}
			
			.mySlides img{
				vertical-align: middle;
			}
			
			.slider{
				max-width: 80%;
				position: relative;
				margin: auto;
				
			}
			
			.prev, .next{
				cursor: pointer;
				position: absolute;
				top: 50%;
				width: auto;
				padding: 16px;
				margin-top: -22px;
				color: green;
				font-weight: bold;
				font-size: 18px;
				transition: 0.6s ease;
				border-radius: 0 3px 3px 0;
				user-select: none;
			}
			
			.next{
				right: 0;
				border-radius: 3px 0 0 3px;
			}
			
			.prev:hover, .next:hover{
				background-color: rgba(0,0,0,0.8);
			}
			
			.dot{
				cursor: pointer;
				height: 15px;
				width: 15px;
				margin: 0 2px;
				background-color: green;
				border-radius: 50%;
				display: inline-block;
				transition: background;-color 0.6s ease;
				
			}
			
			.active,  .dot:hover{
				background-color: #717171;
				
			}	

			.fade{
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
			}
			
			@-webkit-keyframes fade{
				from{opacity: .4}
				to{opacity: 1}
			}
			
			@keyframes fade{
				from{opacity: .4}
				to{opacity: 1}
				}
				
			@media only screen and (max-width: 300px){
				.prev, .next, .text{
					font-size: 11px;
					
				}
				
				.dot{
					height: 10px;
					width: 10px;
				}
			}	

			@media only screen and (max-width: 500px){
				.prev, .next, .text{
					font-size: 14px;
					
				}
				
				.dot{
					height: 10px;
					width: 10px;
				}
			}			
		</style>
	</head>

	<body>
		<header>
			<div class="inner-width">
				<a href="#" class="logo"><img src="img/logo.jpg" alt=""></a>
				<i class="menu-toggle-btn fas fa-bars"></i>
				<nav class="navigation-menu">
					<a href="home.php"><i class="fas fa-home home"></i>Return</a> 
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
	
		<div class="slider">
			<div class="myslides fade">
				<img src="img/Farm-overview.jpg" alt="" style="width: 100%; border-radius: 10px;">
			</div>	
				
			<div class="myslides fade">
				<img src="img/ideals.jpg" alt="" style="width:100%; border-radius: 10px;">
			</div>
			
			<div class="myslides fade">
				<img src="img/Resources.jpg" alt="" style="width:100%; border-radius: 10px;">
			</div>
			
			<div class="myslides fade">
				<img src="img/Clients.jpg" alt="" style="width:100%; border-radius: 10px;">
			</div>	
			
	
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<div style="text-align: center;">
			<span class="dot" onclick="currentSlides(1)"></span> 
			<span class="dot" onclick="currentSlides(2)"></span> 
			<span class="dot" onclick="currentSlides(3)"></span> 
			<span class="dot" onclick="currentSlides(4)"></span> 
		</div>
		<script src="script.js"></script>
	</body>
</html>