<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `late` WHERE `late_id` = '$_REQUEST[late_id]'") or die(mysqli_error());
	header('location:frontend.php');