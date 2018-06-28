<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Weekly Schedule</title>
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
				<li ><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown"  >
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#" ><span class = "glyphicon glyphicon-book"></span> Records <span class = "caret"></span></a>
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
			<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-primary">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Add New Schedule</h4>
						</div>
						<form method = "POST" action = "save_cal_query.php" enctype = "multipart/form-data">
							<div class  = "modal-body">
								<div class = "form-group">
									<label>Teachers Name:</label>
									<input type = "text" required = "required" name = "name" class = "form-control" />
								</div>
							
								<div class = "form-group">
									<label> Date:</label><br><select required = "required" name = "month" >
										<option value="Jan" class = "form-control"> January</option>
										<option value="Feb" class = "form-control"> Febuary</option>
										<option value="Mar" class = "form-control"> March</option>
										<option value="Apr" class = "form-control"> April</option>
										<option value="May" class = "form-control"> May</option>
										<option value="Jun" class = "form-control"> June</option>
										<option value="Jul" class = "form-control"> July</option>
										<option value="Aug" class = "form-control"> August</option>
										<option value="Sep" class = "form-control"> September</option>
										<option value="Oct" class = "form-control"> October</option>
										<option value="Nov" class = "form-control"> November</option>
										<option value="Dec" class = "form-control"> December</option>
									</select>
									<select required = "required" name = "day" >
										<option value="01" class = "form-control">01</option>
										<option value="02" class = "form-control">02</option>
										<option value="03" class = "form-control">03</option>
										<option value="04" class = "form-control">04</option>
										<option value="05" class = "form-control">05</option>
										<option value="06" class = "form-control">06</option>
										<option value="07" class = "form-control">07</option>
										<option value="08" class = "form-control">08</option>
										<option value="09" class = "form-control">09</option>
										<option value="10" class = "form-control">10</option>
										<option value="11" class = "form-control">11</option>
										<option value="12" class = "form-control">12</option>
										<option value="13" class = "form-control">13</option>
										<option value="14" class = "form-control">14</option>
										<option value="15" class = "form-control">15</option>
										<option value="16" class = "form-control">16</option>
										<option value="17" class = "form-control">17</option>
										<option value="18" class = "form-control">18</option>
										<option value="19" class = "form-control">19</option>
										<option value="20" class = "form-control">20</option>
										<option value="21" class = "form-control">21</option>
										<option value="22" class = "form-control">22</option>
										<option value="23" class = "form-control">23</option>
										<option value="24" class = "form-control">24</option>
										<option value="25" class = "form-control">25</option>
										<option value="26" class = "form-control">26</option>
										<option value="27" class = "form-control">27</option>
										<option value="28" class = "form-control">28</option>
										<option value="29" class = "form-control">29</option>
										<option value="30" class = "form-control">30</option>
										<option value="31" class = "form-control">31</option>	
									</select>
									<select required = "required" name = "year" >
										<option value="2016" class = "form-control"> 2016</option>
										<option value="2017" class = "form-control"> 2017</option>
										<option value="2018" class = "form-control"> 2018</option>
										<option value="2019" class = "form-control"> 2019</option>
										<option value="2020" class = "form-control"> 2020</option>
										<option value="2021" class = "form-control"> 2021</option>
										<option value="2022" class = "form-control"> 2022</option>
										<option value="2023" class = "form-control"> 2023</option>
										<option value="2024" class = "form-control"> 2024</option>
										<option value="2025" class = "form-control"> 2025</option>
										<option value="2026" class = "form-control"> 2026</option>
										<option value="2027" class = "form-control"> 2027</option>
										<option value="2028" class = "form-control"> 2028</option>
										<option value="2029" class = "form-control"> 2029</option>
										<option value="2030" class = "form-control"> 2030</option>
									</select>
								</div>
								<div class = "form-group">
								<label>Schedule:</label><br>
								<select style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" name="schedule" class = "form-group">
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Monday AM" required = "required" class = "form-control">Monday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Monday PM" required = "required" class = "form-control">Monday Class PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Tuesday AM" required = "required" class = "form-control">Tuesday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Tuesday PM" required = "required" class = "form-control">Tuesday Class PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Wednesday AM" required = "required" class = "form-control">Wednesday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Wednesday PM" required = "required" class = "form-control">Wednesday Class PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Thursday AM" required = "required" class = "form-control">Thursday Class AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Thursday PM" required = "required" class = "form-control">Thursday Class PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Friday AM" required = "required" class = "form-control">Friday Class AM</option><option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Friday PM" required = "required" class = "form-control">Friday Class PM</option>

								    </select>		
								</div>
							</div>
							<div class = "modal-footer">
								<button  class = "btn btn-primary" name = "save"><span class = "glyphicon glyphicon-save"></span> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content ">
						<div class = "modal-body">
							<center><label class = "text-danger">Are you sure you want to delete this record?</label></center>
							<br />
							<center><a class = "btn btn-danger remove_id" ><span class = "glyphicon glyphicon-trash"></span> Yes</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No"><span class = "glyphicon glyphicon-remove"></span> No</button></center>
						</div>
					</div>
				</div>
			</div>
			<div class = "modal fade" id = "edit_admin" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				<div class = "modal-dialog" role = "document">
					<div class = "modal-content panel-warning">
						<div class = "modal-header panel-heading">
							<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close"><span aria-hidden = "true">&times;</span></button>
							<h4 class = "modal-title" id = "myModallabel">Edit Calendar</h4>
						</div>
						<div id = "edit_query"></div>
					</div>
				</div>
			</div>
			<div class = "alert alert-info">
			<a href="#">Schedule of :</a>
			<a href="calendar.php">Monday</a>
			<a href="cal_tuesday.php"  style="color:red;">Tuesday</a>
			<a href="cal_wednesday.php">Wednesday</a>
			<a href="cal_thursday.php">Thursday</a>
			<a href="cal_friday.php">Friday</a>
			<a href="home.php" style="float:right;">Go To Home Page</a></div>
			<div class = "well col-lg-12">
				<button type = "button" class = "btn btn-success" data-target = "#myModal" data-toggle = "modal"><span class = "glyphicon glyphicon-plus"></span> Add New</button>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr class = "alert-info">
							<th>Added By</th>
							<th>Date</th>
							<th>Schedule</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$q_admin = $conn->query("SELECT * FROM `calen_tuesday`") or die(mysqli_error());
						while($f_admin = $q_admin->fetch_array()){
					?>	
						<tr>
							<td><?php echo $f_admin['name']?></td>
							<td><?php echo $f_admin['month']."-".$f_admin['day']."-".$f_admin['year']?></td>
							<td><?php echo $f_admin['schedule']?></td>
							<td>
							<a class = "btn btn-danger radmin_id" 	
							name = "<?php echo $f_admin['cal_id']?>" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></a> 
							</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			<br />
			<br />	
			<br />		
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
		<div class = "container-fluid"style="margin-top:15px;">
				<label class = "pull-left">&copy; MuzindaHub <?php echo date("Y");?></label>
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
			$('.radmin_id').click(function(){
				$admin_id = $(this).attr('name');
				$('.remove_id').click(function(){
					window.location = 'delete_cal_s.php?cal_id=' + $admin_id;
				});
			});
			$('.eadmin_id').click(function(){
				$admin_id = $(this).attr('name');
				$('#edit_query').load('load_edit.php?admin_id=' + $admin_id);
			});
		});
	</script>
</html>