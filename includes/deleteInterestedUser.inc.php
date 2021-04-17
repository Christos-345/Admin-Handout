<?php
if (isset($_POST['interestID'])  && !empty($_POST['interestID'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['interestID'];

    $sql = "DELETE FROM contactinterestlist WHERE interestID = ? ;";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../messages.php?deletion=success');
            exit();
        } else {
            header('Location: ../messages.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    if (empty($_POST['interestID'])) {
        header('Location: ../messages.php?deletion=empty');
        exit();
    }
}
