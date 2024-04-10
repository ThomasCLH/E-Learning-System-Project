<?php
// login.php

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data and perform validation
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform validation (e.g., check if required fields are filled, validate email format, etc.)
    $errors = [];

    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    if (empty($password)) {
        $errors[] = 'Password is required.';
    }

    // If there are no validation errors, proceed with authentication
    if (empty($errors)) {
        // Perform user authentication logic (e.g., check if email and password match a user in the database)

        // If authentication is successful, start a session and redirect the user to the appropriate page
        session_start();
        $_SESSION['user_id'] = 123; // Example: Set the user ID
        $_SESSION['account_type'] = 'student'; // Example: Set the account type (student, teacher, administrator)

        // Redirect the user to the appropriate dashboard based on their account type
        if ($_SESSION['account_type'] === 'student') {
            header('Location: student_dashboard.php');
            exit();
        } elseif ($_SESSION['account_type'] === 'teacher') {
            header('Location: teacher_dashboard.php');
            exit();
        } elseif ($_SESSION['account_type'] === 'administrator') {
            header('Location: admin_dashboard.php');
            exit();
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Programming E-Learning - Login</title>
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
            padding: 40px;
            text-align: center;
        }
        
        h1 {
            font-size: 36px;
            margin: 0;
        }
        
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 400px;
            margin: 0 auto;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #555;
        }
        
        .error {
            color: red;
            margin-bottom: 10px;
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
        <h2>Login</h2>
        <?php if (!empty($errors)) : ?>
            <div class="error">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Log In</button>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </main>

   
</body>
</html>