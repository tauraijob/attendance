<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$name = $_POST['name'];
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		$sche = $_POST['schedule'];
		if($sche=="Friday AM" ||$sche=="Friday PM"){
			$conn->query("INSERT INTO `calen` VALUES('', '$name', '$month', '$day', '$year','$sche')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Calendar Record Friday Class");
					window.location = "calendar.php";
				</script>
			';
		}elseif($sche=="Monday AM" || $sche=="Monday PM"){
			$conn->query("INSERT INTO `calen_monday` VALUES('', '$name', '$month', '$day', '$year','$sche')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Calendar Record Monday Class");
					window.location = "calendar.php";
				</script>
			';

			}elseif($sche=="Tuesday AM" || $sche=="Tuesday PM"){
			$conn->query("INSERT INTO `calen_tuesday` VALUES('', '$name', '$month', '$day', '$year','$sche')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Calendar Record Tuesday Class");
					window.location = "calendar.php";
				</script>
			';	

			}elseif($sche=="Wednesday AM" || $sche=="Wednesday PM"){
			$conn->query("INSERT INTO `calen_wednesday` VALUES('', '$name', '$month', '$day', '$year','$sche')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Calendar Record Wednesday Class");
					window.location = "calendar.php";
				</script>
			';	

		}elseif($sche=="Thursday AM" || $sche=="Thursday PM"){
			$conn->query("INSERT INTO `calen_thursday` VALUES('', '$name', '$month', '$day', '$year','$sche')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Calendar Record $sche Class");
					window.location = "calendar.php";
				</script>
			';	
		}else{
			echo '
				<script type = "text/javascript">
					alert("There is An Error Found, Contact Shazzy, Tau or Alfred to Fix it");
					window.location = "calendar.php";
				</script>
			';
		}		
		}
	