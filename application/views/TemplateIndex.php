<?php defined('SYSPATH') or die('No direct script access.'); ?>


<!DOCTYPE html>
<html>
<head>
    <title>Example Bootstrap Tab</title>
    <!-- Css -->
    <?php
        echo HTML::style('media/css/bootstrap.min.css');	
        echo HTML::style('media/css/bootstrap.css.map');
        echo HTML::style('media/css/bootstrap-theme.min.css');
        echo HTML::style('media/css/bootstrap-theme.css.map');
    ?>

    <?php
        echo HTML::script('media/js/jquery-3.1.0.min.js');        
    ?>
</head>
	<body>
	    <div class="col-lg-12">
			<?=$content?>
		</div>
	</body>
</html>
