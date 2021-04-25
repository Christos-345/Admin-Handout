<?php
session_start();
if (isset($_POST['submitInsertProperty'])){
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Get Variable data
    $typeOfProperty = mysqli_real_escape_string($conn,$_POST['type']);
    $category =  mysqli_real_escape_string($conn,$_POST['category']);
    $country = mysqli_real_escape_string($conn,$_POST['country']);
    $city =  mysqli_real_escape_string($conn,$_POST['city']);
    $region =  mysqli_real_escape_string($conn,$_POST['region']);
    $address =  mysqli_real_escape_string($conn,$_POST['address']);  
    $bedrooms =  mysqli_real_escape_string($conn,$_POST['bedrooms']);
    $bathrooms =  mysqli_real_escape_string($conn,$_POST['bathrooms']);
    $furniture =  mysqli_real_escape_string($conn,$_POST['furniture']);
    $parking =  mysqli_real_escape_string($conn,$_POST['parking']);
    $floor =  mysqli_real_escape_string($conn,$_POST['floor']);
    $heating =  mysqli_real_escape_string($conn,$_POST['heating']);
    $dateOfBuild =  mysqli_real_escape_string($conn,$_POST['dateOfBuild']);
    $availableFrom =  mysqli_real_escape_string($conn,$_POST['availableFrom']);
    $sqm =  mysqli_real_escape_string($conn,$_POST['sqm']);
    $totalPrice =  mysqli_real_escape_string($conn,$_POST['totalPrice']);
    $description =  mysqli_real_escape_string($conn,$_POST ['description']);
    $amenities =  mysqli_real_escape_string($conn,$_POST['amenities']);
    $displayCarousel = mysqli_real_escape_string($conn,$_POST['displayCarousel']);
    $location = mysqli_real_escape_string($conn,$_POST['location']);
    
    $priceperSqrM =  (float)$sqm/(float)$totalPrice;
    //error handlers


    //prepare data
    if($parking == 'yes'){
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
    }
    if($displayCarousel == 'yes'){
        $dbDisplayCarousel = 1;
    }else if ($displayCarousel == 'no' || $displayCarousel == ''){
        $dbDisplayCarousel= 0;
    }

    if(mysqli_query($conn,'INSERT INTO properties(type,category,country,town,area,squarem,address,bedrooms,bathrooms,parking,heating,furniture,floor,dateOfBuild,availableFrom,pricePerSqm,totalPrice,description,amenities,displayCarousel,location) VALUES ("'.$typeOfProperty.'", "'.$category.'","'.$country.'", "'.$city.'", "'.$region.'","'.$sqm.'", "'.$address.'","'.$bedrooms.'", "'.$bathrooms.'","'.$dbParking.'","'.$dbHeating.'", "'.$dbFurniture.'","'.$floor.'", "'.$dateOfBuild.'","'.$availableFrom.'","'.$priceperSqrM.'","'.$totalPrice.'",'.$description.',"'.$amenities.'","'.$dbDisplayCarousel.'","'.$location.'");')){
        header("Location: ../properties.php?insert=successful");
    }else{
        header('Location: ../properties.php?insert=fail');
    }    
    
}else{
    header('Location: ../insertProperty.inc.php');
    exit();
}