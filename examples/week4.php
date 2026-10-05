<?php
include('../includes/header.php');
error_reporting(E_ALL);
echo("<h1>Tax Calculator</h1>");
$step = isset($_POST['step']) ? $_POST['step'] : 0;
$purchase = isset($_POST['purchase']) ? $_POST['purchase'] : '';
$tax_rate = isset($_POST['tax_rate']) ? $_POST['tax_rate'] : '';
$step = htmlentities($step);
$purchase = htmlentities($purchase);
$tax_rate = htmlentities($tax_rate);
if ($step == 0)
{

?>
    <p>Enter the amount and sales tax</p>
    <form action="week4.php" method="POST" class="pad">
        <label for="purchase">Price</label>
        <input type="text" size="36" id="purchase" name="purchase" value=""><br><br>
        <label for="tax_rate">Tax Rate (%)</label>
        <input type="text" size="36" id="tax_rate" name="tax_rate" value=""> <br><br>
        <input type="hidden" name="step" value="1">
        <input type="submit" name="submit" value="Go forth and calculate my tax, Machine.">
    </form>
<?php

}

else

{

    if (is_numeric($purchase) && is_numeric($tax_rate))

    {
        $purchase = (float)$purchase;
        $tax_rate = (float)$tax_rate;
        $tax_decimal = $tax_rate / 100;
        $tax_amount = $purchase * $tax_decimal;
        $total = $purchase + $tax_amount;
        echo('<h2>Results</h2>');
        echo("<p>Purchase Amount: $" . number_format($purchase, 2) . "</p>");
        echo("<p>Tax Rate: " . number_format($tax_rate, 2) . "%</p>");
        echo("<p>Tax Amount: $" . number_format($tax_amount, 2) . "</p>");
        echo("<h3>Total Cost: $" . number_format($total, 2) . "</h3>");
    }

    else

    {
        echo('<p class="red">TRY AGAIN!/p>');
    }

?>

    <form action="week4.php" method="POST">
        <input type="hidden" name="step" value="0">
        <input type="submit" name="submit" value="Try Again">
    </form>

<?php

}
include('../includes/footer.php');
?>