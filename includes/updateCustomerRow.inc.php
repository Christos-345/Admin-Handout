<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'dbh.inc.php';
    $userID = $_POST['userID'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $city = $_POST['city'];
    $occupation = $_POST['occupation'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $address = $_POST['address'];


    //Update field in database
    $sql = "UPDATE users SET firstname = ? ,lastname = ?, phoneNo = ?, email = ?, city = ?, occupation = ?, gender = ?, address = ?, role = ? WHERE  userID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../customers.php?error=stmtFailed');
        exit();
    }

    
    mysqli_stmt_bind_param($stmt, "ssisssssii", $firstname, $lastname, $telephone, $email, $city, $occupation, $gender, $address, $role,  $userID);

    if (!mysqli_stmt_execute($stmt)) {
        header('Location:../customers.php?error=stmtFailed');
        exit();
    } else {
        header('Location:../customers.php?update=successful');
        exit();
    }

    mysqli_stmt_close($stmt);
    exit();
}else{
    header('Location:../customers.php');
    exit();
}
