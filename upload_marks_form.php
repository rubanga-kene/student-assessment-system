<?php
    error_reporting(0);
    require 'connection.php';
   
   session_start();


        // MARKS NOT UPLOADED SUCCESSFULLY
    if($_SESSION['marks_not_upload']){
        $marks_not_upload = $_SESSION['marks_not_upload'];
        echo "<script type='text/javascript'>
        alert('$marks_not_upload');
    </script>";

    }
    unset($_SESSION['marks_not_upload']);


    // CAPTURING THE STUDENT CLICKED ON
    if($_GET['student_id']){
        $student_id = $_GET['student_id'];
        $sql_student = "SELECT * FROM student_tab WHERE student_id='$student_id' ";
        $result_student = mysqli_query($conn, $sql_student);
        $student =  $result_student->fetch_assoc();

        // Checking for existing record
        $check_query = "SELECT * FROM result WHERE student_id='$student_id' ";
        $result_existing_record = $conn->query($check_query);
        if ($result_existing_record ->num_rows >0) {
             echo "Already exist";
             $_SESSION['already_exist'] = "Student Marks Already Uploaded";
            header('location:view_all_students.php');
         } 
    }

  

     // COLLECTING DATA TO ENTER IN THE DATABASE
    if(isset($_POST['uploadBtn'])){
        $s_id = $_POST['s_id'];

        // Mathematics
        $math_f = $_POST['math_f'];
        $math_eoy = $_POST['math_eoy'];
        $math_t = $_POST['math_t'];

          // English
        $eng_f = $_POST['eng_f'];
        $eng_eoy = $_POST['eng_eoy'];
        $eng_t = $_POST['eng_t'];

            // History
        $his_f = $_POST['his_f'];
        $his_eoy = $_POST['his_eoy'];
        $his_t = $_POST['his_t'];

          // Geography
        $geo_f = $_POST['geo_f'];
        $geo_eoy = $_POST['geo_eoy'];
        $geo_t = $_POST['geo_t'];

         // Physics
        $phy_f = $_POST['phy_f'];
        $phy_eoy = $_POST['phy_eoy'];
        $phy_t = $_POST['phy_t'];

          // Chemistry
        $chem_f = $_POST['chem_f'];
        $chem_eoy = $_POST['chem_eoy'];
        $chem_t = $_POST['chem_t'];

         // Biology
        $bio_f = $_POST['bio_f'];
        $bio_eoy = $_POST['bio_eoy'];
        $bio_t = $_POST['bio_t'];

        // Entrepreneurship
        $ent_f = $_POST['ent_f'];
        $ent_eoy = $_POST['ent_eoy'];
        $ent_t = $_POST['ent_t'];

         // Computer Studies
        $cst_f = $_POST['cst_f'];
        $cst_eoy = $_POST['cst_eoy'];
        $cst_t = $_POST['cst_t'];

         // Physical Eductaion
        $pe_f = $_POST['pe_f'];
        $pe_eoy = $_POST['pe_eoy'];
        $pe_t = $_POST['pe_t'];


        $sql_r = "INSERT INTO result(student_id, math_f, math_eoy, math_t, eng_f, eng_eoy, eng_t, his_f, his_eoy, his_t, geo_f, geo_eoy, geo_t, phy_f, phy_eoy, phy_t, chem_f, chem_eoy, chem_t, bio_f, bio_eoy, bio_t, ent_f, ent_eoy, ent_t, cst_f, cst_eoy, cst_t, pe_f, pe_eoy, pe_t) VALUES('$s_id', '$math_f', '$math_eoy', '$math_t', '$eng_f', '$eng_eoy', '$eng_t', '$his_f', '$his_eoy', '$his_t', '$geo_f', '$geo_eoy', '$geo_t', '$phy_f', '$phy_eoy', '$phy_t', '$chem_f', '$chem_eoy', '$chem_t', '$bio_f', '$bio_eoy', '$bio_t', '$ent_f', '$ent_eoy', '$ent_t', '$cst_f', '$cst_eoy', '$cst_t', '$pe_f', '$pe_eoy', '$pe_t' )";

        $result_r = mysqli_query($conn, $sql_r);

        if($result_r){
            $_SESSION['marks_upload'] = "Marks Uploaded Successfully";
            header('location:view_all_students.php');
        }
        else{
            $_SESSION['marks_not_upload'] = "Something went Wrong!\n Make sure all fields are filled";
            header('location:upload_marks_form.php');
        }
    }

  


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="style.css" rel="stylesheet"/>
    <title>Upload marks form</title>
    <style type="text/css">

    </style>
 
</head>
<body>
     <header class="hd">
        <img class="logo" src="mah-logo.png" alt="Logo of Busitema university"/>
        <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
        <a class="logout-btn" href="view_all_students.php">Go Back</a>
    </header>
    <div class="upload-header">
        <p>UPLOAD STUDENT'S MARKS</p>
    </div>
    <div class="marks-form">
        <form action="#" method="POST">
            <div class="student-info"> 
                <input class="student-detail" type="text" name="s_id" value="<?php echo "{$student['student_id']}"?>" readonly >
                <input class="student-detail std-name" type="text" name="s_name" value="<?php echo "{$student['student_name']}" ?>" readonly>
                <input class="student-detail" type="text" name="s_class" value="<?php echo "{$student['class']}" ?>" readonly>
                <!-- <input type="text" name="subject_name" readonly> -->

            </div>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>Formative Assessment (20%)</th>
                    <th>EOY Summative Assessment (80%)</th>
                    <th>Teacher's initial</th>
                </tr>
              
                <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Mathematics" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="math_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="math_eoy"></td>
                    <td><input class="teacher" type="text" name="math_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="English" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="eng_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="eng_eoy"></td>
                    <td><input class="teacher" type="text" name="eng_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="History" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="his_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="his_eoy"></td>
                    <td><input class="teacher" type="text" name="his_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Geography" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="geo_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="geo_eoy"></td>
                    <td><input class="teacher" type="text" name="geo_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Physics" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="phy_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="phy_eoy"></td>
                    <td><input class="teacher" type="text" name="phy_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Chemistry" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="chem_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="chem_eoy"></td>
                    <td><input class="teacher" type="text" name="chem_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Biology" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="bio_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="bio_eoy"></td>
                    <td><input class="teacher" type="text" name="bio_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Entrepreneurship" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="ent_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="ent_eoy"></td>
                    <td><input class="teacher" type="text" name="ent_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Computer Studies" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="cst_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="cst_eoy"></td>
                    <td><input class="teacher" type="text" name="cst_t"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Physical Education" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="pe_f"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="pe_eoy"></td>
                    <td><input class="teacher" type="text" name="pe_t"></td>
                </tr>
                
            </table>
            <input class="submit-btn" type="submit" name="uploadBtn" value="Submit Marks" >
           
        </form>
    </div>
   <footer>
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2023 By Rubanga Kene Solomon. All rights reserved</p>
    </footer>    
</body>
</html>