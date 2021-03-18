<?php

if (isset($_POST['submitInsertProperty'])){

    require_once 'dbh.inc.php';

    //Get Variable data
    $propertyID = 1;
    $type = $_POST['type'];
    $category = $_POST['category'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $address = $_POST['address'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $parking = $_POST['parking'];
    $floor = $_POST['floor'];
    $furniture = $_POST['furniture'];
    $heating = $_POST['heating'];
    $dateOfBuild = $_POST['dateOfBuild'];
    $availableFrom = $_POST['availableFrom'];
    $sqm = $_POST['sqm'];
    $priceperSqrM = $_POST['pricePerSqrM'];
    $totalPrice = $_POST['totalPrice'];
    $description = $_POST ['description'];
    $amenities = $_POST['amenities'];

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
    
   


    //add to database
    
    /*$sql = 'INSERT INTO properties(type,category,town,area,squarem,address,bedrooms,bathrooms,parking,heating,furniture,floor,dateOfBuild,availableFrom,pricePerSqm,totalPrice,propertyDescription,amenitiesDescription) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);';   
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location:../properties.php?error=stmtFailed');
        exit();
    }else {
        mysqli_stmt_bind_param($stmt,"ssssdsiiiiiissddss",$type,$category,$city,$region,$sqm,$address,$bedrooms,$bathrooms,$dbParking,$dbHeating,$dbFurniture,$floor,$newDateOfBuild,$newAvailableFrom,$priceperSqrM,$totalPrice,$description,$amenities);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }*/
    mysqli_query($conn,'INSERT INTO properties(type,category,town,area,squarem,address,bedrooms,bathrooms,parking,heating,furniture,floor,dateOfBuild,availableFrom,pricePerSqm,totalPrice,propertyDescription,amenitiesDescription) VALUES ($type,$category,$city,$region,$sqm,$address,$bedrooms,$bathrooms,$dbParking,$dbHeating,$dbFurniture,$floor,$newDateOfBuild,$newAvailableFrom,$priceperSqrM,$totalPrice,$description,$amenities);');
        header('Location: ../properties.php?error=none');
    
}else{
    header('Location: ../insertProperty.inc.php');
    exit();
}