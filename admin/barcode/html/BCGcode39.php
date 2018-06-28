<html lang = "eng">
	<head>
		<title>MuzindaHub|Barcode Generator</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
			<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
		<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="jquery-barcode.js"></script>
		<style>
<?php
	require_once '../../validator.php';
	require_once '../../account.php'; 
?>
#config {
overflow: auto;
margin-bottom: 10px;
}

.config {
float: left;
width: 200px;
height: 250px;
border: 1px solid #000;
margin-left: 10px;
}
.config .title {
font-weight: bold;
text-align: center;
}
.config .barcode2D,  #miscCanvas {
display: none;
}
#submit {
clear: both;
}
#barcodeTarget,  #canvasTarget {
margin-top:-20%;
margin-right:25%;
font-size:30px;
float:right;
}
</style>
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
				<p class = "navbar-text pull-right">Student Management System</p>
				</div>
			<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
						<ul class = "nav nav-pills">
				<li ><a href = "../../home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown"  >
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#" ><span class = "glyphicon glyphicon-book"></span> Records <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "../../absent.php">  <span class = "glyphicon glyphicon-user"></span>Absent</a></li>
						<li><a href = "../../frontend.php"><span class = "glyphicon glyphicon-user"></span>FrontEnd</a></li>
						<li><a href = "../../python.php"><span class = "glyphicon glyphicon-user"></span>Python</a></li>
					</ul>
				</li>
				<li class="active"><a href = "BCGcode39.php"><span class = "glyphicon glyphicon-barcode"></span> Barcode</a></li>
				
				<li><a href = "../../../index.php"target="_blank"><span class = "glyphicon glyphicon-eye-open" ></span> Barcode Scanner</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Barcode Generator
			
			</div>
			<div class = "well col-lg-12">
<?php
define('IN_CB', true);
include('include/header.php');
echo '<div style="display: none;">';
$default_value['checksum'] = '';
$checksum = isset($_POST['checksum']) ? $_POST['checksum'] : $default_value['checksum'];
registerImageKey('checksum', $checksum);
registerImageKey('code', 'BCGcode39');
?>

</div>


<?php
include('include/footer.php');
?>			
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid"style="margin-top:15px;">
				<label class = "pull-left">&copy; MuzindaHub<?php echo date("Y");?></label>
			</div>	
		</div>
	</body>
</html>