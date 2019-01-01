<?php

require "dbconnection.php";

function getCats()
{
    global $con;
    $getCatQuery = "Select * from categories";
    $getCatResult = mysqli_query($con, $getCatQuery);

    while($row = mysqli_fetch_assoc($getCatResult)) {
        $id = $row['cat_id'];
        $title = $row['cat_title'];
        echo "<option>$title</option>";
    }
}

function getBrands()
{
    global $con;
    $getCatQuery = "Select * from brands";
    $getCatResult = mysqli_query($con, $getCatQuery);

    while($row = mysqli_fetch_assoc($getCatResult)) {
        $id = $row['brand_id'];
        $title = $row['brand_title'];
        echo "<option>$title</option>";
    }
}