<?php 
    error_reporting(0);
    session_start();
    include "connection.php";

      // ADMIN LOGIN ERROR MESSAGE
      if($_SESSION['adminloginMessage']){
        $adminloginMessage = $_SESSION['adminloginMessage'];
        echo "<script type='text/javascript'>
            alert('$adminloginMessage');
        </script>";
    }
    unset($_SESSION['adminloginMessage']);
    
?>

<html>
    <head>
        <title>Students Results Management System</title>
        <link rel="stylesheet" href="style.css"/>
        <style type="text/css">

            .home-page{
                background-image: url("mahangass.jpeg");
                background-size: cover;
                background-repeat: no-repeat;
                width: 100%;
                height: 100vh;
            }

            .login-form{
                background-color: #fff;
                margin: 6rem auto;
            }

        </style>

    </head>
    <body class="home-page">
        <header class="hd">
            <img class="logo" src="mah-logo.png" alt="Logo of Busitema university"/>
            <h1>MAHANGA SENIOR SECONDARY SCHOOL</h1>
            <!-- <a href="adminpage.html">Admin page</a> -->
        </header>
        <div >
            <!-- <h2 class="welcome">Welcome to the Students Results Management System</h2> -->

            <form class="login-form" method="POST" action="login.php">
                <h3>Log in to continue</h3>

                <div class="fl">
                    <label>Username</label>
                    <input type="text" name="username" required/>
                </div>
                <div class="fl">
                    <label>Password</label>
                    <input type="password" name="password" required/>
                </div>
                <div>
                    <button>Log in</button>
                </div>
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