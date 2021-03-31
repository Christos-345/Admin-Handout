<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'dbh.inc.php';
    $userID = $_POST['userID'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    //Update field in database
    $sql = "UPDATE users SET firstname = ? ,lastname = ?, phoneNo = ?, email = ? WHERE  userID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../admins.php?error=stmtFailed');
        exit();
    }

    
    mysqli_stmt_bind_param($stmt, "ssisi", $firstname, $lastname, $telephone, $email, $userID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location:../admins.php?stmtFailed');
        exit();
    } else {
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['telephone'] = $telephone;
        $_SESSION['email'] = $email;
        header('Location:../admins.php?update=successful');
        exit();
    }

    mysqli_stmt_close($stmt);
}
