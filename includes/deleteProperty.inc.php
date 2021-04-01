<?php
if (isset($_POST['propertyID'])  && !empty($_POST['propertyID'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['propertyID'];

    $sql = "DELETE FROM properties where propertyID = ?";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../properties.php?deletion=success');
            exit();
        } else {
            header('Location: ../properties.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    if (empty($_POST['propertyID'])) {
        header('Location: ../properties.php?deletion=empty');
        exit();
    }
}
