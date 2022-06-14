<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>contact</title>
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
					<a href="service-page.php"><i class="fab fa-buffer works"></i>Service</a> 
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
		
	<?php
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone-number']) && isset($_POST['message'])){
			include 'db_conn.php';
		
			function validate($data){
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			
			$name = validate($_POST['name']);
			$email = validate($_POST['email']);
			$contact = validate($_POST['phone-number']);
			$text = validate($_POST['message']);
			
			if (empty($text) || empty($name) || empty($contact) || empty($email)){
				header("location: contact-page.php");
			} else{
				$sql = "INSERT INTO contact(name, email, contact, message) VALUES('$name', '$email', '$contact', '$text')";
				$res = mysqli_query($conn, $sql);
				
				if($res){
					echo "Your message was sent successfully!";
				}else{
					echo "your message could not be sent!";
				}
			}
			
		}else{
			
			header("location: contact-page.php");
		}
?>
		
	</body>
</html