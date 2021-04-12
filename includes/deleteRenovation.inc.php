<?php
if (isset($_POST['submitDeleteRenovation'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['renovationID'];
    
    //Delete renovation details from table
    $sql = "DELETE FROM renovations where renovationID = ?";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);


        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../renovations.php?deletion=success');
            exit();
        } else {
            header('Location: ../renovations.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {

    header('Location: ../renovations.php?deletion=empty');
    exit();
}
