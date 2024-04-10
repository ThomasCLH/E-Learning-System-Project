
<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Perform authentication and retrieve user type from the database
// Store the user type in a session variable
// 3 different acces , student , teacher and admin

$query = "SELECT user_type FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$userType = $row['user_type'];

// Store the user type in a session variable for future use
session_start();
$_SESSION['user_type'] = $userType;

// Redirect the user to the dashboard
header('Location: dashboard.php');
exit();
?>