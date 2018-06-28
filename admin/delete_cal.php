<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `calen` WHERE `cal_id` = '$_REQUEST[cal_id]'") or die(mysqli_error());
	header('location:calendar.php');