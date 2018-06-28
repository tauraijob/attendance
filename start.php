<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>MuzindaHub</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-right">MuzindaHub Attendance Record System</p>
				</div>
				<div style="margin-top:-7px;float:right;"><h3>
					<a href = "admin/index.php" target="_blank">Admin Site</a>
				</h3></div>
			</div>
		</nav><br><br><br>
		<div class = "container-fluid">
			<div class = "col-lg-3"></div>

			<div class = "col-lg-6 well">
						<center>
				<h2><?php
				
				$time=date("H:i", strtotime("+6 HOURS"));
				
				     if($time>="06:00 am"){
					echo"Good Morning".$time;
				}elseif($time>="1:00 pm"){
					echo"Good Afternoon";
				}elseif($time="6:00 pm"){
					echo"Good Evening";
				}
				?></h2>
				<br />
				<div id = "result"></div>
				<form enctype = "multipart/form-data">
					<div class = "form-group"><center>
						
						
						
						<ul class="ol_list">
						<li id="li_list"><a href="">Monday AM Class</a></li>
						<li id="li_list"><a href="">Monday PM Class</a></li>
						<li id="li_list"><a href="">Tuesday AM Class</a></li>
						<li id="li_list"><a href="">Tuesday PM Class</a></li>
						<li id="li_list"><a href="">Wednesday AM Class</a></li>
						<li id="li_list"><a href="">Wednesday PM Class</a></li>
						<li id="li_list"><a href="">Thursday AM Class</a></li>
						<li id="li_list"><a href="">Thursday PM Class</a></li>
						<li id="li_list"><a href="">Friday AM Class</a></li>
						<li id="li_list"><a href="">Friday PM Class</a></li>
						</ul>
						</center>
					</div>
				</form>
				<center>
				Love God - Make Discipline - Impact Our World
				</center>
			</div>
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>