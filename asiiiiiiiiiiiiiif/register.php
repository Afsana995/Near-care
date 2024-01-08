<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-image: url("./images/7310061.jpg");
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}
		
		.container {
			background-color: #fff;
			padding: 30px;
			border-left: 2px solid #000;
			border-right: 2px solid #000;
			margin: 50px;
		}
		
		form {
			text-align: left;
		}
		
		input[type="text"],
		input[type="password"],
		input[type="email"],
		input[type="submit"],
		a {
			display: inline-block;
			vertical-align: middle;
		}
		
		input[type="text"],
		input[type="password"],
		input[type="email"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
			margin-bottom: 20px;
		}
		
		input[type="submit"] {
			padding: 20px 50px;
			background-color: #007bff;
			border: none;
			color: #fff;
			border-radius: 5px;
			cursor: pointer;
			transition: all 0.3s ease-in-out;
			width: auto;
		}
		
		input[type="submit"]:hover {
			background-color: #0062cc;
			transform: translateY(-2px);
			box-shadow: 0 5px 10px rgba(0,0,0,0.3);
		}
		
		.create-account {
			margin-top: 20px;
		}
		
		.create-account a {
			color: #007bff;
			text-decoration: none;
			font-weight: bold;
			margin-left: 5px;
		}
		.head {
    position: relative;
    left: 40px;
    top: 10px;
  }
  
  #logo {
    height: 33px;
    width: 35px;
    position: absolute;
    top: 4px;
    left: 3px;
  }
  
  #circle {
    height: 42px;
    width: 42px;
    border-radius: 50%;
    background-color: rgb(75, 122, 242);
  }
	</style>
</head>
<body>
	<div class="container">
		<h2>Sign Up</h2>
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<input type="text" id="name" name="username">
			<label for="email">Email:</label>
			<input type="email" id="email" name="email">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password_1">
			<label for="confirm_password">Confirm Password:</label>
			<input type="password" id="confirm_password" name="password_2">
			<br>
			<input type="submit" value="Sign Up" href="login.php" name="reg_user">
			<div class="create-account">
				Already have an account? <a href="login.php">Log in</a>
			</div>
		</form>
	</div>
</body>
</html> 
