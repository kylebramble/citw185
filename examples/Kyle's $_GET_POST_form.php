<?php

    include('includes/header.php');

    // code
    error_reporting(E_ALL);

    echo('<h1>Kyle\'s $_GET_POST form</h1>');

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

    // list code
    echo('<hr>CODE FOLLOWS<br><br>');
    highlight_file(__FILE__);
    echo('<hr>');

    include('includes/footer.php');

?>