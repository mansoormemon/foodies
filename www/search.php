<?php
    session_start();

    include "dbh.php";

    $searchQuery = $_GET['query'];
    $searchBasedOn = $_GET['basedOn'];

    $rows = "<nil>";
    if ($searchBasedOn == "food_items") {
        $employees = [];
        $sql = "SELECT * FROM fooditem WHERE NAME LIKE '%$searchQuery%'";
        $result = mysqli_query($conn, $sql);

        // Iterate through each row
        while ($row = mysqli_fetch_assoc($result)) {
            // Access individual columns of the row
            $id = $row["FOOD_ITEM_ID"];
            $name = $row['NAME'];
            $desc = $row['DESCRIPTION'];
            $price = $row['PRICE'];

            $employees[] = array('id' => $id, 'name'=> $name, 'desc'=> $desc, 'price' => $price);
        }

        echo $jsonformat = json_encode($employees);
        
    } else if ($searchBasedOn == "restaurants") {
        echo "restaurants";
    } else if ($searchBasedOn == "price") {
        echo "price";
    }
?>
