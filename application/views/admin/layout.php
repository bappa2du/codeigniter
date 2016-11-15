<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<base href="<?=base_url();?>">
	<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/css/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="admin">Admin</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<?= auth_user()->username ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings</a></li>
							<li class="divider"></li>
							<li><a href="auth/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-2">
			<div class="list-group">
				<a href="#" class="list-group-item active"><i class="fa fa-home"></i> Home</a>
				<a href="#" class="list-group-item"><i class="fa fa-comment"></i> Blog</a>
				<a href="#" class="list-group-item"><i class="fa fa-image"></i> Gallery</a>
				<a href="#" class="list-group-item"><i class="fa fa-user"></i> Users</a>
				<a href="#" class="list-group-item"><i class="fa fa-cog"></i> Settings</a>
			</div>
		</div>
		<div class="col-md-10">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Library</li>
			</ul>
			<div class="page-content">
				<?= $content ?>
			</div>
		</div>
	</div>
	</div>

	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/js/bootstrap.min.js"></script>
</body>
</html>