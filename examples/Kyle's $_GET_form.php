<?php

    include('includes/header.php');

    // code
    error_reporting(E_ALL);    // set error reporting to all

    echo('<h1>Kyle\'s $_GET form</h1>');

    // Note the variables being passed via the GET ternary operators.

    $step = isset($_GET['step']) ? $_GET['step'] : 0;
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $phone = isset($_GET['phone']) ? $_GET['phone'] : '';

    // filter all input taken from the Browser

    $step = htmlentities($step);
    $name = htmlentities($name);
    $phone = htmlentities($phone);

    if ($step == 0)    // first time into this form
    {
?>

        <form action="getform.php" method="GET" class="pad">

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
        print_r($_GET);    // note this dumps the entire contents of the $_GET array
        echo('</pre>');

        // provide a form to try again
?>

        <form action="getform.php" method="GET">

            <input type="hidden" name="step" value="0">
            <input type="submit" name="submit" value="Try Again">

        </form>

<?php

}
include('../includes/footer.php');
?>