 
 <html>
<head>
    <h1 align="center"><b> </b></h1>
</head>
<body >
<?php
$host="localhost";
$username="root";
$password="Bobba@13";
$dbname="projecthub";
$conn=mysqli_connect($host,$username,$password,$dbname);
$a = $_POST['user'];
$query = "select * from srp where project_title='$a'";
echo '<center><table border="1" cellspacing="0" noresize cellpadding="10" style="width:50%; height:50% ;  text-align=center ;"> 
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
</tr>   ';
if ($result=mysqli_query($conn,$query)){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row['project_id']."</td><td>".$row['year']."</td><td>".$row['project_type']."</td><td>".$row['project_title']."</td><td width=60%>".$row['project_description']."</td><td>".$row['project_members']."</td><td>".$row['email_id']."</td><td>".$row['project_guide']."</td><td>".$row['guide_mail']."</td></tr>";
    }
    $result->free();
} 

?>
</body>
</html>