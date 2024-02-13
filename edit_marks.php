<?php
  error_reporting(0);
	 require 'connection.php';
   
  	 session_start();



  	 // CAPTURING STUDENT CLICKED
  	 if($_GET['student_id']){
        $student_id = $_GET['student_id'];
        $sql_student = "SELECT * FROM result JOIN student_tab ON result.student_id = student_tab.student_id WHERE result.student_id='$student_id' ";
        $result_student = mysqli_query($conn, $sql_student);
        $student =  $result_student->fetch_assoc();
    }


  	 if(isset($_POST['updateMarks'])){
        $s_id = $_POST['s_id'];
        $s_name = $_POST['s_name'];
        $s_class = $_POST['s_class'];

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


        $sql_edit = "UPDATE  result SET  math_f='$math_f', math_eoy='$math_eoy', math_t='$math_t', eng_f='$eng_f', eng_eoy='$eng_eoy', eng_t='$eng_t', his_f='$his_f', his_eoy='$his_eoy', his_t='$his_t', geo_f='$geo_f', geo_eoy='$geo_eoy', geo_t='$geo_t', phy_f='$phy_f', phy_eoy='$phy_eoy', phy_t='$phy_t', chem_f='$chem_f', chem_eoy='$chem_eoy', chem_t='$chem_t', bio_f='$bio_f', bio_eoy='$bio_eoy', bio_t='$bio_t', ent_f='$ent_f', ent_eoy='$ent_eoy', ent_t='$ent_t', cst_f='$cst_f',  cst_eoy='$cst_eoy', cst_t='$cst_t', pe_f='$pe_f', pe_eoy='$pe_eoy', pe_t='$pe_t' WHERE student_id='$s_id' ";

        $result_edit = mysqli_query($conn, $sql_edit);

        if($result_edit){
            $_SESSION['marks_updated'] = "Marks Updated Successfully";
            header('location:view_results.php');
        }
        else{
            echo "Something is not right";
        }
    }



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Student  marks</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	     <header class="hd">
        <img class="logo" src="mah-logo.png" alt="Logo of Busitema university"/>
        <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
        <a class="logout-btn" href="view_results.php">Go Back</a>
    </header>
    <div class="upload-header">
        <p>EDIT STUDENT'S MARKS</p>
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
                    <td><input class="mark" type="number" max="20" min="0" name="math_f" value="<?php echo "{$student['math_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="math_eoy" value="<?php echo "{$student['math_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="math_t" value="<?php echo "{$student['math_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="English" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="eng_f" value="<?php echo "{$student['eng_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="eng_eoy" value="<?php echo "{$student['eng_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="eng_t" value="<?php echo "{$student['eng_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="History" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="his_f" value="<?php echo "{$student['his_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="his_eoy" value="<?php echo "{$student['his_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="his_t" value="<?php echo "{$student['his_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Geography" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="geo_f" value="<?php echo "{$student['geo_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="geo_eoy" value="<?php echo "{$student['geo_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="geo_t" value="<?php echo "{$student['geo_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Physics" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="phy_f" value="<?php echo "{$student['phy_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="phy_eoy" value="<?php echo "{$student['phy_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="phy_t" value="<?php echo "{$student['phy_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Chemistry" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="chem_f" value="<?php echo "{$student['chem_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="chem_eoy" value="<?php echo "{$student['chem_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="chem_t" value="<?php echo "{$student['chem_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Biology" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="bio_f" value="<?php echo "{$student['bio_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="bio_eoy" value="<?php echo "{$student['bio_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="bio_t" value="<?php echo "{$student['bio_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Entrepreneurship" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="ent_f" value="<?php echo "{$student['ent_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="ent_eoy" value="<?php echo "{$student['ent_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="ent_t" value="<?php echo "{$student['ent_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Computer Studies" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="cst_f" value="<?php echo "{$student['cst_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="cst_eoy" value="<?php echo "{$student['cst_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="cst_t" value="<?php echo "{$student['cst_t']}"?>"></td>
                </tr>
                  <tr>
                    <td><input class="subject-name" type="text" name="subject_name" value="Physical Education" readonly></td>
                    <td><input class="mark" type="number" max="20" min="0" name="pe_f" value="<?php echo "{$student['pe_f']}"?>"></td>
                    <td><input class="mark" type="number" max="80" min="0" name="pe_eoy" value="<?php echo "{$student['pe_eoy']}"?>"></td>
                    <td><input class="teacher" type="text" name="pe_t" value="<?php echo "{$student['pe_t']}"?>"></td>
                </tr>
                
            </table>
            <input class="submit-btn" type="submit" name="updateMarks" value="Update Marks" >
           
        </form>
    </div>
   <footer>
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2023 By Isaac, Josephine and Solomon</p>
    </footer>    
</body>
</html>