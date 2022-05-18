<?php
session_start();
if (isset($_POST['submitInsertProperty'])){
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Get Variable data
    $type = mysqli_real_escape_string($conn,$_POST['type']);
    $category =  mysqli_real_escape_string($conn,$_POST['category']);
    $town = mysqli_real_escape_string($conn,$_POST['town']);
    $area =  mysqli_real_escape_string($conn,$_POST['area']);
    $address =  mysqli_real_escape_string($conn,$_POST['address']);  
    $brand =  mysqli_real_escape_string($conn,$_POST['brand']);
    $state =  mysqli_real_escape_string($conn,$_POST['state']);
    $descripion =  mysqli_real_escape_string($conn,$_POST['description']);
    $postDate =  date("Y-m-d");
    $lastDate =  date("Y-m-d");
    
   
    //error handlers


    //prepare data
    

    if(mysqli_query($conn,'INSERT INTO properties(type,category,town,area,address,brand,state,description,postDate,lastDate) VALUES ("'.$type.'", "'.$category.'","'.$town.'", "'.$area.'", "'.$address.'","'.$brand.'", "'.$state.'","'.$description.'","'.$postDate.'","'.$lastDate.'");')){
        header("Location: ../properties.php?insert=successful");
    }else{
        header('Location: ../properties.php?insert=fail');
    }    
    
}else{
    header('Location: ../insertProperty.inc.php');
    exit();
}