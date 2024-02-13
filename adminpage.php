
<?php
    error_reporting(0);
    require 'connection.php';

    session_start();
     // STUDENT REGISTERED SUCCESSFULLY
    if($_SESSION['student_reg_message']){
        $student_reg_message = $_SESSION['student_reg_message'];
        echo "<script type='text/javascript'>
            alert('$student_reg_message');
        </script>";
    }
    unset($_SESSION['student_reg_message']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Page</title>
    <link rel="stylesheet" href="style.css"/>
    <style type="text/css">


    </style>

</head>
<body>
    <header class="hd">
        <img class="logo" src="mah-logo.png" alt="Logo of "/>
        <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
        <a class="logout-btn" href="logout.php">Log out</a>
    </header>
    <nav class="admin-nav" style="background-color:rgb(34, 46, 108);">
        <div class="dashboard">
            <a class="activity-btn-active" href="adminpage.php">Add Student</a>
            <a href="view_all_students.php" >View All Students</a>
            <a href="view_results.php" >View Results</a>
            <a href="add_new_staff.php" >Add Staff</a>
        </div>
        
    </nav>
    <!-- STUDENT REGISTRATION FORM -->
<section class=" activity activity-content-active">
    <form class="student-data-form" action="student_registration.php" method="POST" enctype="multipart/form-data">
        <p class="form-title ">Student registration form</p>
        <div class="form-items">
            <div class="form-particular">
                <label>Student Name</label>
                <input type="text" name="studentName" placeholder="Full Name" required/>
            </div>
            <div class="form-particular">
                <label>Class</label>
                <!-- <input type="text" name="studentClass" placeholder="eg. S.1 " required/> -->
                <select name="studentClass">
                    <option>S.1</option>
                    <option>S.2</option>
                    <option>S.3</option>
                    <option>S.4</option>
                </select>
            </div>
            <div class="form-particular">
                <label>Date of Birth</label>
                <input type="date" name="studentDOB" required/>
            </div>
            <div class="form-particular">
                <label>Sex</label>
                <!-- <input type="text" name="studentSex" placeholder="M or F" required/> -->
                <select name="studentSex">
                    <option>M</option>
                    <option>F</option>
                </select>
            </div>
            <div class="form-particular">
                <label>Parent's Contact</label>
                <input type="text" name="parentContact" required/>
            </div>
            
            <div class="form-particular">
                <label>Student Photo</label>
                <input type="file" accept="image/*" name="studentPhoto" />
            </div>
            
        </div>
        <input class="add-student-btn" type="submit" name="addStudent" value="Add Student"/>

        <!-- <button class="add-student-btn" name="addStudent" >Add Student</button> -->
    </form>
</section>
   
 
   
    <footer style="background-color: rgb(34, 46, 108);">
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2023 By Rubanga Kene Solomon. All rights reserved</p>
    </footer>


</body>
</html>