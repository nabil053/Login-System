<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css">
		<link rel="stylesheet" href="MyStyle.css">
  	<script src="bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-2"></div>

				<div class="col-md-6 col-sm-8 col-xs-12 loginBox">
					<h1 style="text-align: center;">LOGIN</h1>

					<form class="" action="" method="post">
						<div class="form-group" style="margin-bottom: 20px;">
							<label for="UserEmail" style="margin-bottom: 10px;"><strong>Email:</strong></label>
							<input class="form-control" type="email" name="UserEmail" id="UserEmail" placeholder="Enter Email">
						</div>

						<div class="form-group" style="margin-bottom: 20px;">
							<label for="UserPassword" style="margin-bottom: 10px;"><strong>Password:</strong></label>
							<input class="form-control" type="password" name="UserPassword" id="UserPassword" placeholder="Enter Password">
						</div>

						<input type="submit" id="Login" name="Login" value="Login" class="btn btn-primary" style="margin-bottom: 20px;">
					</form>

					<?php
						$con = mysqli_connect("localhost","root","","login_database");
						if (mysqli_connect_errno()) {
							echo "Failed to connect to MYSQL: ".mysqli_connect_error();
						}
						else{
							if(isset($_POST['Login'])){
								$email = $_POST['UserEmail'];
								$password = $_POST['UserPassword'];

								$user_query = $con->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
								$is_authentic = mysqli_num_rows($user_query);

								if($is_authentic == 0){
									header("Location: error.php");
								}
								else{
									header("Location: success.php");
								}
								exit();
							}
						}
					?>
				</div>

				<div class="col-md-3 col-sm-2"></div>
			</div>
		</div>
	</body>
</html>
