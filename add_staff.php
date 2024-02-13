<?php
	error_reporting(0);
	session_start();

	require 'connection.php';

	if (isset($_POST['addStaff'])) {
		$staff_name = $_POST['staffName'];
		$phone_no = $_POST['phoneNo'];
		$staff_email = $_POST['staffEmail'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql_staff = "INSERT INTO admin_tab (staff_name, phone_no, staff_email, username, admin_password) VALUES('$staff_name', '$phone_no', '$staff_email', '$username', '$password' ) ";

		$result_staff = mysqli_query($conn, $sql_staff);

		if ($result_staff) {
			$_SESSION['staff_added'] = "New Staff Added Successfully";
			header('location:add_new_staff.php');
		}
		else {
			echo "There was an error. Try again";
		}
	}

?>