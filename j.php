<html>
<body>
<table cellpadding='8' align='center' border='1'>
<tr>
    <th>Project_Id</th>
    <th>Year</th>
    <th>Project_Type</th>
    <th>Project_Title</th>
	<th>Project_Description</th>
	<th>Project_Members</th>
	<th>Email_Id</th>
	<th>Project_Guide</th>
	<th>Guide_Mail</th>
</tr>    
<?php
$host="localhost";
$username="root";
$password="Bobba@13";
$dbname="projecthub";
$conn=mysqli_connect($host,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql="select * from srp where project_title='$a'";
  $result=$conn->query($sql);
  if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
          echo "<tr><td>".$row['project_title']."</td><td>".$row['project_description']."</td><td>".$row['project_members']."</td><td>".$row['email_id']."</td><td>".$row['project_guide']."</td><td>".$row['guide_mail']."</td></tr>";
      }
        echo "</table>";
    }
$conn->close();
?>
</table>
</body>
</html>
