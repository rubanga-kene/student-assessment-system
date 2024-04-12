<?php
session_start();
error_reporting(0);

require 'connection.php';
// echo "we here";

if(isset($_POST['addStudent'])){
    $student_name = $_POST['studentName'];
    $student_class = $_POST['studentClass'];
    $student_dob = $_POST['studentDOB'];
    $student_sex = $_POST['studentSex'];
    $parent_contact = $_POST['parentContact'];

    $student_photo = $_FILES['studentPhoto']['name'];
        $dst = "./images/".$student_photo;
        $dst_db = "images/".$student_photo;
    
        move_uploaded_file($_FILES['studentPhoto']['tmp_name'], $dst);

        $sql = "INSERT INTO student_tab(student_name, class, DOB, student_sex, parent_contact, student_photo)
     VALUES('$student_name', '$student_class', '$student_dob', '$student_sex', '$parent_contact', '$dst_db')";
     
    $result = mysqli_query($conn, $sql); 

    if($result){
        echo "Registration Successful";

        $_SESSION['student_reg_message'] = "Student Registered Successfully";
        header('location:adminpage.php');
    
    }
    else{
        echo "Registration Failed";

    }
    
   


    
}

?>