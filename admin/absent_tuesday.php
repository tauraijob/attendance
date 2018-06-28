<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Muzinda |</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
		<link rel = "stylesheet" href = "css/jquery.dataTables.css" />
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
				<li><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown active">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-book"></span> Records <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
					
						<li><a href = "absent.php"><span class = "glyphicon glyphicon-user"></span>Absent</a></li>
						<li><a href = "c101.php"><span class = "glyphicon glyphicon-user"></span>C101</a></li>
						<li><a href = "d201.php"><span class = "glyphicon glyphicon-user"></span>D201</a></li>
					</ul>
				</li>
				<li><a href = "barcode/html/BCGcode39.php"><span class = "glyphicon glyphicon-barcode"></span> Barcode</a></li>
				
				<li><a href = "../index.php"target="_blank"><span class = "glyphicon glyphicon-eye-open" ></span> Barcode Scanner</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">
			<a href="#"> FrontEnd Absent: &nbsp </a>
				<a href="absent_monday.php" style="margin-right:20px;" >Monday</a>
				<a href="absent_tuesday.php" style="margin-right:20px; color:red;"">Tuesday</a>
				<a href="absent_wednesday.php" style="margin-right:20px;">Wednesday</a>
                <a href="absent_thursday.php" style="margin-right:20px;">Thursday</a>
                <a href="absent_friday.php" style="margin-right:20px;">Friday</a>
			<a href="absent_python.php" style="float:right;">Go To Python Absent Page?</a></div>
			
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> 
							<button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No">
							<span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
	<div class = "well col-lg-12">
				<table id = "table" class = "table table-bordered">
				
					<thead class = "alert-info">
						<tr style="font-size:12px;">
					
								
							
							<th>Barcode ID</th>
							<th>Student Name</th>
							<th>Details</th>
							<th>Memo</th>
							<th>Date</th>
							</tr>
					</thead>
					
					<tbody>
						<?php
							$q_student = $conn->query("SELECT * FROM `calen_tuesday`") or die(mysqli_error());
							while($f_student = $q_student->fetch_array()){
							$date=$f_student['month']."-".$f_student['day']."-".$f_student['year'];
							$list1=$conn->query
							("SELECT * FROM student WHERE student_id NOT IN (SELECT id FROM late WHERE date ='".$date."')") or die ("Table Connection Error");
							while($f_time1=$list1->fetch_array())
									{
							if($f_time1['track']=="FrontEnd"){
									if($f_time1['schedule']=='Tuesday AM' || $f_time1['schedule']=='Tuesday PM' ){
													
													echo"<tr><td>".$f_time1['student_no']."</td>";		
													echo"<td>".$f_time1['firstname']." ".$f_time1['middlename']." ".$f_time1['lastname']."</td>";		
													echo"<td>".$f_time1['track']." ".$f_time1['schedule']."</td>";		
													echo"<td style='background-color: #f35b5c;' >ABSENT</td>";		
													echo"<td>".$date."</td>";
														  }
														  }
									}
							}
						?>				
						</tr>		
					</tbody>
				</table>
			</div>
		</div>
		<br>	<br>	<br>	<br>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid"style="margin-top:15px;">
				<label class = "pull-left">&copy; MuzindaHub<?php echo date("Y");?></label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/jquery.dataTables.js"></script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('#table').DataTable();
		});
	</script>
	<script type = "text/javascript">
		$(document).ready(function(){
			$('.rlate_id').click(function(){
				$late_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_c101.php?late_id=' + $late_id;
				});
			});
		});
	</script>
</html>