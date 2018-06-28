<?php
//Code Monster Project HLCC 2017
require_once 'admin/connect.php';
if(isset($_POST['search'])){
$student = $_POST['student'];
date_default_timezone_set("Africa/Harare");
$time = date("h:i A",strtotime("+0 HOURS"));
$date = date("M-d-Y");
$q_student = $conn->query("SELECT * FROM `student` WHERE student_no = '$student'") or die(mysqli_error());							
$f_student = $q_student->fetch_array();
$id = $f_student['student_id'];
	if($f_student['student_no']==$student){
		if($f_student['schedule'] == date('l A')){
		if($time <= "08:00 AM"){
				echo"<h1>On Time</h1>";
					$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];;
						echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i A", strtotime($time))." ".$date."</label></h3>";
							$conn->query("INSERT INTO `late` VALUES('','$student','$student_name','On Time','$time','$date','$id')") or die(mysqli_error());
			}elseif
			  ($time == "08:01 AM"
			|| $time == "08:02 AM"
			|| $time == "08:03 AM"
			|| $time == "08:04 AM"
			|| $time == "08:05 AM"
			|| $time == "08:06 AM"
			|| $time == "08:07 AM"
			|| $time == "08:08 AM"
			|| $time == "08:09 AM"
			|| $time == "08:10 AM"
			|| $time == "08:11 AM"
			|| $time == "08:12 AM"
			|| $time == "08:13 AM"
			|| $time == "08:14 AM"
			|| $time == "08:15 AM"){	
				echo"<h1  style='color:red;'>You're Late !</h1>";
					$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];
						echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i A",strtotime($time))." ".$date."</label></h3>";
							$conn->query("INSERT INTO `late` VALUES('','$student','$student_name','Late','$time','$date','$id')") or die(mysqli_error());
			}elseif($time >= "08:16 AM"){
			echo"<h1  style='color:red;'>Sorry You're Now Absent !</h1>";
			$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];	
			echo"<h2  style='color:red;'>You're 15mins Grace Period is Done.</h2>";			
			}
		}elseif($f_student['schedule'] == date('l A')){	
			if($time <= "04:00 PM"){
				echo"<h1>On Time</h1>";
					$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];
						echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i A", strtotime($time))." ".$date."</label></h3>";
							$conn->query("INSERT INTO `late` VALUES('','$student','$student_name','On Time','$time','$date','$id')") or die(mysqli_error());
			}elseif($time == "06:01 PM"
			|| $time == "04:02 PM"
			|| $time == "04:03 PM"
			|| $time == "04:04 PM"
			|| $time == "04:05 PM"
			|| $time == "04:06 PM"
			|| $time == "04:07 PM"
			|| $time == "04:08 PM"
			|| $time == "04:09 PM"
			|| $time == "04:10 PM"
			|| $time == "04:11 PM"
			|| $time == "04:12 PM"
			|| $time == "04:13 PM"
			|| $time == "04:14 PM"
			|| $time == "04:15 PM"){
				echo"<h1  style='color:red;'>You're Late !</h1>";
					$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];
						echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i A",strtotime($time))." ".$date."</label></h3>";
							$conn->query("INSERT INTO `late` VALUES('','$student','$student_name','Late','$time','$date','$id')") or die(mysqli_error());
		}elseif($time>="04:16 PM"){
			echo"<h1  style='color:red;'>Sorry You're Now Absent !".$date."</h1>";
			echo"<h2  style='color:red;'>You're 15mins Grace Period is Done.</h2>";
		}
		}elseif($f_student['schedule']== date('l A')){
			if($time <= "01:00 PM"){
				echo"<h1>On Time</h1>";
					$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];;
						echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i A", strtotime($time))." ".$date."</label></h3>";
							$conn->query("INSERT INTO `late` VALUES('','$student','$student_name','On Time','$time','$date','$id')") or die(mysqli_error());
			}elseif
			 ($time=="01:01 PM"
			||$time=="01:02 PM"
			||$time=="01:03 PM"
			||$time=="01:04 PM"
			||$time=="01:05 PM"
			||$time=="01:06 PM"
			||$time=="01:07 PM"
			||$time=="01:08 PM"
			||$time=="01:09 PM"
			||$time=="01:10 PM"
			||$time=="01:11 PM"
			||$time=="01:12 PM"
			||$time=="01:13 PM"
			||$time=="01:14 PM"
			||$time=="01:15 PM"){	
				echo"<h1  style='color:red;'>You're Late !</h1>";
					$student_name = $f_student['firstname']." ".$f_student['lastname']." of ".$f_student['course']." ".$f_student['schedule'];;
						echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i A",strtotime($time))." ".$date."</label></h3>";
								$conn->query("INSERT INTO `late` VALUES('','$student','$student_name','Late','$time','$date','$id')") or die(mysqli_error());
			}elseif
			 ($time >= "01:16 PM"){
				echo"<h1  style='color:red;'>Sorry You're Now Absent !</h1>";
				echo"<h2  style='color:red;'>You're 15mins Grace Period is Done.</h2>";							
				}
			}else{
						echo
						"<h2 style='color:red;'>
							<span class = 'glyphicon glyphicon-calendar'></span></h2>
								<div style='color:red;'><h3>You Enter A Wrong Schedule !</h3></div>";
		}
		}else{
						echo"
						<h2 style='color:red;'>
							<span class = 'glyphicon glyphicon-warning-sign'></span></h2>
								<div style='color:red;'><h3>Invalid Barcode ID !</h3></div>";
	}
	}
?>