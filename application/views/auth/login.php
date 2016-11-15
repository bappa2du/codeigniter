<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<base href="<?=base_url();?>">
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Administation</a>
				</div>

				
			</div>
		</nav>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<div class="well">
			<form action="auth/authentication/attempt" method="post">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required="required" autocomplete="off">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">Login</button>
				</div>
			</form>
		</div>
		</div>
	</div>

	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/js/bootstrap.min.js"></script>
</body>
</html>