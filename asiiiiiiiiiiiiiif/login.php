<?php include('server.php')?>
<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
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

		#headlogo {
			text-decoration: none;
			position: absolute;
			top: 150px;
			left: 800px;

		}

		form {
			text-align: left;
		}

		input[type="text"],
		input[type="password"],
		input[type="submit"],
		a {
			display: inline-block;
			vertical-align: middle;
		}

		input[type="text"],
		input[type="password"] {
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
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
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

		#cn {
			width: 80px;
			font-weight: bold;
			color: rgb(75, 122, 242);
			position: relative;
			left: -12px;
			font-family: "Poppins", sans-serif;
		}
	</style>
</head>

<body>
	<a href="index.php" id="headlogo">
		<div class="head">
			<div id="circle"></div>
			<img src="images/+.png" id="logo">
			<span id="cn">Near Care</span>
		</div>
	</a>
	<div class="container">
		<h2>Login</h2>
		<form method="post" action="login.php">
  	   	<?php include('errors.php'); ?>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password">
			<br>
			<input type="submit" value="Login" href="index.php" name = "login_user" >
			<div class="create-account">
				New user? <a href="register.php">Create an account</a>
			</div>
		</form>
	</div>
</body>


</html>