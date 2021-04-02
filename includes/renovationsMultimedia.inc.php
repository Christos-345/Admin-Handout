<?php

session_start();

include_once 'dbh.inc.php';

if(isset($_POST['submitReno'])){
$renovationID = $_POST['renovationID'];
$sql = "INSERT INTO multimediarenovations (renovationID) VALUES ($renovationID);";
mysqli_query($conn,$sql);
 
$countfiles1 = count($_FILES['file1']['name']);
$countfiles2 = count($_FILES['file2']['name']);

$target_dir = "../../Real-Estate-Website/multimedia/";

$beforePictures_array = array("beforePhoto1","beforePhoto2","beforePhoto3","beforePhoto4");
$afterPictures_array = array("afterPhoto1","afterPhoto2","afterPhoto3","afterPhoto4");

$extensions_arr = array("jpg","jpeg","png","mp4");

//Before Pictures query
for($i=0; $i<$countfiles1; $i++){

  $filename1 = $_FILES['file1']['name'][$i];
  $target_file1 = ($target_dir) . basename($_FILES['file1']['name'][$i]);
  $file_size1 = $_FILES['file1']['size'][$i];
  $file_type1 = $_FILES['file1']['type'][$i];
  
  $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
  
  if( in_array($imageFileType,array("png","jpeg","jpg"))){
 
     $query1 = "UPDATE multimediarenovations SET $beforePictures_array[$i] = ('$target_file1') WHERE renovationID = $renovationID;";
     
     mysqli_query($conn,$query1);
  
     move_uploaded_file($_FILES['file1']['tmp_name'][$i],$target_dir.$filename1);

  } 
  
}

//Aftter Pictures query
for($b=0; $b<$countfiles2; $b++){

    $filename2 = $_FILES['file2']['name'][$b];
    $target_file2 = ($target_dir) . basename($_FILES['file2']['name'][$b]);
    $file_size2 = $_FILES['file2']['size'][$b];
    $file_type2 = $_FILES['file2']['type'][$b];
    
    $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    
    if( in_array($imageFileType,array("png","jpeg","jpg"))){
   
       $query2 = "UPDATE multimediarenovations SET $afterPictures_array[$b] = ('$target_file2') WHERE renovationID = $renovationID;";
       
       mysqli_query($conn,$query2);
    
       move_uploaded_file($_FILES['file2']['tmp_name'][$b],$target_dir.$filename2);
  
    } 
  }

    //Before video query
    $filename3 = $_FILES['file3']['name'];
    $target_file3 = ($target_dir) . basename($_FILES['file3']['name']);
    $file_size3 = $_FILES['file3']['size'];
    $file_type3 = $_FILES['file3']['type'];
    
    $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
    
    if( in_array($imageFileType,array("mp4"))){
   
       $query3 = "UPDATE multimediarenovations SET videoBefore = ('$target_file3') WHERE renovationID = $renovationID;";
       
       mysqli_query($conn,$query3);
    
       move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$filename3);
  
    } 

    //After video query
    $filename4 = $_FILES['file4']['name'];
    $target_file4 = ($target_dir) . basename($_FILES['file4']['name']);
    $file_size4 = $_FILES['file4']['size'];
    $file_type4 = $_FILES['file4']['type'];
    
    $imageFileType = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
    
    if( in_array($imageFileType,array("mp4"))){
   
       $query4 = "UPDATE multimediarenovations SET videoAfter = ('$target_file4') WHERE renovationID = $renovationID;";
       
       mysqli_query($conn,$query4);
    
       move_uploaded_file($_FILES['file4']['tmp_name'],$target_dir.$filename4);
  
    } 

  header("Location: ../renovations.php?upload=success");
}