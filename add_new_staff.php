
<?php
error_reporting(0);
require 'connection.php';
session_start();

             //  STAFF ADDED SUCCESSFULLY 
             if($_SESSION['staff_added']){
                $staff_added = $_SESSION['staff_added'];
                echo "<script type='text/javascript'>
                alert('$staff_added');
            </script>";
        
            }
            unset($_SESSION['staff_added']);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Staff</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
         .admin-nav{
            background-color: rgb(34, 46, 108);

            
        }

        .dashboard a{
            color: rgba(255, 255, 255, 0.785);
            border: 0.5px solid rgb(211, 51, 77);
            font-size: 1rem;
            padding: 4px 6px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease-in;
    
        }
    </style>
</head>
<body>
	 <header class="hd">
        <img class="logo" src="mah-logo.png" alt="Logo of Busitema university"/>
        <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
        <a class="logout-btn" href="logout.php">Log out</a>
    </header>
    <nav class="admin-nav">
        <div class="dashboard">
            <a href="adminpage.php">Add Student</a>
            <a href="view_all_students.php" >View All Students</a>
            <a href="view_results.php" >View Results</a>
            <a class="activity-btn-active" href="add_new_staff.php" >Add Staff</a>
        </div>
        
    </nav>

	 <!-- ADD STAFF FORM -->
    <section class=" activity activity-content-active">
        <form class="student-data-form" action="add_staff.php" method="POST" enctype="multipart/form-data">
            <p class="form-title ">Add Staff</p>
            <div class="form-items">
                <div class="form-particular">
                    <label>Staff Name</label>
                    <input type="text" name="staffName" required/>
                </div>
                <div class="form-particular">
                    <label>Staff ID</label>
                    <input type="text" name="" required/>
                </div>
                <div class="form-particular">
                    <label>Phone Number</label>
                    <input type="text" name="phoneNo" required/>
                </div>
                
                <div class="form-particular">
                    <label>Email</label>
                    <input type="email" name="staffEmail" required/>
                </div>
                <div class="form-particular">
                    <label>Username</label>
                    <input type="text" name="username" required/>
                </div>
                <div class="form-particular">
                    <label>Password</label>
                    <input type="password" name="password" required/>
                </div>
                
            </div>
        <input class="add-student-btn" type="submit" name="addStaff" value="Add Staff"/>
            <!-- <button class="add-student-btn">Add Staff</button> -->
        </form>
    </section>
    <footer>
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2024 Bukenya Simon. All rights reserved</p>
    </footer>
</body>
</html>