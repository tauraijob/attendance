<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Muzinda | Login</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>

	</head>
	
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-right">Student Management System</p>
				</div>
				<div style="margin-top:-7px;float:right;"><h3>
					<a href = "admin/index.php" target="" style="text-decoration: none;">Login</a>
				</h3></div>
			</div>
		</nav><br><br><br>
		<div class = "container-fluid" style="margin-top:6%;">
			<div class = "col-lg-3" ></div>

			<div class = "col-lg-6 well">
			<center>
				<h2>Attendance Login</h2>
			</center>
			<br />
				<div id = "result"></div>
				<form action="index.php" method="POST">
					<div class = "form-group">
						<center>	
							<label>Scan Your Barcode ID:</label>
								<h1>
									<span class = "glyphicon glyphicon-barcode">
									</span>
								</h1>
						</center>
						<input type = "text" name="student" class = "form-control" autofocus required/>
						<br /><center>
						<?php
						include('login.php');
						?>
						<br /></center>
						<input type = "submit" name="search" value="Search" class = "btn btn-primary btn-block">
						<span class = "glyphicon glyphicon-login"></span>

					</div>
				</form>
				
			</div>
		</div>
		</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>

</html>