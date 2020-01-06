<?php
/**
 * @author Shayna Jamieson
 * @version 1.0
 * @date 1/6/2020
 * @url http://sjamieson.greenriverdev.com/328/pp1/functions.php
 * @name Pair Program 1
 */

// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// this function takes an array in and prints each item
// on a new line
function printArr($arr) {
    foreach($arr as $item) {
        echo $item."<br>";
    }
}

function largest($arr) {
    try {
        $largest = $arr[0];
        for($i = 1; $i < count($arr); $i++) {
            if($arr[$i] > $largest) {
                $largest = $arr[$i];
            }
        }
    } catch(Exception $e) {
        print($e);
    }

    echo "Largest: $largest<br>";
}
