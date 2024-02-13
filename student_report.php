<?php 
	// error_reporting(0);
	require 'connection.php';

  // CAPTURING THE STUDENT CLICKED ON
    if($_GET['student_id']){
        $student_id = $_GET['student_id'];
        $sql_student = "SELECT * FROM result JOIN student_tab ON result.student_id = student_tab.student_id WHERE result.student_id='$student_id' ";
        $result_student = mysqli_query($conn, $sql_student);
        $student =  $result_student->fetch_assoc();
    }

    function calc_total($f_mark, $eoy_mark){
    	$total = $f_mark + $eoy_mark;
    	$level = ($total/100) * 3;
    	$level = round($level);

    	echo $level;
        return $level;
    }

    function descriptor($f_mark, $eoy_mark){
    	$total = $f_mark + $eoy_mark;
    	$level = ($total/100) * 3;
    	$level = round($level, 1);

        $level_desc  = NULL;

    	if ($level >= 2.5 && $level <=3.0) {
    		$level_desc = "Outstanding";
    	}
    	elseif($level >= 1.5 && $level <=2.4){
    		$level_desc = "Moderate";
    	}
    	elseif($level >= 0.9 && $level <=1.4){
    		$level_desc = "Basic";
    	}
    	else{
    		$level_desc = "Below Average";
    	}

        echo $level_desc;
        return $level_desc;
    }

    function total_marks($a, $b, $c, $d, $e, $f, $g, $h, $i, $j){
        $total_ach = $a+$b+$c+$d+$e+$f+$g+$h+$i+$j;
        echo "$total_ach";
    }

    function findMostFrequent($arr){
        $count = array_count_values($arr);
        $maxCount = max($count);
        $mostFrequentValues = array_keys($count, $maxCount);
        if (count($mostFrequentValues) === 1) {
            echo $mostFrequentValues[0];
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Report</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.back-btn{
			margin: 2rem 0 0 3rem;
		}

        .std-particulars{
            display: flex;
            /* justify-content: center; */
            align-items: center;
        }

		.std-particulars p{
			text-transform: uppercase;
		}

		.key-words-table th{
			border: none;
			text-align: left;
		}


		.key-words-table td, .curricular-table td{
			font-size: 0.7rem;
			padding-left: 1rem;
			padding-top: 0.6rem;
		}

		.key-words, .curricular{
			width: 90%;
			margin: 0 auto;
		}

		.key-words-header, .curricular p{
			font-size: 0.8rem;
			text-align: center;
			border-bottom: 1px solid #000;
		}

		.curricular{
			margin-bottom: 1rem;
		}

		.report{
		    width: 60%;
		    margin: 0 auto;
		    padding: 1rem 1rem;
		    border: 1px solid #000;
		}

		.comment{
		    border: 1px solid #000;
		    margin-top: 0.5rem;

		}

		.comment p{
			font-size: 0.8rem;
			padding: 0.6rem 0.5rem;

		}

		.class-teacher{
			border-bottom: 1px solid #000;
		}

		.school-motto{
			width: 90%;
			margin: 2rem auto 0 auto;
			font-size: 0.8rem;
			text-align: center;
			border-top: 2px solid #000;
			padding: 0.6rem 0;
		}

        .back-btn{
            color: #000;
        }
	</style>
</head>
<body>
	<div class="back-btn">
		<a class="logout-btn back-btn" href="view_results.php">Go Back</a>
	</div>

	  <div class="report">
        <div class="report-header">
            <div class="header-barge">
                <img class="header-logo" src="mah-logo.png" alt="School Barge"/>
            </div>
            <div class="header-text">
                <p class="school-name">
                    MAHANGA SENIOR SECONDARY SCHOOL
                </p>
                <p class="post-no">P.O.BOX 902, TORORO UGANDA</p>
                <p class="school-contact">Tel: +256775421130</p>
                <p class="school-email">Email: mahangass@gmail.com</p>
            </div>

        </div>
        <p class="assessment">END OF YEAR ASSESSMENT REPORT, 2023</p>
        <div class="std-particulars">
            <p>NAME: <?php echo "{$student['student_name']}"?></p>
            <p>CLASS: <?php echo "{$student['class']}"?></p>
            <p>STUDENT NO: MAH-<?php echo "{$student['student_id']}"?></p>
            <img width="100" height="110" class="student-photo" src="<?php echo "{$student['student_photo']}" ?>"/>
        </div>
        <div>
            <table class="report-table">
                <tr>
                    <th>SUBJECT</th>
                    <th>Formative Assessment (20%)</th>
                    <th>EOY Summative Assessment (80%)</th>
                    <th>Total (100%)</th>
                    <th>Level of Achievement /3</th>
                    <th>Descriptor </th>
                    <th>Teacher's initial </th>
                </tr>
                <tr>
                    <td>MATHEMATICS</td>
                    <td><?php echo "{$student['math_f']}"?></td>
                    <td><?php echo "{$student['math_eoy']}"?></td>
                    <td><?php $math_sum = $student['math_f'] + $student['math_eoy']; echo "$math_sum"; ?></td>
                    <td><?php $math_level = calc_total($student['math_f'], $student['math_eoy']); ?></td>
                    <td><?php $math_desc = descriptor($student['math_f'], $student['math_eoy']); ?></td>
                    <td><?php echo "{$student['math_t']}"?></td>
                </tr>
                <tr>
                    <td>ENGLISH</td>
					<td><?php echo "{$student['eng_f']}"?></td>
                    <td><?php echo "{$student['eng_eoy']}"?></td>
                    <td><?php $eng_sum = $student['eng_f'] + $student['eng_eoy']; echo "$eng_sum"; ?></td>
                    <td><?php $eng_level = calc_total($student['eng_f'], $student['eng_eoy']); ?></td>
                    <td><?php $eng_desc = descriptor($student['eng_f'], $student['eng_eoy']); ?></td>
                    <td><?php echo "{$student['eng_t']}"?></td>
                </tr>
                <tr>
                    <td>HISTORY</td>
                    <td><?php echo "{$student['his_f']}"?></td>
                    <td><?php echo "{$student['his_eoy']}"?></td>
                    <td><?php $his_sum = $student['his_f'] + $student['his_eoy']; echo "$his_sum"; ?></td>
                    <td><?php $his_level = calc_total($student['his_f'], $student['his_eoy']); ?></td>
                    <td><?php $his_desc = descriptor($student['his_f'], $student['his_eoy']); ?></td>
                    <td><?php echo "{$student['his_t']}"?></td>
                </tr>
                <tr>
                    <td>GEOGRAPHY</td>
                    <td><?php echo "{$student['geo_f']}"?></td>
                    <td><?php echo "{$student['geo_eoy']}"?></td>
                    <td><?php $geo_sum = $student['geo_f'] + $student['geo_eoy']; echo "$geo_sum"; ?></td>
                    <td><?php $geo_level = calc_total($student['geo_f'], $student['geo_eoy']); ?></td>
                    <td><?php $geo_desc = descriptor($student['geo_f'], $student['geo_eoy']); ?></td>
                    <td><?php echo "{$student['geo_t']}"?></td>
                </tr>
                <tr>
                    <td>PHYSICS</td>
                    <td><?php echo "{$student['phy_f']}"?></td>
                    <td><?php echo "{$student['phy_eoy']}"?></td>
                    <td><?php $phy_sum = $student['phy_f'] + $student['phy_eoy']; echo "$phy_sum"; ?></td>
                    <td><?php $phy_level = calc_total($student['phy_f'], $student['phy_eoy']); ?></td>
                    <td><?php $phy_desc = descriptor($student['phy_f'], $student['phy_eoy']); ?></td>
                    <td><?php echo "{$student['phy_t']}"?></td>
                </tr>
                <tr>
                    <td>CHEMISTRY</td>
                    <td><?php echo "{$student['chem_f']}"?></td>
                    <td><?php echo "{$student['chem_eoy']}"?></td>
                    <td><?php $chem_sum = $student['chem_f'] + $student['chem_eoy']; echo "$chem_sum"; ?></td>
                    <td><?php $chem_level = calc_total($student['chem_f'], $student['chem_eoy']); ?></td>
                    <td><?php $chem_desc = descriptor($student['chem_f'], $student['chem_eoy']); ?></td>
                    <td><?php echo "{$student['chem_t']}"?></td>
                </tr>
                <tr>
                    <td>BIOLOGY</td>
                    <td><?php echo "{$student['bio_f']}"?></td>
                    <td><?php echo "{$student['bio_eoy']}"?></td>
                    <td><?php $bio_sum = $student['bio_f'] + $student['bio_eoy']; echo "$bio_sum"; ?></td>
                    <td><?php $bio_level = calc_total($student['bio_f'], $student['bio_eoy']); ?></td>
                    <td><?php $bio_desc = descriptor($student['bio_f'], $student['bio_eoy']); ?></td>
                    <td><?php echo "{$student['bio_t']}"?></td>
                </tr>
                <tr>
                    <td>ENTREPRENEURSHIP</td>
                    <td><?php echo "{$student['ent_f']}"?></td>
                    <td><?php echo "{$student['ent_eoy']}"?></td>
                    <td><?php $ent_sum = $student['ent_f'] + $student['ent_eoy']; echo "$ent_sum"; ?></td>
                    <td><?php $ent_level = calc_total($student['ent_f'], $student['ent_eoy']); ?></td>
                    <td><?php $ent_desc = descriptor($student['ent_f'], $student['ent_eoy']); ?></td>
                    <td><?php echo "{$student['ent_t']}"?></td>
                </tr>
                <tr>
                    <td>COMPUTER STUDIES</td>
                    <td><?php echo "{$student['cst_f']}"?></td>
                    <td><?php echo "{$student['cst_eoy']}"?></td>
                    <td><?php $cst_sum = $student['cst_f'] + $student['cst_eoy']; echo "$cst_sum"; ?></td>
                    <td><?php $cst_level = calc_total($student['cst_f'], $student['cst_eoy']); ?></td>
                    <td><?php $cst_desc = descriptor($student['cst_f'], $student['cst_eoy']); ?></td>
                    <td><?php echo "{$student['cst_t']}"?></td>
                </tr>
               
                <tr>
                    <td>PHYSICAL EDUCATION</td>
                    <td><?php echo "{$student['pe_f']}"?></td>
                    <td><?php echo "{$student['pe_eoy']}"?></td>
                    <td><?php $pe_sum = $student['pe_f'] + $student['pe_eoy']; echo "$pe_sum"; ?></td>
                    <td><?php $pe_level = calc_total($student['pe_f'], $student['pe_eoy']); ?></td>
                    <td><?php $pe_desc = descriptor($student['pe_f'], $student['pe_eoy']); ?></td>
                    <td><?php echo "{$student['pe_t']}"?></td>
                </tr>
                <tr>
                    <th>OVERALL ACHIEVEMENT</th>
                    <td></td>
                    <td></td>
                    <td><?php total_marks($math_sum, $eng_sum, $his_sum, $geo_sum, $phy_sum, $chem_sum, $bio_sum, $ent_sum, $cst_sum, $pe_sum ) ?></td>
                    <td></td>
                    <td><?php $level_descriptions = [$math_desc, $eng_desc, $his_desc, $geo_desc, $phy_desc, $chem_desc, $bio_desc, $ent_desc, $cst_desc , $pe_desc ]; findMostFrequent($level_descriptions); ?></td>
                    <td></td>


                </tr>
            </table>
        </div>
        <div class="curricular">
        	<p>CO-CURRICULAR ACTIVITIES AND PROJECTS</p>
        	<table class="curricular-table">
        		<tr>
        			<td><strong>Games:</strong> <?php echo "{$student['student_name']}"?> is participative in sports / PE Activities</td>
        		</tr>
        		<tr>
        			<td><strong>Projects:</strong> <?php echo "{$student['student_name']}"?> is active in all projects</td>
        		</tr>
        	</table>
        </div>
        <div class="key-words">
        	<div class="key-words-header">
        		<p>KEY WORDS AND DEFINITIONS</p>
        	</div>
        	<div class="key-words-container">
        		<table class="key-words-table">
        			<tr>
        				<th>Identifier</th>
        				<th>Score Range</th>
        				<th>Descriptor</th>
        			</tr>
        			<tr>
        				<td>3</td>
        				<td>2.5 - 3.0</td>
        				<td><strong>Outstanding: </strong>Most or all learning outcomes achieved</td>
        			</tr>
        			<tr>
        				<td>2</td>
        				<td>1.5 - 2.4</td>
        				<td><strong>Moderate: </strong>Many learning outcomes achieved, enough for overall achievement</td>
        			</tr>
        			<tr>
        				<td>1</td>
        				<td>0.9 - 1.4</td>
        				<td><strong>Basic: </strong>Few learning outcomes achieved, not sufficient for overall achievement</td>
        			</tr>
        		</table>
        	</div>
        </div>
        <div class="comment">
        	<p class="class-teacher">Class Teacher's Comment: </p>
        	<p>Headteacher's Comment: </p>

        </div>
        <div class="school-motto">
        	<em><strong>School Motto: </strong>"EDUCATION IS OUR FUTURE"</em>
        </div>

        
    </div>

</body>
</html>
