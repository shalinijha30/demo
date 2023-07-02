
<?php
session_start();
include "db.php";
 if(isset($_POST['login'])){
   $email=$_POST['email'];
   $pass=$_POST['password'];
   $sql = "select * from  `student` where email='$email' and password='$pass'";
   $query_run = mysqli_query($conn,$sql);
   if(mysqli_num_rows($query_run)>0){
     $_SESSION['email']=$email;
     $_SESSION['showlogin']=1;
     
   }
    else{
     echo "<script>alert('Please Enter correct email id and password ');

     </script>";
   }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login form</title>
</head>
<body> 
    
    <table>
    <div class = "container">
        <form method="POST" action="#">
           
        <tr>
                <td><label for= "email">Email </label></td>
                <td><input type= "email" id = "email" name= "email"></label></td>
        
        </tr>
        <tr>
                <td><label for= "pass">Password </label></td>
                <td><input type= "pass" id = "pass" name= "pass"></label></td>
            
        </tr>
        <tr>

                <td><input type= "submit" id = "submit" name= "submit" ></td>
            
        </tr>

        </form>
    </tble>
    </div>
    
</body>
</html>