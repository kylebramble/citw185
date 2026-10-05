<?php

include('includes/header.php');

error_reporting(E_ALL);    // set error reporting to all

echo('<h1>Kyle\'s Radius Form</h1>');

// Get the values passed through the POST form.
$step = isset($_POST['step']) ? $_POST['step'] : 0;
$radius = isset($_POST['radius']) ? $_POST['radius'] : '';

// Filter input from the browser before displaying it.
$step = htmlentities($step);
$radius = htmlentities($radius);

if ($step == 0)    // first time into this form
{
?>

<form action="radius.php" method="post">
    <p>
        <label for="radius">Radius</label><br>
        <input type="text" size="36" id="radius" name="radius" value="">
    </p>

    <input type="hidden" name="step" value="1">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
}
else    // show what the form gathered
{
    echo('<p>The following is what the form gathered.</p>');
    echo('<p>Please note: the POST array has not been scrubbed.</p>');
    echo('<p>Thus, it is open to JavaScript insertion.</p>');
    echo('<pre>');
    print_r($_POST);    // dumps the entire contents of the $_POST array
    echo('</pre>');

    if (is_numeric($radius))
    {
        $diameter = $radius * 2;
        echo("<h3>Diameter = $diameter</h3>");
    }
    else
    {
        echo('<p class="red">Please enter a number for the radius.</p>');
    }
?>

<form action="radius.php" method="post">
    <input type="hidden" name="step" value="0">
    <input type="submit" name="submit" value="Try Again">
</form>

<?php
}

include('includes/footer.php');

?>