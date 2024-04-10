<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_type'])) {
    // Redirect the user to the login page if not logged in
    header('Location: login.php');
    exit();
}

// Retrieve the user type from the session
$userType = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>

    <?php if ($userType === 'student'): ?>
        <!-- Student-specific content -->
        <h2>Student Dashboard</h2>
        <p>Content visible to students only</p>

        <!-- View teaching materials -->
        <button>View Teaching Materials</button>
        <br>
        <!-- Attempt assessments and view results -->
        <button>Attempt Assessments and View Results</button>
        <br>
        <!-- Participate in online activities -->
        <button>Participate in Online Activities</button>
        <br>
        <!-- View learning progress -->
        <button>View Learning Progress</button>

    <?php elseif ($userType === 'teacher'): ?>
        <!-- Teacher-specific content -->
        <h2>Teacher Dashboard</h2>
        <p>Content visible to teachers only</p>

        <!-- Add/update/delete teaching materials -->
        <button>Add/Update/Delete Teaching Materials</button>
        <br>
        <!-- Add/update/delete assessments -->
        <button>Add/Update/Delete Assessments</button>
        <br>
        <!-- Grade students' submissions -->
        <button>Grade Students' Submissions</button>
        <br>
        <!-- View/override students' results -->
        <button>View/Override Students' Results</button>
        <br>
        <!-- Organize online activities -->
        <button>Organize Online Activities</button>

    <?php elseif ($userType === 'admin'): ?>
        <!-- Admin-specific content -->
        <h2>Admin Dashboard</h2>
        <p>Content visible to admins only</p>

        <!-- View the list of users -->
        <button>View List of Users</button>
        <br>
        <!-- Approve/reject student's registration -->
        <button>Approve/Reject Student's Registration</button>
        <br>
        <!-- Add/update/delete user accounts -->
        <button>Add/Update/Delete User Accounts</button>
        <br>
        <!-- View reports of user activities -->
        <button>View Reports of User Activities</button>

    <?php else: ?>
        <p>Invalid user type. Please contact the administrator.</p>

    <?php endif; ?>

    <!-- Common content visible to all user types -->

    <!-- Logout button -->
    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>
</body>
</html>