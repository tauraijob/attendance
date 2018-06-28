<form class="button-wraps" method="post" action="checkboxtry.php">
	<input type="submit" id="del_contact" name="del_contact" value="Delete Contact"/>
</form>

<form method="post" action="checkboxtry.php">
<table class="contact-list-table">
	<thead>
			<tr>
				<th>Student Number</th>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Schedule</th>
			</tr>
		</thead>
		<tbody>
			<?php
						require_once 'admin/connect.php';
						
						$check = mysql_query("SELECT * FROM late") or die(mysql_error());
						$count=mysql_num_rows($check);
						if($count > 0)
						{
							while($rows = mysql_fetch_array($check))
							{
								$student_no = $rows['student_no'];
								$student_id = $rows['late_id'];
								$firstname = $rows['student_details'];
								$schedule = $rows['late'];

								
								echo
								"<tr>
									<td ><input type='checkbox' name='check[]' class='check' value='$id'>$student_no</td>
									<td>$firstname</td>
									<td>$student_id</td>
									<td>$schedule</td>
								</tr>";
							}
						}	
						else
							{
								echo
								"<tr>
									<td colspan='6'>Contact Database is empty.</td>
								</tr>";
							}	
							?>
		</tbody>
<?php
	if (isset($_POST['del_contact']) && isset($_POST['check']))
	{
		foreach($_POST['check'] as $del_id)
		{
			$del_id = (int)$del_id;
			$sql = "DELETE FROM late WHERE late_id = $del_id";
			mysql_query($sql);
		}
	}
?>
</table>
</form>