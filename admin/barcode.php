<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Muzinda</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
			<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
		<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="jquery-barcode.js"></script>
<script type="text/javascript">
    
      function generateBarcode(){
        var value = $("#barcodeValue").val();
        var btype = $("input[name=btype]:checked").val();
        var renderer = $("input[name=renderer]:checked").val();
        
		var quietZone = false;
        if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
          quietZone = true;
        }
		
        var settings = {
          output:renderer,
          bgColor: $("#bgColor").val(),
          color: $("#color").val(),
          barWidth: $("#barWidth").val(),
          barHeight: $("#barHeight").val(),
          moduleSize: $("#moduleSize").val(),
          posX: $("#posX").val(),
          posY: $("#posY").val(),
          addQuietZone: $("#quietZoneSize").val()
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>
		<style>

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
				<p class = "navbar-text pull-right">Attendance Record System</p>
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
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
					</ul>
				</li>
				<li class = "dropdown active">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-book"></span> Records <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "absent.php">  <span class = "glyphicon glyphicon-user"></span>Records</a></li>
						<li><a href = "frontEnd.php"><span class = "glyphicon glyphicon-user"></span>FrontEnd</a></li>
						<li><a href = "python.php"><span class = "glyphicon glyphicon-user"></span>Python</a></li>
					</ul>
				</li>
				<li class = "active"><a href = "barcode.php"><span class = "glyphicon glyphicon-barcode"></span> Barcode Generator</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Barcode Generator</div>
			<div class = "well col-lg-12">
<h1 style="margin-top:10px;"></h1>
<div id="generator"> Add Four Digit:
<input type="text" id="barcodeValue" value="6977" maxlength="8" style="font-size:12px;">
<div id="config" style="margin-top:10px;">
<div class="config">
<div class="title">Type</div>

<input type="radio" name="btype" id="code39" value ="code39" checked = "checked">
<label for="code39">Code 39</label>
<br />
<input type="radio" name="btype" id="code93" value ="code93">
<label for="code93">Code 93</label>
<br />
<input type ="radio" name ="btype" id ="code128" value ="code128">
<label for ="code128">Code 128</label>
<br />

<br />
</div>
<div class="config">
<div class="title">Option</div>
Bar Height:
<input type="text" id="barHeight" value="150" size="3">
<br />
<div class="barcode1D"> Bar Width:
<input type="text" id="barWidth" value="3" size="3">
<br />
</div>
<input type="radio" id="bmp" name="renderer" value="bmp" >
<label for="bmp">Without Number</label>
<br>
<input type="radio" id="css" name="renderer" value="css" checked="checked">
<label for="css">With Number</label>
<br />
</div>
<div id="submit">
<input type="button" style="margin-top:10px;"onclick="generateBarcode();" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Generate The Barcode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
</div>
</div>
</div>

<div id="barcodeTarget" class="barcodeTarget"></div>
<canvas id="canvasTarget" width="150" height="150"></canvas>
<script type="text/javascript" >

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">&copy; MuzindaHub<?php echo date("Y");?></label>
			</div>	

		
	</body>
	
</html>