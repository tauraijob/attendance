	<?php
				require_once 'connect.php';
				if(isset($_POST['delete'])){
				$del=$_POST['del_id'];	
				$conn->query("DELETE FROM `late` WHERE `late_id` = '$del'") or die(mysqli_error());
				header('location:frontend.php');
				}
				?>