<?php
if (isset($_POST['entryID'])  && !empty($_POST['entryID'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['entryID'];

    $sql = "DELETE FROM newsletter where entryID = ?;";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../newsletter.php?deletion=success');
            exit();
        } else {
            header('Location: ../newsletter.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    if (empty($_POST['entryID'])) {
        header('Location: ../newsletter.php?deletion=empty');
        exit();
    }
}
