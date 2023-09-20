<!DOCTYPE html>
<html>

<head>
	<title>SRP form collector</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "Bobba@13", "projecthub");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$project_id = $_POST['project_id'];
		$year = $_POST['year'];
		$project_type = $_POST['project_type'];
		$project_title = $_POST['project_title'];
		$project_description = $_POST['project_description'];
		$project_members = $_POST['project_members'];
		$email_id = $_POST['email_id'];
		$project_guide = $_POST['project_guide'];
		$guide_mail = $_POST['guide_mail'];


		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO srp VALUES ('$project_id',
			'$year','$project_type','$project_title','$project_description','$project_members',
			'$email_id','$project_guide','$guide_mail')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$project_id\n $year\n "
				. "$project_type\n $project_title\n $project_description\n $project_members\n $email_id\n $project_guide\n $guide_mail ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
