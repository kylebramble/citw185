<?php

    include('includes/header.php');

    // code
    error_reporting(E_ALL);    // set error reporting to all

    echo("<h1>Kyle's code output for Loops:</h1>");

    echo('<h2>Loops</h2>');

    // Numeric 'for loop' =====================

    echo('<p>Numeric "for loop": ');

    for ($i = 1; $i < 10; $i++)
        {
        echo($i);
        }

    echo('</p>');

    // String 'for loop' =====================

    echo('<p>String "for loop": ');

    for ($i = 'a'; $i < 'z'; $i++)
        {
        echo($i);
        }

    echo('</p>');

    // while loop =====================

    echo('<p>while "loop" : ');

    $i = 1;

    while ($i < 10)
        {
        echo($i);
        $i++;
        }

    echo('</p>');

    // foreach loop =====================

    echo('<p>foreach "loop":  ');

    // populate a simple array

    $a = array("Sun", "Mon", "Tue", "Wen", "Thu", "Fri", "Sat");

    foreach($a as $day)
        {
        echo(" $day ");
        }

    echo('</p>');

    // for loop array =====================

    echo('<p>for "loop":  ');

    for ($i = 0; $i < 7; $i++)
        {
        echo($a[$i] . " ");
        }

    echo('</p>');

    // foreach loop using key =====================

    echo('<p>foreach "loop" using a key:  ');

    // populate an array with keys and values

    $a = array(
        'One' => "Apple",
        'Two' => "Pear",
        'Three' => "Peach",
        'Four' => "Orange",
        'Five' => "Apricot",
        'Six' => "Pineapple"
    );

    foreach($a as $key => $fruit)
        {
        echo(" $key/$fruit |");
        }

    echo('</p>');

?>

<br><br>

<button type="button" onclick="history.back()">Back</button>

<br><br>

<hr>

<h2>Code for This Page</h2>

<div style="overflow-x: auto; padding: 10px;">
    <?php
        highlight_file(__FILE__);
    ?>
</div>

<?php

    include('includes/footer.php');

?>