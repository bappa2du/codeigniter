<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DB Error</title>
</head>
<body>
	<div class="container">
		<div class="alert alert-danger">Check your database credential in <strong><ins>.env</ins></strong> file.</div>
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