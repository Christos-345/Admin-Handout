<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'dbh.inc.php';
    $propertyID = $_POST['propertyID'];
    $type = $_POST['type'];
    $category = $_POST['category'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $address = $_POST['address'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $furniture = $_POST['furniture'];
    $parking = $_POST['parking'];
    $floor = $_POST['floor'];
    $heating = $_POST['heating'];
    $dateOfBuild = $_POST['dateOfBuild'];
    $availableFrom = $_POST['availableFrom'];
    $sqm = $_POST['sqm'];
    $pricePerSqm = $_POST['pricePerSqrM'];
    $totalPrice = $_POST['totalPrice'];
    $description = $_POST['description'];
    $amenities = $_POST['amenities'];
    //prepare data
    if ($parking == 'yes') {
        $dbParking = 1;
    } else if ($parking = 'no' || $parking = '') {
        $dbParking = 0;
    }

    if ($heating == 'yes') {
        $dbHeating = 1;
    } else if ($heating == 'no' || $parking == '') {
        $dbHeating = 0;
    }
    if ($furniture == 'yes') {
        $dbFurniture = 1;
    } else if ($furniture == 'no' || $furniture == '') {
        $dbFurniture = 0;
    }


    //Update field in database
    $sql = "UPDATE properties SET type=?,category=?,country=?,town=?,area=?,squarem=?,address=?,bedrooms=?,bathrooms=?,parking=?,heating=?,furniture=?,floor=?,dateOfBuild=?,availableFrom=?,pricePerSqm=?,totalPrice=?,description=?,amenities=?  WHERE  propertyID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../properties.php?error=stmtFailed');
        exit();
    }


    mysqli_stmt_bind_param($stmt, "sssssisiiiiiissiissi", $type, $category, $country, $city, $region, $sqm, $address, $bedrooms, $bathrooms, $dbParking, $dbHeating, $dbFurniture, $floor, $dateOfBuild, $availableFrom, $pricePerSqm, $totalPrice, $description, $amenities, $propertyID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location:../properties.php?stmtFailed');
        exit();
    } else {
        header('Location:../properties.php?update=successful');
        exit();
    }

    mysqli_stmt_close($stmt);
}
