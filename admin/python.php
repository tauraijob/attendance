<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Muzinda| Python Records</title>
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
						<li><a href = "absent.php">  <span class = "glyphicon glyphicon-user"></span>Absent</a></li>
						<li><a href = "frontend.php"><span class = "glyphicon glyphicon-user"></span>FrontEnd</a></li>
						<li><a href = "python.php"><span class = "glyphicon glyphicon-user"></span>Python</a></li>
					</ul>
				</li>
				<li><a href = "barcode/html/BCGcode39.php"><span class = "glyphicon glyphicon-barcode"></span> Barcode</a></li>
				
				<li><a href = "../index.php"target="_blank"><span class = "glyphicon glyphicon-eye-open" ></span> Barcode Scanner</a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Python Student Record</div>
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
						<tr>
							<th>Student ID</th>
							<th>Student Details</th>
							<th>Time</th>
							<th>Date</th>
							<th>Memo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$Track="Python";
						$q_time = $conn->query("SELECT * FROM `late` Where `student_details` LIKE '%".$Track."%'") or die(mysqli_error());
						while($f_time=$q_time->fetch_array()){	
					?>	
						<tr>
							<td><?php echo $f_time['student_no']?></td>
							<td><?php echo htmlentities($f_time['student_details'])?></td>
							<td><?php echo date("h:i a", strtotime($f_time['time']))?></td>
							<td><?php echo date("m-d-Y", strtotime($f_time['date']))?></td>
							<?php 
							if($f_time['late']=="Late" || $f_time['late']=="late"){
							echo "<td style='background-color: #f35b5c;' >".$f_time['late']."</td>";
							}else{
							echo "<td style='background-color: #286090;'>".$f_time['late']."</td>";
								
							}
							
							
							?>
							
				
							<td>
							<a class = "btn btn-danger rstudent_id" onclick="return confirm('Are You Sure?')"
							href = "d201.php?idx=<?php echo $f_time['late_id']?>">
							<span class = "glyphicon glyphicon-remove">
							</span></a> 
							<?php
							}
							if(isset($_GET['idx'])){
								$idx=$_GET['idx'];
								$result=$conn->query("DELETE FROM late WHERE late_id='$idx'");
								if($result){
									?>
									<script>
									alert('Successful Deleted');
									window.location.href='d201.php';
									</script>
									<?php
								}else{
									?>
									<script>
									alert('Fail To Delete The Student');
									window.location.href='d201.php';
									</script>
									<?php
								}
							}
							?>
						</td>
						</tr>
					<?php
						
						echo"
						<br>
						<br>
						<br>
						<br>
						"
					?>	
					</tbody>
				</table>
			</div>
		<br>	<br>	<br>	<br>
		</div>
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
					window.location = 'delete_d201.php?late_id=' + $late_id;
				});
			});
		});
	</script>
</html>