<?php
if (isset($_POST['MWaitListID'])  && !empty($_POST['MWaitListID'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['MWaitListID'];

    $sql = "DELETE  FROM contactmanualwaitlist WHERE MWaitListID = ?;";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../waitingList.php?deletion=success');
            exit();
        } else {
            header('Location: ../waitingList.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    if (empty($_POST['MWaitListID'])) {
        header('Location: ../waitingList.php?deletion=empty');
        exit();
    }
}
