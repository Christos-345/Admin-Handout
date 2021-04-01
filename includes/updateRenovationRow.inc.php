<?php

if (isset($_POST['submitRenovation'])) {
    require_once 'dbh.inc.php';

    $propertyID = $_POST['propertyID'];
    $renovationID = $_POST['renovationID'];
    $description = $_POST['description'];

    //Update field in database
    $sql = "UPDATE renovations SET propertyID=?, description=? WHERE renovationID=?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location:../renovations.php?');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "isi", $propertyID, $description, $renovationID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location:../renovations.php?stmtFailed');
        exit();
    } else {
        header('Location:../renovation.php?update=successful');
        exit();
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit();
} else {
    header('Locaiton:../renovation.php');
    exit();
}
