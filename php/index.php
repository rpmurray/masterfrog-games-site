<html>
<body>
    <?php
    // if test not set, redirect to html site
    if (empty($_GET['test'])) {
        header("Location: /html");
        exit();
    }

    // otherwise execute PHP test
	echo "PHP v" . explode('-', PHP_VERSION)[0] . " is operational on " . $_SERVER['SERVER_NAME'] . " at " . date("h:i:s A e") . " on " . date("l, F d, Y") . "!";
    ?>
</body>
</html>
