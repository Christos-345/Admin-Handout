<?php

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';
    
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO users (firstname, lastname, phoneNo, email, password, role, userActive ) VALUES (?,?,?,?,?,1,0);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "SQL error";
    }else{

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"ssiss", $first, $last, $phone, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
    }             
        header('Location: ../admins.php?registration=success');
        exit();
}

else if(isset($_POST['cancel'])){
    header('Location: ../admins.php?registration=cancel');
    exit();
}
else{
    header('Location: ../admins.php?registration=error');
    exit();
}