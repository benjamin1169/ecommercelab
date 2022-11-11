<!-- <?php 
//require("../settings/core.php"); 

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="../css/registerform.css">
</head>
<body>
<!-- <form method="POST" action="../actions/registerprocess.php" id="form">
	<input type="text" name="name" id="name" placeholder="Enter Username"> <br>
	<input type="text" name="email" id="email" placeholder="Enter Your Email Address"><br>
	<input type="password" name="password" id="password" placeholder="Enter Your Password"><br>
	<input type="text" name="country" id="country" placeholder="Country name"><br>
	<input type="text" name="city" id="city" placeholder="City"><br>
	<input type="text" name="contact" id="tel_num" placeholder="Enter Your Telephone Number"><br>
	<button name="Register" type="submit" value="Login">Sign up</button>
 <input type="submit" value="register" name="Register"> 
</form> -->




<div class="container">
	<div class="screen">
		<div class="screen__content">

			<form method="POST" action="../actions/returnUser.php" id="form">

				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Enter Your Email" name="email">
				</div>

				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Enter Your Password" name="password">
				</div>


				<button class="button login__submit" type="submit" name="login">
					<span class="button__text">Log In</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	

			</form>


			<div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>






</body>
</html>

