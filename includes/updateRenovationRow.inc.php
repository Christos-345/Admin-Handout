<?php

if (isset($_POST['submitEditRenovation'])) {
    require_once 'dbh.inc.php';

    $propertyID = $_POST['propertyID'];
    $renovationID = $_POST['renovationID'];
    $description = $_POST['description'];

    //Update field in database
    $sql = "UPDATE renovations SET propertyID=?, description=? WHERE renovationID=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location:../renovations.php?');
        
    }

    mysqli_stmt_bind_param($stmt, "isi", $propertyID, $description, $renovationID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location:../renovations.php?error=stmtFailed');
        
    } else {
        header('Location:../renovations.php?update=successful');
        
    }
    mysqli_stmt_close($stmt);
    
    exit();
} else {
    header('Location:../renovations.php');
    exit();
}
