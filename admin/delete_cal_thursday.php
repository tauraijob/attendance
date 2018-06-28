<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `calen_thursday` WHERE `cal_id` = '$_REQUEST[cal_id]'") or die(mysqli_error());
	header('location:cal_thursday.php');
	?>