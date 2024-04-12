<?php
    include "data.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student - Content: PHP</title>
</head>
<body>

<?php
    include "header.php";
?>

<div class="course">
    <h2><?php echo $courses[0]['title']; ?></h2>
    <p><?php echo $courses[0]['description']; ?></p>
</div>

<a href="content.php">Go Back</a>

</body>