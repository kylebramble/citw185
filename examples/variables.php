<?php

    include("includes/header.php");

    $r = rand(0,100);

    $radius = $r;
    $diameter = $radius * 2;
    $circumference = M_PI * $diameter;
    $area = M_PI * pow($radius, 2);

    echo('<h1>This circle has...</h1>');
    echo("A radius of: $radius <br>");
    echo("A diameter of: $diameter <br>");
    echo("A circumference of: $circumference <br>");
    echo('An area of: ' . $area . '<br>');

    echo("<h1>The AREA is $area ---</h1>");

?>

<hr>

<h2>Code for This Page</h2>

<div style="overflow-x: auto; padding: 10px;">
    <?php
        highlight_file(__FILE__);
    ?>
</div>

<?php

    include("includes/footer.php");

?>