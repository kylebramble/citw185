<?php

echo('    </div>');    // end of content

echo('    <hr>');
echo('    <h2>CODE FOLLOWS</h2>');

/* Shows the code from the PHP page currently being viewed. */
highlight_file($_SERVER['SCRIPT_FILENAME']);

echo('    <hr>');

echo('    <div class="navcontainer-bottom">');
echo('        <ul class="navlist">');
echo('            <li><a href="../index.php">Back</a></li>');
echo('        </ul>');
echo('    </div>');

echo('</div>');    // end of page

echo('</body>');
echo('</html>');