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
    $description = $_POST['description'];
    $postDate =  date("Y-m-d");
    $lastDate =  date("Y-m-d");
    $view = 0;
    $active = 1;
    $userID = $_SESSION['userID'];
    
   
    //error handlers


    //prepare data
    

    if(mysqli_query($conn,'INSERT INTO properties(type,category,town,area,address,brand,state,description,postDate,lastDate,active,views,userID) VALUES ("'.$type.'", "'.$category.'","'.$town.'", "'.$area.'", "'.$address.'","'.$brand.'", "'.$state.'","'.$description.'","'.$postDate.'","'.$lastDate.'","'.$active.'","'.$view.'","'.$userID.'");')){
        header("Location: ../properties.php?insert=successful");
    }else{
        header('Location: ../properties.php?insert=fail');
    }    
    
}else{
    header('Location: ../insertProperty.inc.php');
    exit();
}