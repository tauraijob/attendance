<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `late` WHERE `late_id` = '$REQUEST[late_id]'") or die(mysqli_error());
	header('location: record.php');