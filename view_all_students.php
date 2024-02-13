<?php

	require 'connection.php';
	session_start();

	      // ALREADY MARKS UPLOADED 
    if($_SESSION['already_exist']){
        $already_exist = $_SESSION['already_exist'];
        echo "<script type='text/javascript'>
        alert('$already_exist');
    </script>";

    }
    unset($_SESSION['already_exist']);

             // MARKS UPLOADED SUCCESSFULLY
             if($_SESSION['marks_upload']){
                $marks_upload = $_SESSION['marks_upload'];
                echo "<script type='text/javascript'>
                alert('$marks_upload');
            </script>";
        
            }
            unset($_SESSION['marks_upload']);


         // STUDENT INFORMATION UPDATED SUCCESSFULLY
         if($_SESSION['student_info_update']){
            $student_info_update = $_SESSION['student_info_update'];
            echo "<script type='text/javascript'>
                alert('$student_info_update');
            </script>";
        }
        unset($_SESSION['student_info_update']);

     // STUDENT  DELETED SUCCESSFULLY
     if($_SESSION['student_deleted']){
        $student_deleted = $_SESSION['student_deleted'];
        echo "<script type='text/javascript'>
            alert('$student_deleted');
        </script>";
    }
    unset($_SESSION['student_deleted']);

	//////////////////////////////////  FOR STUDENT LIST   /////////////////////////////////////////////

    // RETRIEVING DATA FROM STUDENTS TABLE FOR S.1
    $sql_s1 = "SELECT student_id, student_name, class, student_sex FROM student_tab WHERE class='S.1' ";
    $result_s1 = mysqli_query($conn, $sql_s1);


    // RETRIEVING DATA FROM STUDENTS TABLE FOR S.2
    $sql_s2 = "SELECT student_id, student_name, class, student_sex FROM student_tab WHERE class='S.2' ";
    $result_s2 = mysqli_query($conn, $sql_s2);

    // RETRIEVING DATA FROM STUDENTS TABLE FOR S.3
    $sql_s3 = "SELECT student_id, student_name, class, student_sex FROM student_tab WHERE class='S.3' ";
    $result_s3 = mysqli_query($conn, $sql_s3);

    // RETRIEVING DATA FROM STUDENTS TABLE FOR S.4
    $sql_s4 = "SELECT student_id, student_name, class, student_sex FROM student_tab WHERE class='S.4' ";
    $result_s4 = mysqli_query($conn, $sql_s4);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View All students</title>
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
        <img class="logo" src="mah-logo.png" alt="Logo of "/>
        <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
        <a class="logout-btn" href="logout.php">Log out</a>
    </header>
    <nav class="admin-nav">
        <div class="dashboard">
            <a href="adminpage.php">Add Student</a>
            <a class="activity-btn-active" href="view_all_students.php" >View All Students</a>
            <a href="view_results.php" >View Results</a>
            <a href="add_new_staff.php" >Add Staff</a>
        </div>
        
    </nav>

	 <!-- ALL STUDENTS TABLE -->
    <section class=" activity activity-content-active">
        <header class="all-classes">
            <a class="class-btn class-tab-1 class-btn-active" data-tab="1" href="">S.1</a>
            <a class="class-btn class-tab-2" data-tab="2" href="">S.2</a>
            <a class="class-btn class-tab-3" data-tab="3" href="">S.3</a>
            <a class="class-btn class-tab-4" data-tab="4" href="">S.4</a>
        </header>
        <div class="class class-content-1 class-content-active">
            <table class="students-table">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Sex</th>
                    <th>Upload Marks</th>
                    <th>Edit Info </th>
                    <th>Delete Student</th>
        
                </tr>
                <?php
                    while($s1_student = $result_s1 ->fetch_assoc())
            {

                ?>
                  <tr>
                    <td> <?php echo "{$s1_student['student_id']}" ?></td>
                    <td><?php echo "{$s1_student['student_name']}" ?></td>
                    <td><?php echo "{$s1_student['class']}" ?></td>
                    <td><?php echo "{$s1_student['student_sex']}" ?></td>
                    <td><?php echo "<a href='upload_marks_form.php?student_id={$s1_student['student_id']}' class='upload-btn' >Upload Marks</a>"; ?></td>
                    <td><?php echo "<a href='edit_student_info.php?student_id={$s1_student['student_id']}' class='edit-btn' >Edit info</a>"; ?></td>
                    <td><?php echo "<a onClick=\" javascript:return confirm('You are about to delete a Student!');\" class='del-student-btn' href='delete_student.php?student_id={$s1_student['student_id']}'>Delete Student</a>" ?></td>
                  </tr>
                  <?php 
                    }
                  ?>
            </table>
        </div>
        <div class="class class-content-2">
            <table class="students-table">
                <tr>
                    <th>Student No</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Sex</th>
                    <th>Upload Marks</th>
                    <th>Edit Info </th>
                    <th>Delete Student</th>
        
                </tr>
                     <?php
                    while($s2_student = $result_s2 ->fetch_assoc())
            {

                ?>
                  <tr>
                    <td> <?php echo "{$s2_student['student_id']}" ?></td>
                    <td><?php echo "{$s2_student['student_name']}" ?></td>
                    <td><?php echo "{$s2_student['class']}" ?></td>
                    <td><?php echo "{$s2_student['student_sex']}" ?></td>
                    <td><?php echo "<a href='upload_marks_form.php?student_id={$s2_student['student_id']}' class='upload-btn' >Upload Marks</a>"; ?></td>
                    <td><?php echo "<a href='edit_student_info.php?student_id={$s2_student['student_id']}' class='edit-btn' >Edit info</a>"; ?></td>
                    <td><?php echo "<a onClick=\" javascript:return confirm('You are about to delete a Student!');\" class='del-student-btn' href='delete_student.php?student_id={$s2_student['student_id']}'>Delete Student</a>" ?></td>
                  </tr>
                  <?php 
                    }
                  ?>
            </table>
        </div>
        <div class="class class-content-3">
            <table class="students-table">
                <tr>
                    <th>Student No</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Sex</th>
                    <th>Upload Marks</th>
                    <th>Edit Info </th>
                    <th>Delete Student</th>
        
                </tr>
                    <?php
                    while($s3_student = $result_s3 ->fetch_assoc())
            {

                ?>
                  <tr>
                    <td><?php echo "{$s3_student['student_id']}" ?></td>
                    <td><?php echo "{$s3_student['student_name']}" ?></td>
                    <td><?php echo "{$s3_student['class']}" ?></td>
                    <td><?php echo "{$s3_student['student_sex']}" ?></td>
                    <td><?php echo "<a href='upload_marks_form.php?student_id={$s3_student['student_id']}' class='upload-btn' >Upload Marks</a>"; ?></td>
                    <td><?php echo "<a href='edit_student_info.php?student_id={$s3_student['student_id']}' class='edit-btn' >Edit info</a>"; ?></td>
                    <td><?php echo "<a onClick=\" javascript:return confirm('You are about to delete a Student!');\" class='del-student-btn' href='delete_student.php?student_id={$s3_student['student_id']}'>Delete Student</a>" ?></td>
                  </tr>
                  <?php 
                    }
                  ?>
            </table>
        </div>
        <div class="class class-content-4">
            <table class="students-table">
                <tr>
                    <th>Student No</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Sex</th>
                    <th>Upload Marks</th>
                    <th>Edit Info </th>
                    <th>Delete Student</th>
        
                </tr>
                    <?php
                    while($s4_student = $result_s4 ->fetch_assoc())
            {

                ?>
                  <tr>
                    <td><?php echo "{$s4_student['student_id']}" ?></td>
                    <td><?php echo "{$s4_student['student_name']}" ?></td>
                    <td><?php echo "{$s4_student['class']}" ?></td>
                    <td><?php echo "{$s4_student['student_sex']}" ?></td>
                    <td><?php echo "<a href='upload_marks_form.php?student_id={$s4_student['student_id']}' class='upload-btn' >Upload Marks</a>"; ?></td>
                    <td><?php echo "<a href='edit_student_info.php?student_id={$s4_student['student_id']}' class='edit-btn' >Edit info</a>"; ?></td>
                    <td><?php echo "<a onClick=\" javascript:return confirm('You are about to delete a Student!');\" class='del-student-btn' href='delete_student.php?student_id={$s4_student['student_id']}'>Delete Student</a>" ?></td>
                  </tr>
                  <?php 
                    }
                  ?>
            </table>
        </div>
        
    </section>

      <footer>
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2023 By Rubanga Kene Solomon. All rights reserved</p>
    </footer>

    <script>
    	        //  CLASS TABS FOR STUDENTS LIST
        const classTabs = document.querySelectorAll('.class-btn');
        const classTabBtns = document.querySelector('.all-classes');
        const classes = document.querySelectorAll('.class');

        classTabBtns.addEventListener('click', function(e){ 
            e.preventDefault();
            const clicked = e.target.closest('.class-btn');
            if(!clicked) return;
            // Remove active
            classTabs.forEach(t=>t.classList.remove('class-btn-active'))
            classes.forEach(a=>a.classList.remove('class-content-active'))
            // Activate tab 
            clicked.classList.add('class-btn-active')

            // Active area content
            document.querySelector(`.class-content-${clicked.dataset.tab}`).classList.add('class-content-active')


        
    })
    </script>

</body>
</html>