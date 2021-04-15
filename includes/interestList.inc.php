<?php
    
    if(isset($_POST['submit'])){
      
    include_once 'dbh.inc.php';
    
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sbjct = mysqli_real_escape_string($conn, $_POST['sbjct']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    $sql = "INSERT INTO contactmanualwaitlist (firstname, lastname, phoneNo, email, subject, message ) VALUES (?,?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "SQL error";
    }else{
        mysqli_stmt_bind_param($stmt,"ssisss", $first, $last, $phone, $email, $sbjct, $msg);
        mysqli_stmt_execute($stmt);
    }             
        header('Location: ../waitingList.php?insert=success');
        exit();
  }

else if(isset($_POST['cancel'])){
        header('Location: ../waitingList.php?insert=cancel');
        exit();
}
else{
        header('Location: ../waitingList.php?insert=error');
        exit();
}