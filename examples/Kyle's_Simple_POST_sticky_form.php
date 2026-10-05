<?php

    include('includes/header.php');

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    // filter all input for Browser output
    $name = htmlentities($name);
    $phone = htmlentities($phone);

    // following not needed -- it's just here to show the submit
    $hiddenVar = isset($_POST['hiddenVar']) ? $_POST['hiddenVar'] : 0;
    $hiddenVar++;
?>
    <h1>Kyle's Simple POST sticky form</h1>

    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" size="36" id="name" name="name" value="<?php echo($name); ?>">
        <br>
        <label for="phone">Phone</label>
        <input type="text" size="36" id="phone" name="phone" value="<?php echo($phone); ?>">
        <br>
        <br>
        <input type="hidden" name="hiddenVar" value="<?php echo($hiddenVar); ?>">
        <input type="submit" name="submit" value="Submit">
    </form>

<?php
    echo("<br>Count $hiddenVar (via hidden input) <br>");
    include('includes/footer.php');
?>

<hr>

<h2>Code for This Page</h2>

<?php
    highlight_file(__FILE__);
?>

<?php
    include('includes/footer.php');
?>