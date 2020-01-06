<?php
/**
 * @author Shayna Jamieson
 * @version 1.0
 * @date 1/6/2020
 * @url http://sjamieson.greenriverdev.com/328/pp1/index.php
 * @name Pair Program 1
 */

    // error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <?php
        // define an array of numbers
        $numbers = [7, 9, 8, 9, 8, 8, 6];

        // call the function printArr
        printArr($numbers);

        // call the function largest
        largest($numbers);
    ?>

</body>
</html>
