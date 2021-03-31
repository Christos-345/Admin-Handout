<?php


    require_once 'dbh.inc.php';

    $propertyID = (int)$_POST['propertyID'];

    $sql = "DELETE FROM properties WHERE propertyID = $propertyID";
    
    if(mysqli_query($conn,$sql)){
        header('Location:../properties.php?delete=success');
        exit();
    }else{
        header('Location:../properties.php?delete=fail');
        exit();
    }


