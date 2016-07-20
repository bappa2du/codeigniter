<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
<div class="container" style="margin-top: 20px">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="panel-title">A PHP Error was encountered</div>
		</div>
		<div class="panel-body">
			<p>Severity: <?php echo $severity; ?></p>
			<p>Message:  <?php echo $message; ?></p>
			<p>Filename: <?php echo $filepath; ?></p>
			<p>Line Number: <?php echo $line; ?></p>
			<hr>
			<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === true): ?>

				<p>Backtrace:</p>
				<?php foreach (debug_backtrace() as $error): ?>

					<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

						<p style="margin-left:10px">
						File: <?php echo $error['file'] ?><br />
						Line: <?php echo $error['line'] ?><br />
						Function: <?php echo $error['function'] ?>
						</p>

					<?php endif?>

				<?php endforeach?>

			<?php endif?>
		</div>
	</div>

</div>