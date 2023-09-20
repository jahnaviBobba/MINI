<html>
<body>
<table cellpadding='8' align='left' border='1'>
<tr>
    <th>Project_Title</th>	
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
  $sql="select project_title from srp";
  $result=$conn->query($sql);
  if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
          echo "<tr><td>".$row['project_title']."</td></tr>";
      }
        echo "</table>";
    }
$conn->close();
?>
</table>
</body>
</html>
