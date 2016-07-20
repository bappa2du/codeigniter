<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Error Found</title>
<link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
<style>
	.container{
		padding-top: 20px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="panel-title"><?php echo $heading; ?></div>
			</div>
			<div class="panel-body">
				<?php echo $message; ?>
			</div>
		</div>
	</div>
</body>
</html>