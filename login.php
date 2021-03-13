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
							<input class="form-control" type="email" id="UserEmail">
						</div>

						<div class="form-group" style="margin-bottom: 20px;">
							<label for="UserPassword" style="margin-bottom: 10px;"><strong>Password:</strong></label>
							<input class="form-control" type="password" id="UserPassword">
						</div>

						<button type="submit" id="SubmitButton" class="btn btn-primary" style="margin-bottom: 20px;">Login</button>
					</form>
				</div>

				<div class="col-md-3 col-sm-2"></div>
			</div>
		</div>
	</body>
</html>
