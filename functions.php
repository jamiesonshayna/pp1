<?php
/**
 * @author Shayna Jamieson
 * @version 1.0
 * @date 1/6/2020
 * @url http://sjamieson.greenriverdev.com/328/pp1/functions.php
 * @Assignment Pair Program 1
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

// this function takes an array in and finds the largest number
// it then prints the number on a line in index.php
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

// this function takes an array in and removes duplicates
// it then echos the result on index.php as [1, 2, 3]
function removeDups($arr) {
    $tempArr = [];
    $returnString = "[";

    foreach($arr as $item) {
        if(!in_array($item, $tempArr)) {
            array_push($tempArr, $item);
            $returnString .= "$item, ";
        }
    }

    $returnString = substr($returnString, 0, strlen($returnString) - 2);
    $returnString .= "]";

    echo $returnString;
}
