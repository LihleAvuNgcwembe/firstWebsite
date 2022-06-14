<?php
$name = "localhost";
$uname = "root";
$password = "";
$db_name = "website";

$conn = mysqli_connect($name, $uname, $password, $db_name);
if (!$conn){
	echo "Connection failed!";
	exit();
}

$message_sent = false;
if(isset($_POST['email'])&& $_POST['email'] != ''){
	
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		// submit the form
		$userName = $_POST['name'];
		$userEmail = $_POST['email'];
		$phoneNumber = $_POST['phone-number'];
		$message = $_POST['message'];

		$to = "ngcwembelihle@gmail.com";
		$subject = 'New Message';
		$body ="";

		$body .= "From: ".$userName. "\r\n";
		$body .= "Email: ".$userEmail.  "\r\n";
		$body .= "Phone number: ".$phoneNumber. "\r\n";
		$body .= "message: ".$message.  "\r\n";
		
		$sql = "INSERT INTO contact(name, email, contact, message) VALUE('$userName', '$userEmail', '$phoneNumber', '$message')";
		
		//mail($to,$subject,$body);	
		$message_sent = true;
	}else{ $invalid_class_name = "form-invalid";}
	
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link rel="stylesheet" href="web_style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<style>
		
			section{
				border: 10px solid none;
				height: 90vh;
				
				display; flex;
				align-items: center;
				justify-content: center;
			}
			.contact-details{
				border: 10px solid none;
				max-width: 700px;
				width: 100%;
				margin: auto;
				padding-top: 10px;
				height: 50vh;
				display: block;
				align-items: center;
				justify-content: center;
			}
			
			.contact-form{
				width:85%;
				max-width: 600px;
				background: #f1f1f1;
				margin-top: 10px;
				margin-left: 50px;
				padding: 30px 40px;
				box-sizing: border-box;
				border-radius: 8px;
				text-align: center;
				box-shadow: 0 0 20px #000000b3;
				font-family: "Montserrat", sans-serif;
			}
			
			.contact-form h1{
				marigin-top: 0;
				font-weight: 200px;
			}
			
			.txtb{
				border: 1px solid gray;
				margin: 8px 0;
				padding: 12px 18px;
				border-radius: 8px;
			}
			
			.txtb label{
				display: block;
				text-align: left;
				color: #333;
				text-transform: uppercase;
				font-size: 14px;
				
			}
			
			.txtb input,.txtb textarea{
				width: 100%;
				border: none;
				background: none;
				outline: none;
				font-size: 18px;
				margin-top: 6px;
			}
			
			form .btn{
				display: inline-block;
				background: #9b59b6;
				padding: 14px 0;
				color: white;
				text-transform: uppercase;
				margin-top: 8px;
				width: 100%;
			}
			
			form .btn:hover{
				cursor: pointer;
				background-color: #f44336;
				
			}
			
			.form{
				transition: all 4s ease-in-out;
			}
			
			.form-invalid{
				outline: 2px solid red !important;
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
		
		<section>
		<div class="contact-details">
			<img src="img/Contact-details.jpg" alt="" style="width: 100%; border-radius: 10px;">
			
			<?php if($message_sent):?>
				<h3 style= "color: white"> Thanks, we'll be in touch!!!</h3>	
			<?php else: ?>
			
			<div class="contact-form">
				<form = id="contact-form" method="POST" action="send.php">
					<h1>Contact Us</h1>
					<div class="txtb">
						<label>Full Name :</label>
						<input type="text" name="name" value="" class= "form-control" placeholder="Enter your Name">
					</div>
				
					<div class="txtb">
						<label>Email :</label>
						<input <?= $invalid_class_name ?? ""?> type="email" name="email" value="" class="form-control" placeholder="Enter Your Email" >
					</div>
				
					<div class="txtb">
						<label>Phone Number :</label>
						<input type="text" name="phone-number" value="" class="form-control" placeholder="Enter Your Phone Number">
					</div>
				
					<div class="txtb">
						<label>Message :</label>
						<textarea name="message" class="form-control" required></textarea>
					</div>
					
					<input type="submit" class="btn" value="Send Message">
				</form>
	
			</div>
		</div>
		<?php endif; ?>
		</section>
	</body>
</html>