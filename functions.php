<?php
/**
 * @author Shayna Jamieson
 * @version 1.0
 * Date: 1/6/2020
 * URL: http://sjamieson.greenriverdev.com/328/pp1/functions.php
 * Assignment: Pair Program 1
 */

// error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// this function takes an array in and prints each item
// on a new line
function printArr($arr) {
    try {
        foreach($arr as $item) {
            echo $item."<br>";
        }
    } catch(Exception $e) {
        echo "Could not print array: $e";
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
        echo "Largest: $largest<br>";
    } catch(Exception $e) {
        echo "Could not calculate largest: $e";
    }
}

// this function takes an array in and removes duplicates
// it then echos the result on index.php as [1, 2, 3]
function removeDups($arr) {
    try {
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

        echo "Remove Duplicates: $returnString<br>";
    } catch(Exception $e) {
        echo "Could not remove duplicates: $e";
    }
}

// this function takes an array in and returns an associative array with
// each value from the original array and how many times that value occurs
// in the original array (with keys sorted)
function distribution($arr) {
    $assocArr = array();
    try {
        foreach($arr as $item) {
            if(!array_key_exists($item, $assocArr)) {
                $assocArr[$item] = 1;
            } else {
                $tempNum = $assocArr[$item];
                $assocArr[$item] = $tempNum + 1;
            }
        }

        ksort($assocArr);

        $returnString = "[";
        foreach($assocArr as $key => $value) {
            $returnString .= "".$key."=>".$value.", ";
        }

        $returnString = substr($returnString, 0, strlen($returnString) - 2);
        echo "Distribution: $returnString]";

    } catch(Exception $e) {
        echo "Could not distribute: $e";
    }
}
