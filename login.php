<!-- THIS CODE IS FOR VERIFYING ADMIN LOGIN DETAILS -->
<?php
error_reporting(0);
error_reporting(0);
session_start();

require 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
   //  FOR ADMIN
    $sql = "select * from admin_tab where username = '".$name."' AND admin_password = '".$pass."' ";
    
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_array($result);

     if($row){
        $_SESSION['username'] = $name;
        $_SESSION['admin_password'] = $pass;
        header("location:adminpage.php");
     }

     else{
         
        $_SESSION['adminloginMessage'] = "Username or Password donot match";;
        header("location:index.php");
        
     }
}

?>