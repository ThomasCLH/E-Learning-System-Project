<?php
    include "data.php"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student - Content: Test 1</title>
</head>
<body>

<?php
    include "header.php";
?>

<form method=post>
<div class="course">
    <h2>Test 1</h2>

    <p><?php echo $tests[0]['question']; ?></p>

    <input type="radio" name="choice" value="A">
    <?php echo $tests[0]['choiceA']; ?></br>
    <input type="radio" name="choice" value="B">
    <?php echo $tests[0]['choiceB']; ?></br>
    <input type="radio" name="choice" value="C">
    <?php echo $tests[0]['choiceC']; ?></br>
    <input type="radio" name="choice" value="D">
    <?php echo $tests[0]['choiceD']; ?>
    
    <p><a href="assessment.php">Submit</p>
</div>
</form>

</body>