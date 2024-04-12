<?php
	require 'connection.php';
  error_reporting(0);
  session_start();

                //  MARKS UPDATED SUCCESSFULLY 
                if($_SESSION['marks_updated']){
                  $marks_updated = $_SESSION['marks_updated'];
                  echo "<script type='text/javascript'>
                  alert('$marks_updated');
              </script>";
          
              }
              unset($_SESSION['marks_updated']);

	////////////////////////////////     FOR STUDENT RESULTS   /////////////////////////////////////////////
    // RETRIEVING DATA FROM RESULTS TABLE FOR S.1
    $sql_r1 = "SELECT * FROM result JOIN student_tab  ON result.student_id = student_tab.student_id WHERE student_tab.class = 'S.1' ";
    $result_r1 = mysqli_query($conn, $sql_r1);

    // RETRIEVING DATA FROM RESULTS TABLE FOR S.2
    $sql_r2 = "SELECT * FROM result JOIN student_tab  ON result.student_id = student_tab.student_id WHERE student_tab.class = 'S.2' ";
    $result_r2 = mysqli_query($conn, $sql_r2);

    // RETRIEVING DATA FROM RESULTS TABLE FOR S.3
    $sql_r3 = "SELECT * FROM result JOIN student_tab  ON result.student_id = student_tab.student_id WHERE student_tab.class = 'S.3' ";
    $result_r3 = mysqli_query($conn, $sql_r3);

    // RETRIEVING DATA FROM RESULTS TABLE FOR S.4
    $sql_r4 = "SELECT * FROM result JOIN student_tab  ON result.student_id = student_tab.student_id WHERE student_tab.class = 'S.4' ";
    $result_r4 = mysqli_query($conn, $sql_r4);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Results</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
         .admin-nav{
            background-color: rgb(34, 46, 108);

            
        }
           .all-cls{
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 1rem auto;
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
            <a  href="view_all_students.php" >View All Students</a>
            <a class="activity-btn-active" href="view_results.php" >View Results</a>
            <a href="add_new_staff.php" >Add Staff</a>
        </div>
        
    </nav>

	       <!-- VIEW STUDENTS RESULTS -->
<section class=" activity activity-content-active">


    <!-- -----------------------------------------START------------------------------------ -->
        <header class="all-cls">
            <a class="cl-btn cl-tab-1 cl-btn-active" data-tab="1" href="">S.1</a>
            <a class="cl-btn cl-tab-2" data-tab="2" href="">S.2</a>
            <a class="cl-btn cl-tab-3" data-tab="3" href="">S.3</a>
            <a class="cl-btn cl-tab-4" data-tab="4" href="">S.4</a>
        </header>
        <div class="class cl-content-1 cl-content-active">
            <table class="students-table">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Math</th>
                    <th>Eng</th>
                    <th>His</th>
                    <th>Geog</th>
                    <th>Phy</th>
                    <th>Chem</th>
                    <th>Bio</th>
                    <th>Ent</th>
                    <th>CST</th>
                    <th>PE</th>
                    <th>Edit Marks</th>
                    <th>Print Report</th>
        
                </tr>
                <?php
                    while($s1_student_r = $result_r1 ->fetch_assoc()) 
                    {

                    
                ?>
                  <tr>
                    <td><?php echo "{$s1_student_r['student_id']}" ?></td>
                    <td><?php echo "{$s1_student_r['student_name']}" ?></td>
                    <td><?php echo "{$s1_student_r['class']}" ?></td>
                    <td><?php $math_sum = $s1_student_r['math_f'] + $s1_student_r['math_eoy']; echo "$math_sum"; ?> </td>
                    <td><?php $eng_sum = $s1_student_r['eng_f'] + $s1_student_r['eng_eoy']; echo "$eng_sum"; ?></td>
                    <td><?php $his_sum = $s1_student_r['his_f'] + $s1_student_r['his_eoy']; echo "$his_sum"; ?></td>
                    <td><?php $geo_sum = $s1_student_r['geo_f'] + $s1_student_r['geo_eoy']; echo "$geo_sum"; ?></td>
                    <td><?php $phy_sum = $s1_student_r['phy_f'] + $s1_student_r['phy_eoy']; echo "$phy_sum"; ?></td>
                    <td><?php $chem_sum = $s1_student_r['chem_f'] + $s1_student_r['chem_eoy']; echo "$chem_sum"; ?></td>
                    <td><?php $bio_sum = $s1_student_r['bio_f'] + $s1_student_r['bio_eoy']; echo "$bio_sum"; ?></td>
                    <td><?php $ent_sum = $s1_student_r['ent_f'] + $s1_student_r['ent_eoy']; echo "$ent_sum"; ?></td>
                    <td><?php $cst_sum = $s1_student_r['cst_f'] + $s1_student_r['cst_eoy']; echo "$cst_sum"; ?></td>
                    <td><?php $pe_sum = $s1_student_r['pe_f'] + $s1_student_r['pe_eoy']; echo "$pe_sum"; ?></td>
                    <td><?php echo "<a href='edit_marks.php?student_id={$s1_student_r['student_id']}' class='edit-btn' > Edit Marks </a>"; ?></td>
                    <td><?php echo "<a href='student_report.php?student_id={$s1_student_r['student_id']}' class='upload-btn' >Print Report</a>"; ?></td>
                  </tr>
                  <?php
                    }
                  ?>
            </table>
        </div>
        <div class="class cl-content-2">
            <table class="students-table">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Math</th>
                    <th>Eng</th>
                    <th>His</th>
                    <th>Geog</th>
                    <th>Phy</th>
                    <th>Chem</th>
                    <th>Bio</th>
                    <th>Ent</th>
                    <th>CST</th>
                    <th>PE</th>
                    <th>Edit Marks</th>
                    <th>Print Report</th>
        
                </tr>
                         <?php
                    while($s2_student_r = $result_r2 ->fetch_assoc()) 
                    {

                    
                ?>
                  <tr>
                    <td><?php echo "{$s2_student_r['student_id']}" ?></td>
                    <td><?php echo "{$s2_student_r['student_name']}" ?></td>
                    <td><?php echo "{$s2_student_r['class']}" ?></td>
                    <td><?php $math_sum = $s2_student_r['math_f'] + $s2_student_r['math_eoy']; echo "$math_sum"; ?> </td>
                    <td><?php $eng_sum = $s2_student_r['eng_f'] + $s2_student_r['eng_eoy']; echo "$eng_sum"; ?></td>
                    <td><?php $his_sum = $s2_student_r['his_f'] + $s2_student_r['his_eoy']; echo "$his_sum"; ?></td>
                    <td><?php $geo_sum = $s2_student_r['geo_f'] + $s2_student_r['geo_eoy']; echo "$geo_sum"; ?></td>
                    <td><?php $phy_sum = $s2_student_r['phy_f'] + $s2_student_r['phy_eoy']; echo "$phy_sum"; ?></td>
                    <td><?php $chem_sum = $s2_student_r['chem_f'] + $s2_student_r['chem_eoy']; echo "$chem_sum"; ?></td>
                    <td><?php $bio_sum = $s2_student_r['bio_f'] + $s2_student_r['bio_eoy']; echo "$bio_sum"; ?></td>
                    <td><?php $ent_sum = $s2_student_r['ent_f'] + $s2_student_r['ent_eoy']; echo "$ent_sum"; ?></td>
                    <td><?php $cst_sum = $s2_student_r['cst_f'] + $s2_student_r['cst_eoy']; echo "$cst_sum"; ?></td>
                    <td><?php $pe_sum = $s2_student_r['pe_f'] + $s2_student_r['pe_eoy']; echo "$pe_sum"; ?></td>
                    <td><?php echo "<a href='edit_marks.php?student_id={$s2_student_r['student_id']}' class='edit-btn' > Edit Marks </a>"; ?></td>
                    <td><?php echo "<a href='student_report.php?student_id={$s2_student_r['student_id']}' class='upload-btn' >Print Report</a>"; ?></td>
                  </tr>
                  <?php
                    }
                  ?>
            </table>
        </div>
        <div class="class cl-content-3">
               <table class="students-table">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Math</th>
                    <th>Eng</th>
                    <th>His</th>
                    <th>Geog</th>
                    <th>Phy</th>
                    <th>Chem</th>
                    <th>Bio</th>
                    <th>Ent</th>
                    <th>CST</th>
                    <th>PE</th>
                    <th>Edit Marks</th>
                    <th>Print Report</th>
        
                </tr>
                          <?php
                    while($s3_student_r = $result_r3 ->fetch_assoc()) 
                    {

                    
                ?>
                  <tr>
                    <td><?php echo "{$s3_student_r['student_id']}" ?></td>
                    <td><?php echo "{$s3_student_r['student_name']}" ?></td>
                    <td><?php echo "{$s3_student_r['class']}" ?></td>
                    <td><?php $math_sum = $s3_student_r['math_f'] + $s3_student_r['math_eoy']; echo "$math_sum"; ?> </td>
                    <td><?php $eng_sum = $s3_student_r['eng_f'] + $s3_student_r['eng_eoy']; echo "$eng_sum"; ?></td>
                    <td><?php $his_sum = $s3_student_r['his_f'] + $s3_student_r['his_eoy']; echo "$his_sum"; ?></td>
                    <td><?php $geo_sum = $s3_student_r['geo_f'] + $s3_student_r['geo_eoy']; echo "$geo_sum"; ?></td>
                    <td><?php $phy_sum = $s3_student_r['phy_f'] + $s3_student_r['phy_eoy']; echo "$phy_sum"; ?></td>
                    <td><?php $chem_sum = $s3_student_r['chem_f'] + $s3_student_r['chem_eoy']; echo "$chem_sum"; ?></td>
                    <td><?php $bio_sum = $s3_student_r['bio_f'] + $s3_student_r['bio_eoy']; echo "$bio_sum"; ?></td>
                    <td><?php $ent_sum = $s3_student_r['ent_f'] + $s3_student_r['ent_eoy']; echo "$ent_sum"; ?></td>
                    <td><?php $cst_sum = $s3_student_r['cst_f'] + $s3_student_r['cst_eoy']; echo "$cst_sum"; ?></td>
                    <td><?php $pe_sum = $s3_student_r['pe_f'] + $s3_student_r['pe_eoy']; echo "$pe_sum"; ?></td>
                    <td><?php echo "<a href='edit_marks.php?student_id={$s3_student_r['student_id']}' class='edit-btn' > Edit Marks </a>"; ?></td>
                    <td><?php echo "<a href='student_report.php?student_id={$s3_student_r['student_id']}' class='upload-btn' >Print Report</a>"; ?></td>
                  </tr>
                  <?php
                    }
                  ?>
            </table>
        </div>
        <div class="class cl-content-4">
          <table class="students-table">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Math</th>
                    <th>Eng</th>
                    <th>His</th>
                    <th>Geog</th>
                    <th>Phy</th>
                    <th>Chem</th>
                    <th>Bio</th>
                    <th>Ent</th>
                    <th>CST</th>
                    <th>PE</th>
                    <th>Edit Marks</th>
                    <th>Print Report</th>
        
                </tr>
                      <?php
                    while($s4_student_r = $result_r4 ->fetch_assoc()) 
                    {

                    
                ?>
                  <tr>
                    <td><?php echo "{$s4_student_r['student_id']}" ?></td>
                    <td><?php echo "{$s4_student_r['student_name']}" ?></td>
                    <td><?php echo "{$s4_student_r['class']}" ?></td>
                    <td><?php $math_sum = $s4_student_r['math_f'] + $s4_student_r['math_eoy']; echo "$math_sum"; ?> </td>
                    <td><?php $eng_sum = $s4_student_r['eng_f'] + $s4_student_r['eng_eoy']; echo "$eng_sum"; ?></td>
                    <td><?php $his_sum = $s4_student_r['his_f'] + $s4_student_r['his_eoy']; echo "$his_sum"; ?></td>
                    <td><?php $geo_sum = $s4_student_r['geo_f'] + $s4_student_r['geo_eoy']; echo "$geo_sum"; ?></td>
                    <td><?php $phy_sum = $s4_student_r['phy_f'] + $s4_student_r['phy_eoy']; echo "$phy_sum"; ?></td>
                    <td><?php $chem_sum = $s4_student_r['chem_f'] + $s4_student_r['chem_eoy']; echo "$chem_sum"; ?></td>
                    <td><?php $bio_sum = $s4_student_r['bio_f'] + $s4_student_r['bio_eoy']; echo "$bio_sum"; ?></td>
                    <td><?php $ent_sum = $s4_student_r['ent_f'] + $s4_student_r['ent_eoy']; echo "$ent_sum"; ?></td>
                    <td><?php $cst_sum = $s4_student_r['cst_f'] + $s4_student_r['cst_eoy']; echo "$cst_sum"; ?></td>
                    <td><?php $pe_sum = $s4_student_r['pe_f'] + $s4_student_r['pe_eoy']; echo "$pe_sum"; ?></td>
                    <td><?php echo "<a href='edit_marks.php?student_id={$s4_student_r['student_id']}' class='edit-btn' > Edit Marks </a>"; ?></td>
                    <td><?php echo "<a href='student_report.php?student_id={$s4_student_r['student_id']}' class='upload-btn' >Print Report</a>"; ?></td>
                  </tr>
                  <?php
                    }
                  ?>
            </table>
        </div>
    <!--------------------------------------------END------------------------------------------- -->


</section>
  <footer>
        <p class="motto">
            Education is Our Future
        </p>
        <p class="copy">&copy; 2024 Bukenya Simon. All rights reserved</p>
    </footer>

    <script>
        


           //  CLASS TABS FOR RESULTS
        const clTabs = document.querySelectorAll('.cl-btn');
        const clTabBtns = document.querySelector('.all-cls');
        const cls = document.querySelectorAll('.class');

        clTabBtns.addEventListener('click', function(e){ 
            e.preventDefault();
            const clicked = e.target.closest('.cl-btn');
            console.log(clicked);
            if(!clicked) return;
            // Remove active
            clTabs.forEach(t=>t.classList.remove('cl-btn-active'))
            cls.forEach(a=>a.classList.remove('cl-content-active'))
            // Activate tab 
            clicked.classList.add('cl-btn-active')

            // Active area content
            document.querySelector(`.cl-content-${clicked.dataset.tab}`).classList.add('cl-content-active')


        
    })

    </script>
</body>
</html>