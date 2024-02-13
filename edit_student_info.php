<?php
    error_reporting(0);
	require 'connection.php';
   
  	 session_start();

	if($_GET['student_id']){
        $student_id = $_GET['student_id'];
        $sql_student = "SELECT * FROM student_tab WHERE student_id='$student_id' ";
        $result_student = mysqli_query($conn, $sql_student);
        $student =  $result_student->fetch_assoc();
    }

    if(isset($_POST['editStudent'])){
    $std_id = $_POST['std_id'];
    $student_name = $_POST['studentName'];
    $student_class = $_POST['studentClass'];
    $student_dob = $_POST['studentDOB'];
    $student_sex = $_POST['studentSex'];
    $parent_contact = $_POST['parentContact'];
    $student_photo = $_FILES['studentPhoto']['name'];
    $dst = "./images/".$student_photo;
    $dst_db = "images/".$student_photo;

    move_uploaded_file($_FILES['studentPhoto']['tmp_name'], $dst);

    if ($student_photo) {
    	$sql = "UPDATE student_tab SET student_name='$student_name', class='$student_class', DOB='$student_dob', student_sex='$student_sex', parent_contact='$parent_contact', student_photo='$dst_db' WHERE student_id='$std_id' ";
    }
    else{
    	$sql = "UPDATE student_tab SET student_name='$student_name', class='$student_class', DOB='$student_dob', student_sex='$student_sex', parent_contact='$parent_contact' WHERE student_id='$std_id' ";
    }

    
    $result = mysqli_query($conn, $sql); 

    if($result){
        echo "Update of student info Successful";

        $_SESSION['student_info_update'] = "Student Information Edited Successfully";
        header('location:view_all_students.php');
    
    }
    else{
        echo "Registration Failed";

    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit student info</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .class-sex{
            display: flex;
            gap: 2rem;
        }

        .class-sex select{
            width: 7rem;
        }
    </style>
</head>
<body>
	<header class="hd">
        <img class="logo" src="mah-logo.png" alt="Logo of Busitema university"/>
        <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
        <a class="logout-btn" href="view_all_students.php">Go Back</a>
    </header>
    <div class="upload-header">
        <p>EDIT STUDENT'S PERSONAL DETAILS</p>
    </div>
     <form class="student-data-form" action="#" method="POST" enctype="multipart/form-data">
        <p class="form-title ">Student registration form</p>
        <input type="text" name="std_id" value="<?php echo "{$student['student_id']}"?>" hidden>
        <div class="form-items">
            <div class="form-particular">
                <label>Student Name</label>
                <input type="text" name="studentName" placeholder="Full Name" value="<?php echo "{$student['student_name']}"?>" required/>
            </div>
           
            <div class="form-particular">
                <label>Date of Birth</label>
                <input type="date" name="studentDOB" value="<?php echo "{$student['DOB']}"?>" required/>
            </div>

            <div class="class-sex">
            <div class="form-particular">
                <label>Class</label>
                <select name="studentClass">
                    <option>S.1</option>
                    <option>S.2</option>
                    <option>S.3</option>
                    <option>S.4</option>
                </select>
            </div>

            <div class="form-particular">
                <label>Sex</label>
                <select name="studentSex">
                    <option>M</option>
                    <option>F</option>
                </select>
            </div>
            </div>

          
            <div class="form-particular">
                <label>Parent's Contact</label>
                <input type="text" name="parentContact" value="<?php echo "{$student['parent_contact']}"?>" required/>
            </div>

            <div class="form-particular">
                <label>Old Photo</label>
                <img width="130" height="130" src="<?php echo "{$student['student_photo']}"?>"/>
            </div>
            
            <div class="form-particular">
                <label>New Photo</label>
                <input type="file" name="studentPhoto"  />
            </div>
            
        </div>
        <input class="add-student-btn" type="submit" name="editStudent" value="Submit Updated Student Info"/>

    </form>

     <footer>
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2023 By Isaac, Josephine and Solomon</p>
    </footer> 
</body>
</html>