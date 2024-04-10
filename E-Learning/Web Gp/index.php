<?php
// index.php

// Check if the user is already logged in. If yes, redirect them to the appropriate page.
session_start();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['account_type'] == 'student') {
        header('Location: student_dashboard.php');
        exit();
    } elseif ($_SESSION['account_type'] == 'teacher') {
        header('Location: teacher_dashboard.php');
        exit();
    } elseif ($_SESSION['account_type'] == 'administrator') {
        header('Location: admin_dashboard.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Programming E-Learning - Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .navbar {
            background-color: #f2f2f2;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }
        
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        
        .navbar li {
            float: left;
        }
        
        .navbar li a {
            display: block;
            padding: 10px 20px;
            font-size: 18px;
            color: #333;
            text-decoration: none;
        }
        
        .navbar li a:hover {
            background-color: #ddd;
        }
        
        main {
            padding: 120px 40px;
            text-align: center;
        }
        
        h1 {
            font-size: 48px;
            margin: 0;
        }
        
        p {
            font-size: 20px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>


    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    </div>

    <main>
        <h1>Welcome to Programming E-Learning</h1>
        <p>Learn programming at your own pace with our comprehensive online courses.</p>
        <a href="registration.php" class="btn">Get Started</a>
		
    </main>

    
</body>
</html>