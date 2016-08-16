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
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="container-fluid">					    
				    <div class="navbar-header">				      
				      <a class="navbar-brand" href="#">Sistema de Biblioteca</a>
				    </div>
					 					    
					<div class="collapse navbar-collapse">		    	
						<ul class="nav navbar-nav navbar-right">
					        <li><a href="#">Bienvenido <b><?=$usuario?></b></a></li>
					 		<li><a href="Auth/logout">Salir</a></li>
				      	</ul>
					</div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>

		    <div class="col-lg-12">
				<?=$content?>
			</div>
		</div>
	</body>
</html>
