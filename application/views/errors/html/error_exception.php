<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
<div class="container" style="margin-top: 20px">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="panel-title">An uncaught Exception was encountered</div>
		</div>
		<div class="panel-body">
			<p>Type: <?php echo get_class($exception); ?></p>
			<p>Message: <?php echo $message; ?></p>
			<p>Filename: <?php echo $exception->getFile(); ?></p>
			<p>Line Number: <?php echo $exception->getLine(); ?></p>
			<hr>
			<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === true): ?>

				<p>Backtrace:</p>
				<?php foreach ($exception->getTrace() as $error): ?>

					<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

						<p style="margin-left:10px">
						File: <?php echo $error['file']; ?><br />
						Line: <?php echo $error['line']; ?><br />
						Function: <?php echo $error['function']; ?>
						</p>
					<?php endif?>

				<?php endforeach?>

			<?php endif?>
		</div>
	</div>

</div>