<?php

if (isset($_POST['submitInsertProperty'])){

    require_once 'dbh.inc.php';

    //Get Variable data
    $propertyID = 1;
    $typeOfProperty = $_POST['type'];
    $category = $_POST['category'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $address = $_POST['address'];  
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $furniture = $_POST['furniture'];
    $parking = $_POST['parking'];
    $floors = $_POST['floor'];
    $heating = $_POST['heating'];
   // $dateOfBuild = $_POST['dateOfBuild'];
   // $availableFrom = $_POST['availableFrom'];
    $dateOfBuild = '2020-01-01';
    $availableFrom = '2020-01-01';
    $sqm = $_POST['sqm'];
    $priceperSqrM = $_POST['pricePerSqrM'];
    $totalPrice = $_POST['totalPrice'];
    $description = $_POST ['description'];
    $amenities = $_POST['amenities'];

    //error handlers


    //prepare data
    /*if($parking == 'yes'){
        $dbParking = 1;
    }else if ($parking = 'no' || $parking=''){
        $dbParking = 0;
    }

    if($heating == 'yes'){
        $dbHeating = 1;
    }else if ($heating == 'no' || $parking == ''){
        $dbHeating = 0;
    }
    if($furniture == 'yes'){
        $dbFurniture = 1;
    }else if ($furniture == 'no' || $furniture == ''){
        $dbFurniture = 0;
    }*/
   // $sql = 'INSERT INTO properties(types,category,town,area,squarem,address,bedrooms,bathrooms,parking,heating,furniture,floors,dateOfBuild,availableFrom,pricePerSqm,totalPrice,description,amenities) VALUES ("'.$typeOfProperty.'", "'.$category.'","'.$city.'", "'.$region.'","'.$sqm.'", "'.$address.'","'.$bedrooms.'", "'.$bathrooms.'","'.$parking.'", "'.$password.'","'.$heating.'", "'.$furniture.'","'.$floors.'", "'.$dateOfBuild.'","'.$availableFrom.'","'.$priceperSqrM.'","'.$totalPrice.'","'.$description.'","'.$amenities.'");';
    if(mysqli_query($conn,'INSERT INTO properties(types,category,town,area,squarem,address,bedrooms,bathrooms,parking,heating,furniture,floors,dateOfBuild,availableFrom,pricePerSqm,totalPrice,description,amenities) VALUES ("'.$typeOfProperty.'", "'.$category.'","'.$city.'", "'.$region.'","'.$sqm.'", "'.$address.'","'.$bedrooms.'", "'.$bathrooms.'","'.$parking.'","'.$heating.'", "'.$furniture.'","'.$floors.'", "'.$dateOfBuild.'","'.$availableFrom.'","'.$priceperSqrM.'","'.$totalPrice.'","'.$description.'","'.$amenities.'");')){
        header('Location: ../properties.php?insert=success');
    }else{
        header('Location: ../properties.php?insert=fail');
    }    
    
}else{
    header('Location: ../insertProperty.inc.php');
    exit();
}