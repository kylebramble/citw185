<?php

include('includes/header.php');

// code
error_reporting(E_ALL);    // set error reporting to all

date_default_timezone_set("America/Detroit");   // set time zone for here, not the server

echo("<h1>Kyle's code for Greetings</h1>");

echo('<h2>if / elseif / switch and ternary Examples</h2>');

$hour = date('G'); // 'G' returns 24-hour format of an hour

// To see what 'G' means, please review the following URL
// https://www.php.net/manual/en/datetime.format.php

echo("<p>Hour is: $hour</p>");

//========== if =========

if ($hour >= 0 && $hour < 12)
    {
    echo('<h3>Good Morning!</h3>');
    }

if ($hour >= 12 && $hour < 18)
    {
    echo('<h3>Good Afternoon</h3>');
    }

if ($hour >= 18 && $hour < 22)
    {
    echo('<h3>Good Evening</h3>');
    }

if ($hour >= 22 && $hour <= 24)
    {
    echo('<h3>Good Night</h3>');
    }

//========== if elseif =========

if ($hour >= 0 && $hour < 12)
    {
    echo('<h3>Good Morning!</h3>');
    }
elseif ($hour >= 12 && $hour < 18)
    {
    echo('<h3>Good Afternoon</h3>');
    }
elseif ($hour >= 18 && $hour < 22)
    {
    echo('<h3>Good Evening</h3>');
    }
else
    {
    echo('<h3>Good Night</h3>');
    }

//========== switch =========

switch ($hour)
    {
    case ($hour >= 0 && $hour < 12):
        echo('<h3>Good Morning!</h3>');
        break;

    case ($hour >= 12 && $hour < 18):
        echo('<h3>Good Afternoon</h3>');
        break;

    case ($hour >= 18 && $hour < 22):
        echo('<h3>Good Evening</h3>');
        break;

    case ($hour >= 22 && $hour <= 24):
        echo('<h3>Good Night</h3>');
        break;
    }

echo('<br><br>');

echo('<h3>Simple IF/ELSE</h3>');

// Simple if/else statement

if ($hour < 12)
    {
    $amPM = "AM";
    }
else
    {
    $amPM = "PM";
    }

echo($amPM);

echo('<h3>Ternary example</h3>');

// ternary example is the same as above, only shorter
// the expression is evaluated such that if it is true
// then $amPM is assigned "AM" else "PM"

$amPM = ($hour < 12) ? "AM" : "PM";

echo($amPM);

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