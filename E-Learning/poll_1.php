<?php
    include "data.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student - Content: Poll 1</title>
</head>
<body>

<?php
    include "header.php";
?>

<form method=post>
<div class="course">
    <h2>Poll 1</h2>

    <p>Stance 1</p>

    <input type="radio" name="choice" value="Y">
    Yes</br>
    <input type="radio" name="choice" value="N">
    No</br>
    
    <p><a href="assessment.php">Submit</p>
</div>
</form>

</body>