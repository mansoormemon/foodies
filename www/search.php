<?php
session_start();

include "dbh.php";

$searchQuery = $_GET['query'];
$searchBasedOn = $_GET['basedOn'];

$rows = "<nil>";
if ($searchBasedOn == "food_items") {
    $fooditems = [];
    $sql = "SELECT * FROM fooditem WHERE NAME LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    // Iterate through each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Access individual columns of the row
        $id = $row["FOOD_ITEM_ID"];
        $name = $row['NAME'];
        $desc = $row['DESCRIPTION'];
        $price = $row['PRICE'];

        $fooditems[] = array('id' => $id, 'name' => $name, 'desc' => $desc, 'price' => $price);
    }

    echo $jsonformat = json_encode($fooditems);
} else if ($searchBasedOn == "restaurants") {
    $restaurants = [];
    $sql = "SELECT * FROM restaurant WHERE NAME LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    // Iterate through each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Access individual columns of the row
        $id = $row["RESTAURANT_ID"];
        $name = $row['NAME'];
        $address = $row['ADDRESS'];

        $restaurants[] = array('id' => $id, 'name' => $name, 'address' => $address);
    }

    echo $jsonformat = json_encode($restaurants);
} else if ($searchBasedOn == "price") {
    $fooditems = [];

    $ret_val = parseRangeString($searchQuery);
    $min = 0;
    $max = 10000;

    $MAX_PRICE = 10000;
    $MIN_PRICE = 0;

    if ($ret_val != null) {
        if ($ret_val->operator == null) {
            $min = $ret_val->lowerBound;
            $max = $ret_val->upperBound;
        } else {
            if ($ret_val->operator == ">") {
                $min = $ret_val->lowerBound + 1;
                $max = $MAX_PRICE;
            } else if ($ret_val->operator == ">=") {
                $min = $ret_val->lowerBound;
                $max = $MAX_PRICE;
            } else if ($ret_val->operator == "<") {
                $min = $MIN_PRICE;
                $max = $ret_val->upperBound - 1;
            } else if ($ret_val->operator == "<=") {
                $min = $MIN_PRICE;
                $max = $ret_val->upperBound;
            }
        }
    }

    $query = "SELECT * FROM fooditem WHERE PRICE BETWEEN $min AND $max";
    $result = mysqli_query($conn, $query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["FOOD_ITEM_ID"];
        $name = $row['NAME'];
        $desc = $row['DESCRIPTION'];
        $price = $row['PRICE'];

        $fooditems[] = array('id' => $id, 'name' => $name, 'desc' => $desc, 'price' => $price);
    }

    echo $jsonformat = json_encode($fooditems);
}

?>


<?php

function parseRangeString($rangeString) {
    $regex = '/^(>=|<=|>|<)?\s?(\d+)\s?(-\s?(\d+))?$/';

    $matches = [];
    if (!preg_match($regex, $rangeString, $matches)) {
        // Invalid range string
        return null;
    }

    $operator = $matches[1];
    $lowerBound = intval($matches[2]);
    $upperBound = isset($matches[4]) ? intval($matches[4]) : $lowerBound;

    return (object) [
        'operator' => $operator,
        'lowerBound' => $lowerBound,
        'upperBound' => $upperBound
    ];
}

?>
