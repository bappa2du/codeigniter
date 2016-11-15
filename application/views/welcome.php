<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<base href="<?=base_url();?>">
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Codeigniter</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					

					<ul class="nav navbar-nav navbar-right">
						<li><a href="auth/login">Login</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
	<div class="container">

		<div class="jumbotron">
			<h1>Welcome Page</h1>
			<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<p><a class="btn btn-primary btn-lg" href="auth/login">Admin Login</a></p>
		</div>
	</div>

	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/js/bootstrap.min.js"></script>
</body>
</html>