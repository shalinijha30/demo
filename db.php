<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname ='form';
$conn =mysqli_connect($host,$user,$pass,$dbname);
if (!$conn) {
   echo  die("sorry we failed to connect:".mysqli_connect_error($conn));

}
  ?>
