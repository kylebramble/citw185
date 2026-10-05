<?php
    
    include('includes/header.php');

    // code
    error_reporting(E_ALL);    // set error reporting to all
    
    echo('<h1>Kyle\'s Radius form</h1>');

    // Note the variables being passed via the POST ternary operators.
    
    $step = isset($_POST['step']) ? $_POST['step'] : 0;
    $radius = isset($_POST['radius']) ? $_POST['radius'] : '';

    // filter all input taken from the Browser
    $step = htmlentities($step);
    $radius = htmlentities($radius);
    
    if ($step == 0)    // first time into this form
    {
        ?>

        <form action="radius.php" method="POST">
            <label for="name">Radius</label>
            <input type="text" size="36" id="name" name="radius" value="">
            <br><br>
            <input type="hidden" name="step" value="1">
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <?php
    } 
    else    // else show what the form gathered
    {
        
        echo('<p>The following is what the form gathered</p>');
        echo('<p>Please note: The POST array has not been scrubbed</p>');
        echo('<p>Thus, it is open to javascript insertion.</p>');
        echo('<pre>');
        print_r($_POST);    // note this dumps the entire contents of the $_POST array
        echo('</pre>');
        
        $diameter = $radius * 2;
        
        echo("<h3>Diameter = $diameter</h3>");
        
        // provide a form to try again
        ?>

        <form action="radius.php" method="POST">
            <input type="hidden" name="step" value="0">
            <input type="submit" name="submit" value="Try Again">
        </form>
        
        <?php
    }
?>

<hr>

<h2>Code</h2>

<div style="overflow-x: auto; padding: 10px;">
    <?php
        highlight_file(__FILE__);
    ?>
</div>

<?php
    
    include('includes/footer.php');

?>