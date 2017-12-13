<?php
	include 'controller.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usiversity || Home Page</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container-fluid" style="background-color: #CCDFF0;">
		<div class="row">			
			<marquee><h3><b>"Today, Tommorrow And Beyond"</b></h3></marquee>
		</div>
	</div>
	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" height="40" width="60"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
		        	<li><a href="index.php">Home</a></li>
		        	<li><a href="#">About</a></li>
		        	<li><a href="#contact" class="smoth-scroll">Contact</a></li>
		        </ul>		        
		        <?php
		        	if($_SESSION["user-role"] == "student")
					{
						include 'studentMenu.php'; 
					}
					else if($_SESSION["user-role"] == "admin")
					{
						include 'registerMenu.php'; 
					}
					else if($_SESSION["user-role"] == "professor")
					{
						include 'professorMenu.php'; 
					}
		        ?>		        
		        <ul class="nav navbar-nav navbar-right">
		        	<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				        	<?php
				        		if(empty($_SESSION["user-role"]))
				        		{
				        			echo'<li><a href="login.php">Login</a></li>';
				        		}
				        		else
				        		{
				        			echo'<li><a href="?logout">logout</a></li>';
				        		}
				        	?>
				        </ul>
				    </li>
		        </ul>
		    </div>
		</div>
	</nav>