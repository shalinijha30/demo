<?php 
 include("db.php");
global $valid_name,$valid_email,$valid_phone;
if (isset($_POST['save'])) {  
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $email =$_POST['email']; 

    if(empty($_POST['name'])) {
        $name_error = "Enter your name";
    }else{
        $valid_name=$name;
    }
        
    if(empty($_POST['phone'])) {
       $phone_error = "Enter your phone";
    } else{
        $valid_phone=$phone;
    }
    if(empty($_POST['email'])) {
       $email_error = "Enter your Email";
   }else{
    $valid_email=$email;
   }
   

echo $name;
echo $phone;
echo $email;
if($valid_name!="" && $valid_email!="" && $valid_phone!=""){
    $sql= mysqli_query($conn,"INSERT INTO student(name,phone,email)VALUES('$name','$phone','$email')")or die(mysqli_error($con));
    header("location:disply.php");
}

}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >

    <center>
        
    <table >
        <form  method ="POST" action="#">
            <tr>
                <td> <label for="name"> Name</label></td>
                <td><input type="name" id="name" name="name"></td>
                <span><?php if (isset($name_error)) echo $name_error;?></span>
            </tr>
            <tr>
                <td> <label for="phone">Phone no.</label></td>
                <td><input type="phone" id="phone" name="phone"></td>
                <span><?php  if(isset($phone_error)) echo $phone_error;?></span>
           
            </tr>
            <tr>
                <td> <label for="email">Email</label></td>
                <td><input type="email" id="email" name="email"></td>
                <span><?php if(isset($email_error)) echo $email_error; ?></span>
           
            </tr>
           <tr> <td><input type="submit" name="save" value="submit" value ="send data"></td> </tr>
        </form>
</table>
</center>
</body>
</html>