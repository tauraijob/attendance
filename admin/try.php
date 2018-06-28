<?php
	require_once 'connect.php';
?>
				<table id = "table" class = "table table-bordered">
					<thead class = "alert-info">
						<tr>
							<th>Student ID</th>
							<th>Firstname</th>
							<th>Middlename</th>
							<th>Lastname</th>
							<th>Track</th>
							<th>Schedule</th>
							<th>Section</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<form method="GET">
						<?php
							$q_student = $conn->query("SELECT * FROM `student`") or die(mysqli_error());
							while($f_student = $q_student->fetch_array()){
						?>
						<tr>
							<td><?php echo $f_student['student_no']?></td>							
							<td><?php echo $f_student['firstname']?></td>
							<td><?php echo $f_student['middlename']?></td>
							<td><?php echo $f_student['lastname']?></td>
							<td><?php echo $f_student['track']?></td>
							<td><?php echo $f_student['schedule']?></td>
							<td><?php echo $f_student['section']?></td>
							<td><input type="button" name="delete" value="Delete" ></td>
							
							<?php
if(isset($_GET['delete']))	{					
	echo"<script>alert('Scan The Admin Barcode : <input type='text' name='pass'/>');";
$conn->query("DELETE FROM `student` WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());

}

?>
						</tr>
						<?php
							}
						?>
						</form>
					</tbody>
				</table>