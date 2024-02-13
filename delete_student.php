<?php
    error_reporting(0);	
	 require 'connection.php';

    session_start();
	
	if($_GET['student_id']){
        $student_id = $_GET['student_id'];
        $sql_del_student = "DELETE  FROM student_tab WHERE student_id='$student_id' ";
        $sql_del_result = "DELETE  FROM result WHERE student_id='$student_id' ";

        $result_del_student = mysqli_query($conn, $sql_del_student);
        $result_del_result = mysqli_query($conn, $sql_del_result);

        if ($result_del_student && $result_del_result) {
        	 $_SESSION['student_deleted'] = "Student deleted Successfully";
            header("location:view_all_students.php");
        }
        
    }

?>