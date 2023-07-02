<?php
include("db.php");
error_reporting(0);
$name=$_GET['name'];
$phone=$_GET['phone'];
$email=$_GET['email'];
?>
<table width="40%" align="center" border="1">
    <tr>
        <th>Name</th>
        <th>phone</th>
        <th>Email</th>
        <th>Action</th>
        
    </tr>
<?php
include 'db.php';
$sql="SELECT * FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
    
    echo 
    '<tr>
    <td style="text-align:center;">'.$row["name"].'</td>
    <td style="text-align:center;">'.$row["phone"].'</td>
    <td style="text-align:center;">'.$row["email"].'</td>
     </tr>';
  }  

  } else {
  echo "0 results";
  }
  $conn->close();
?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>


