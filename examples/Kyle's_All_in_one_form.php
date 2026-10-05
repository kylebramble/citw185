<?php

    include('includes/header.php');

    $self = htmlspecialchars(basename($_SERVER['SCRIPT_NAME']));

    // populate the fruit array
    $fruit = array("Apple", "Pear", "Orange", "Mango", "Apricot", "Pineapple");

    // populate vars from POST
    $submit = isset($_POST['submit']) ? $_POST['submit'] : null;
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
    $full_time = isset($_POST['full_time']) ? $_POST['full_time'] : null;
    $admin = isset($_POST['admin']) ? $_POST['admin'] : null;

    // populate choice from radio input
    if (isset($_POST['choice']))
        {
        $choice = $_POST['choice'];
        }
    else
        {
        $choice = '';
        }

    // populate option array from select control
    $option = array();

    if (isset($_POST['option']))
        {
        foreach ($_POST['option'] as $value)
            {
            $option[] = $value;
            }
        }

    // populate option array from select control
    $option2 = array();

    if (isset($_POST['option2']))
        {
        foreach ($_POST['option2'] as $value)
            {
            $option2[] = $value;
            }
        }

    // set what was checked
    $s = ' SELECTED ';
    $c = ' CHECKED ';

    $full_time = ($full_time == 'on') ? $c : '';
    $admin = ($admin == 'on') ? $c : '';
?>

<h1>Kyle's All in One form</h1>

<form action="<?php echo($self); ?>" method="post">

    <fieldset>
        <legend>Text:</legend>

        <label for="first_name">First Name</label>
        <input type="text" size="30" id="first_name" name="first_name"
               value="<?php echo($first_name); ?>">
        <br>

        <label for="last_name">Last Name</label>
        <input type="text" size="30" id="last_name" name="last_name"
               value="<?php echo($last_name); ?>">
    </fieldset>

    <br>

    <fieldset>
        <legend>Checkbox:</legend>

        <label for="full_time">Full Time</label>
        <input type="checkbox" id="full_time" name="full_time"
               <?php echo($full_time); ?>>
        <br>

        <label for="admin">Admin</label>
        <input type="checkbox" id="admin" name="admin"
               <?php echo($admin); ?>>
    </fieldset>

    <br>

    <fieldset>
        <legend>Radio:</legend>

        <label>Fruit</label>
        <br>

        <input type="radio" name="choice" value="Apple"
            <?php
                if ($choice == 'Apple')
                    {
                    echo($c);
                    }
            ?>
        > Apple<br>

        <input type="radio" name="choice" value="Pear"
            <?php
                if ($choice == 'Pear')
                    {
                    echo($c);
                    }
            ?>
        > Pear<br>

        <input type="radio" name="choice" value="Orange"
            <?php
                if ($choice == 'Orange')
                    {
                    echo($c);
                    }
            ?>
        > Orange<br>

        <input type="radio" name="choice" value="Mango"
            <?php
                if ($choice == 'Mango')
                    {
                    echo($c);
                    }
            ?>
        > Mango<br>

        <input type="radio" name="choice" value="Apricot"
            <?php
                if ($choice == 'Apricot')
                    {
                    echo($c);
                    }
            ?>
        > Apricot<br>

    </fieldset>

    <br>

    <fieldset>
        <legend>Dropdown:</legend>

        <label for="option">Fruit</label>
        <br>

        <select id="option" name="option[]">

            <option value="Apple"
                <?php if (in_array('Apple', $option))
                    {
                    echo($s);
                    } ?>
            >Apple</option>

            <option value="Pear"
                <?php if (in_array('Pear', $option))
                    {
                    echo($s);
                    } ?>
            >Pear</option>

            <option value="Orange"
                <?php if (in_array('Orange', $option))
                    {
                    echo($s);
                    } ?>
            >Orange</option>

            <option value="Mango"
                <?php if (in_array('Mango', $option))
                    {
                    echo($s);
                    } ?>
            >Mango</option>

            <option value="Apricot"
                <?php if (in_array('Apricot', $option))
                    {
                    echo($s);
                    } ?>
            >Apricot</option>

        </select>
    </fieldset>

    <br>

    <fieldset>
        <legend>Multiple:</legend>

        <label for="option2">Fruit</label>
        <br>

        <select id="option2" name="option2[]" multiple>

            <option value="Apple"
                <?php if (in_array('Apple', $option2))
                    {
                    echo($s);
                    } ?>
            >Apple</option>

            <option value="Pear"
                <?php if (in_array('Pear', $option2))
                    {
                    echo($s);
                    } ?>
            >Pear</option>

            <option value="Orange"
                <?php if (in_array('Orange', $option2))
                    {
                    echo($s);
                    } ?>
            >Orange</option>

            <option value="Mango"
                <?php if (in_array('Mango', $option2))
                    {
                    echo($s);
                    } ?>
            >Mango</option>

            <option value="Apricot"
                <?php if (in_array('Apricot', $option2))
                    {
                    echo($s);
                    } ?>
            >Apricot</option>

        </select>
    </fieldset>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<br>

<h2>Results</h2>

<br>

<?php

    // show results
    echo('<pre>');
    print_r($_POST);
    echo('</pre>');

?>

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