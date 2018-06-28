<?php
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location: home.php');
	}
?>
<form enctype = "multipart/form-data">
								<div id = "username_warning" class = "form-group">
									<label class = "control-label">Username:</label>
									<input type = "text" id = "username" class = "form-control" />
								</div>
								<div id = "password_warning" class = "form-group">
									<label class = "control-label">Password:</label>
									<input type = "password" maxlength = "12" id = "password" class = "form-control" />
								</div>
								<div id = "result"></div>
								<br />
								<button type = "button" class = "btn btn-primary btn-block" id = "login_admin">
								<span class = "glyphicon glyphicon-check"></span> Login</button>
							</form>
						</div>
						
	<script src = "js/login.js"></script>