<?php
include('../includes/header.php');
error_reporting(E_ALL);
//Get f/POST
$bill = isset($_POST['bill']) ? $_POST['bill'] : '';
$people = isset($_POST['people']) ? $_POST['people'] : '';
$service = isset($_POST['service']) ? $_POST['service'] : '';
$submit = isset($_POST['submit']) ? $_POST['submit'] : '';
$bill = htmlentities($bill);
$people = htmlentities($people);
$service = htmlentities($service);
?>

<h1>Kyle's Tip Calculator</h1>
<p>Enter the bill, number of people, and service rating.</p>
<form action="" method="POST">
    <p>
        <label for="bill">Bill Amount</label><br>
        <input type="text" id="bill" name="bill" value="<?php echo($bill); ?>">
    </p>
    <p>
        <label for="people">Number of People</label><br>
        <input type="text" id="people" name="people" value="<?php echo($people); ?>">
    </p>
    <p>
        <label for="service">Service Rating</label><br>
        <select id="service" name="service">
            <option value="">Choose One</option>
            <option value="Excellent" <?php if ($service == 'Excellent') echo('selected'); ?>>Excellent</option>
            <option value="Good" <?php if ($service == 'Good') echo('selected'); ?>>Good</option>
            <option value="Average" <?php if ($service == 'Average') echo('selected'); ?>>Average</option>
            <option value="Poor" <?php if ($service == 'Poor') echo('selected'); ?>>Poor</option>
        </select>
    </p>
    <input type="submit" name="submit" value="Calculate Tip">
</form>

<?php
if ($submit)
{
    echo('<hr>');
    echo('<h2>Results</h2>');
    if (!is_numeric($bill) || $bill <= 0)
    {
        echo('<p class="red">Wrong. Try Again.</p>');
    }
    elseif (!is_numeric($people) || $people <= 0 || floor($people) != $people)
    {
        echo('<p class="red">Seriously? You can\'t have half a person.</p>');
    }
    elseif ($service == '')
    {
        echo('<p class="red">The instruction are RIGHT THERE! TRY AGAIN.</p>');
    }
    else
    {
        //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        if ($service == 'Excellent')
        {
            $tipPercent = 0.25;
        }
        elseif ($service == 'Good')
        {
            $tipPercent = 0.20;
        }
        elseif ($service == 'Average')
        {
            $tipPercent = 0.15;
        }
        else
        {
            $tipPercent = 0.10;
        }

        $tipAmount = $bill * $tipPercent;
        $totalBill = $bill + $tipAmount;
        $amountPerPerson = $totalBill / $people;
        echo('<p>Service Rating: ' . $service . '</p>');
        echo('<p>Tip Percentage: ' . ($tipPercent * 100) . '%</p>');
        echo('<p>Original Bill: $' . number_format($bill, 2) . '</p>');
        echo('<p>Tip Amount: $' . number_format($tipAmount, 2) . '</p>');
        echo('<p>Total Bill: $' . number_format($totalBill, 2) . '</p>');
        echo('<p>Amount Per Person: $' . number_format($amountPerPerson, 2) . '</p>');
        echo('<h2>Bill Split</h2>');

        //Loop
        for ($i = 1; $i <= $people; $i++)
        {
            echo('<p>Person ' . $i . ' pays $' . number_format($amountPerPerson, 2) . '</p>');
        }
        echo('<h2>Other Tip Options</h2>');
        //Loop!
        $tipOptions = array(10, 15, 20, 25);
        foreach ($tipOptions as $percent)
        {
            $otherTip = $bill * ($percent / 100);
            $otherTotal = $bill + $otherTip;
            echo('<p>' . $percent . '% tip = $' . number_format($otherTip, 2) .
                 ' | Total = $' . number_format($otherTotal, 2) . '</p>');
        }
    }
}
include('../includes/footer.php');
?>