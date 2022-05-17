<?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){


    //Get Variable data
    
    $town = mysqli_real_escape_string($conn,$_POST['town']);

    $getQuery2 = "UPDATE properties SET category = '$category', brand = '$brand', description = '$description', state = '$state'WHERE propertyID=$propertyID"; 
    $sql= "SELECT * from properties WHERE town = $town";
    //error handlers
    //prepare data
    
}