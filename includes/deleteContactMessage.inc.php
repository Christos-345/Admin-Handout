<?php
if (isset($_POST['waitListID'])  && !empty($_POST['waitListID'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['waitListID'];

    $sql = "DELETE FROM contactwaitlist WHERE waitListID = ?";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../contactUs.php?deletion=success');
            exit();
        } else {
            header('Location: ../contactUs.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    if (empty($_POST['waitListID'])) {
        header('Location: ../contactUs.php?deletion=empty');
        exit();
    }
}
