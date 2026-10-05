<?php

    include('includes/header.php');

    // code
    error_reporting(E_ALL);    // set error reporting to all

    echo('<h1>Kyle\'s $_POST form</h1>');

    // Note the variables being passed via the POST ternary operators.

    $step = isset($_POST['step']) ? $_POST['step'] : 0;
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    // filter all input taken from the Browser

    $step = htmlentities($step);
    $name = htmlentities($name);
    $phone = htmlentities($phone);

    if ($step == 0)    // first time into this form
    {
?>

        <form action="postform.php" method="POST" class="pad">

            <label for="name">Name</label>
            <input type="text" size="36" id="name" name="name" value="">

            <br><br>

            <label for="phone">Phone</label>
            <input type="text" size="36" id="phone" name="phone" value="">

            <br><br>

            <input type="hidden" name="step" value="1">
            <input type="submit" name="submit" value="Submit">

        </form>

<?php
    }
    else    // else show what the form gathered
    {
        echo('<p>The following is what the form gathered</p>');

        echo('<pre>');
        print_r($_POST);    // dumps the entire contents of the $_POST array
        echo('</pre>');

        // provide a form to try again
?>

        <form action="postform.php" method="POST">

            <input type="hidden" name="step" value="0">
            <input type="submit" name="submit" value="Try Again">

        </form>

<?php
    }

    // show the code for this page
    echo('<hr>');
    echo('<h2>CODE FOLLOWS</h2>');
    echo('<br>');

    highlight_file(__FILE__);

    echo('<hr>');

    include('includes/footer.php');

?>