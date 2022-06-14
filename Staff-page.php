<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>Staff</title>
		<link rel="stylesheet" href="web_style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		
		<style>

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
		
	<div class="wrapper">
		<h1> Our Managers</h1>
		<div class="our_manager">
			<div class="team_member">
				<div class="member_img">
					<img src="img/Linda_Ngcwembe.jpg" alt="our_manager" style="width: 160px; height: 160px; border-radius: 50%;">
				</div>

				<h3>Linda Ngcwembe</h3>
				<Span>Owner & Financial Manager</span>
				<p>
				Linda is experienced in the financial field. 
				She  has held senior roles in finance including CFO. 
				She has overall operational responsibility for the 
				farm including customer/stakeholder engagement
				</p>
			</div>
			
			<div class="team_member">
				<div class="member_img">
					<img src="img/NXTUE0154.JPG" alt="our_manager" style="width: 160px; height: 160px; border-radius: 50%;">
				</div>
				<h3>Khaya Ngcwembe</h3>
				<Span>Owner & Business manager</span>
				<p>
				Khaya is experienced in HR and Business Management. 
				He has held senior roles in Blue Chip companies in 
				South Africa including executive directorship roles. 
				He supports business management and planning in the farm
				</p>
			</div>
			
			<div class="team_member">
				<div class="member_img">
					<img src="img/Lubabalo_Ngcwembe.jpg" alt="our_manager" style="width: 160px; height: 160px; border-radius: 50%;">
				</div>
				<h3>Lubabalo Ngcwembe</h3>
				<Span>General Manager</span>
				<p>
				Lubabalo has responsibility of running the day to day 
				operations at the farm and leverages his technical 
				background to ensure continuity and alignment of farm 
				activities to the annual program
				</p>
			</div>
		</div>
	</div>
		<script type="text/javascript">
			$(".menu-toggle-btn").click(function(){
				$(this).toggleClass("fa-times");
				$(".navigation-menu").toggleClass("active");
			}); 
		</script>	
	</body>
</html>