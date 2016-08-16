<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<title>Login</title>
		<?php
        echo HTML::style('media/css/bootstrap.min.css');	
        echo HTML::style('media/css/bootstrap.css.map');
        echo HTML::style('media/css/bootstrap-theme.min.css');
        echo HTML::style('media/css/bootstrap-theme.css.map');
    	?>
		<script type="text/javascript">
		<!--
		onload=function()
		{
			document.getElementById('username').focus();
		}
		//-->
		</script>
	</head>

	<body>
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >

					<div class="panel-heading">
		                
		                <div class="panel-title">
		                	Autorizacion Requerida 
		                </div>							

					</div>     

		            <div style="padding-top:30px" class="panel-body" >

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
		                    	
						</div>
		                        
		                <form id="loginform" class="form-horizontal" role="form" method="POST" action="Auth/login">
		                                
							<div style="margin-bottom: 25px" class="input-group">
								
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-user">									
									</i>
								</span>
								
								<input id="username" type="text" class="form-control" name="username" value="" placeholder="Usuario">                                        
							</div>
		                                
							<div style="margin-bottom: 25px" class="input-group">
								
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-lock">						
									</i>
								</span>
								
								<input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
							</div>                                                                   
							
							<div style="margin-top:10px" class="form-group">

								<div class="col-sm-12 controls">									
									<input type="submit" name="submit" id="submit" class="btn btn-success" value="Ingresar">
								</div>
							</div>

						</form>     

					</div>                     
				</div>  

		    </div>      
		</div>

	</body>
</html>