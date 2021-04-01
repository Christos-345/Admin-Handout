<?php

if (isset($_POST['submitRenovation'])){
    session_start();
    include 'dbh.inc.php';
    include 'functions.inc.php';

    //Get Variable data
    
    $propertyID = mysqli_real_escape_string($conn,$_POST['propertyID']);
    $description= mysqli_real_escape_string($conn,$_POST['description']);


    //error handlers
    if(mysqli_query($conn,'INSERT INTO renovations(propertyID,description) VALUES ("'.$propertyID.'","'. $description.'");')){ 
        header("Location: ../renovations.php?insert=successful");
    }else{
        header('Location: ../renovations.php?insert=fail');
    }    
    
}else{
    header('Location:../renovations.php');
    exit();
}
