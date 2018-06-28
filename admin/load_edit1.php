<?php
	require_once 'connect.php';
	$q_edit_student = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$_REQUEST[student_id]'") or die(mysqli_error());
	$f_edit_student = $q_edit_student->fetch_array();
?>
<form method = "POST" action = "edit_student_query.php?student_id=<?php echo $f_edit_student['student_id']?>" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<label>Student ID:</label>
			<input type = "text" name = "student_no" value = "<?php echo $f_edit_student['student_no']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Firstname:</label>
			<input type = "text" name = "firstname" value = "<?php echo $f_edit_student['firstname']?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Middlename:</label>
			<input type = "text" name = "middlename" value = "<?php echo $f_edit_student['middlename']?>" placeholder = "(Optional)" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Lastname:</label>
			<input type = "text" name = "lastname" value = "<?php echo htmlentities($f_edit_student['lastname'])?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Track</label>
			<select name="track" style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" name="track" class = "form-control">
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value=  "<?php echo $f_edit_student['track']?>" class = "form-control"><?php echo $f_edit_student['track']?></option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="FrontEnd" required = "required" class = "form-control">FrontEnd</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Python" required = "required" class = "form-control">Python</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Android Development" required = "required" class = "form-control">Android Development</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="IOS Development" required = "required" class = "form-control">IOS Development</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="PHP" required = "required" class = "form-control">PHP</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="JAVA" required = "required" class = "form-control">JAVA</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="C++" required = "required" class = "form-control">C++</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Word Press" required = "required" class = "form-control">Word Press</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="C#" required = "required" class = "form-control">C#</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Ruby" required = "required" class = "form-control">Ruby</option>
				<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Django" required = "required" class = "form-control">Django</option>
			</select>
		</div>
		<div class = "form-group">
								<label>Schedule:</label><br>
									<select style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" name="schedule" class = "form-group">
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="<?php echo $f_edit_student['schedule'] ?>" required = "required" class = "form-control"><?php echo $f_edit_student['schedule']?></option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Friday AM" required = "required" class = "form-control">Friday AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Friday PM" required = "required" class = "form-control">Friday PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Saturday AM" required = "required" class = "form-control">Saturday AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Saturday PM" required = "required" class = "form-control">Saturday PM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Sunday AM" required = "required" class = "form-control">Sunday AM</option>
									<option style=" padding: .35em .625em .75em; margin: 0 2px; border: 1px solid #c0c0c0;" value="Sunday PM" required = "required" class = "form-control">Sunday PM</option>
								    </select>	
								</div>
		<div class = "form-group">
			<label>Yr&Section</label>
			<input type = "text" name = "section" required = "required" value = "<?php echo $f_edit_student['section']?>" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span>Save Changes</button>
	</div>
</form>	