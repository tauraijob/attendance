
	<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$student_no = $_POST['student_no'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$track = $_POST['track'];
		$schedule = $_POST['schedule'];
		$section = $_POST['section'];
		$q_checkadmin = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student_no'") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){
			echo '
				<script type = "text/javascript">
					alert("Barcode is already taken");
					window.location = "student.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `student` VALUES('', '$student_no','$firstname', 
		'$middlename', '$lastname', '$track', '$schedule','$section')") or die(mysqli_error());
						echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "student.php";
				</script>
			';
	}		
	}