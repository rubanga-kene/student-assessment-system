 <?php
// error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$db = "students_results_db";

$conn = mysqli_connect($host, $username, $password, $db);

if($conn === false){
    die("connection error");
}

?>