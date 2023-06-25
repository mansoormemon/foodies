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

            $fooditems[] = array('id' => $id, 'name'=> $name, 'desc'=> $desc, 'price' => $price);
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

            $restaurants[] = array('id' => $id, 'name'=> $name, 'address'=> $address);
        }

        echo $jsonformat = json_encode($restaurants);
    } else if ($searchBasedOn == "price") {
        echo "price";
    }
?>
