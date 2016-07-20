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
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="auth/login">Login</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<div class="container">
		<div class="well">
			<form action="">
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info">Login</button>
				</div>
			</form>
		</div>
	</div>

	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/js/bootstrap.min.js"></script>
</body>
</html>