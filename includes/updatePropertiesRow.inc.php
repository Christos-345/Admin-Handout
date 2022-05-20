<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'dbh.inc.php';
    $propertyID = $_POST['propertyID'];
    $type = $_POST['type'];
    $category = $_POST['category'];
    $town = $_POST['town'];
    $area = $_POST['area'];
    $address = $_POST['address'];
    $brand = $_POST['brand'];
    $state = $_POST['state'];
    $description = $_POST['description'];
    $active = $_POST['active'];

    


    //Update field in database
    $sql = "UPDATE properties SET type=?,category=?,town=?,area=?,address=?,brand=?,state=?,description=?,active=?  WHERE  propertyID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../properties.php?error=stmtFailed');
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssssssssii", $type, $category, $town, $area, $address, $brand, $state, $description, $active, $propertyID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location:../properties.php?error=stmtFailed');
        exit();
    } else {
        header('Location:../properties.php?update=successful');
        exit();
    }

    mysqli_stmt_close($stmt);
}else{
    header('Location:../properties.php');
    exit();
}
