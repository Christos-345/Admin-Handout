<?php

include_once 'dbh.inc.php';

if(isset($_POST['submitPro'])){
$propertyID = $_POST['propertyID'];

//Check if user is trying to update multimedia and replace all previous records from folder
$sqlSel = "SELECT propertyID FROM multimediaproperties WHERE propertyID = $propertyID;";
$result = mysqli_query($conn, $sqlSel);
$resultCheck = mysqli_num_rows($result);

$pictures_array = array("photo1","photo2","photo3","photo4","photo5","photo6","photo7","photo8","photo9","photo10");
$threeDpictures_array = array("3DPhoto1","3DPhoto2","3DPhoto3","3DPhoto4","3DPhoto5","3DPhoto6","3DPhoto7","3DPhoto8","3DPhoto9","3DPhoto10");
$array_size = sizeof($pictures_array);

//Check if user is trying to update files and unlink old files based on propertyID
if($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);

    if(($row['propertyID'] = $propertyID) != NULL){

      $selectSql = "SELECT * FROM multimediaproperties WHERE propertyID = $propertyID";
      $rsSelect = mysqli_query($conn, $selectSql);
      $getRow = mysqli_fetch_assoc($rsSelect);

      if (($getVideo = $getRow['video']) == NULL) {
        //Do nothing jump to else.
      } elseif(file_exists($getVideo)){
        unlink($createDeletePath1 = "../../Real-Estate-Website/multimedia/" . $getVideo);
      }

     for ($i = 0; $i < $array_size; $i++) {

        if (($getImageName = $getRow["$pictures_array[$i]"]) == NULL) {
            continue;
        }elseif(file_exists($getImageName)){
            unlink($createDeletePath2 = "../../Real-Estate-Website/multimedia/" . $getImageName);
        }

        if (($get3DImageName = $getRow["$threeDpictures_array[$i]"]) == NULL) {
            continue;
        } elseif(file_exists($get3DImageName)){
            unlink($createDeletePath3 = "../../Real-Estate-Website/multimedia/" . $get3DImageName);
        }
      }

    }
}
//Insert new propertyID with new multimedia
else{
  $sql = "INSERT INTO multimediaproperties (propertyID) VALUES ($propertyID);";
  mysqli_query($conn,$sql);
}

$countfiles1 = count($_FILES['file1']['name']);
$countfiles2 = count($_FILES['file2']['name']);
$extensions_arr = array("jpg","jpeg","png","mp4");
$target_dir = "../../Real-Estate-Website/multimedia/";
//$target_database = "multimedia/";

//Before Pictures query
for($i=0; $i<$countfiles1; $i++){

  $filename1 = $_FILES['file1']['name'][$i];
  $target_file1 = ($target_dir) . basename($_FILES['file1']['name'][$i]);
  $file_size1 = $_FILES['file1']['size'][$i];
  $file_type1 = $_FILES['file1']['type'][$i];

  if($file_size1 > 2097152){
    exit(header("Location: ../properties.php?upload=largefile"));
  }

  $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

  if(in_array($imageFileType,array("png","jpeg"))){

     $query1 = "UPDATE multimediaproperties SET $pictures_array[$i] = ('$target_file1') WHERE propertyID = $propertyID;";
     
     mysqli_query($conn,$query1);
  
     move_uploaded_file($_FILES['file1']['tmp_name'][$i],$target_dir.$filename1);
      }
  }

//3D pictures query
for($b=0; $b<$countfiles2; $b++){

    $filename2 = $_FILES['file2']['name'][$b];
    $target_file2 = ($target_dir) . basename($_FILES['file2']['name'][$b]);
    $file_size2 = $_FILES['file2']['size'][$b];
    $file_type2 = $_FILES['file2']['type'][$b];

    if($file_size2 > 2097152){
      exit(header("Location: ../properties.php?upload=largefile"));
    }

    $imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

    if( in_array($imageFileType,array("jpg"))){
      
       $query2 = "UPDATE multimediaproperties SET $threeDpictures_array[$b] = ('$target_file2') WHERE propertyID = $propertyID;";
       
       mysqli_query($conn,$query2);
    
       move_uploaded_file($_FILES['file2']['tmp_name'][$b],$target_dir.$filename2);
    }
  }

    // video query
    $filename3 = $_FILES['file3']['name'];
    $target_file3 = ($target_dir) . basename($_FILES['file3']['name']);
    $file_size3 = $_FILES['file3']['size'];
    $file_type3 = $_FILES['file3']['type'];

    if($file_size3 > 2097152){
      exit(header("Location: ../properties.php?upload=largefile"));
    }

    $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

    if( in_array($imageFileType,array("mp4"))){

       $query3 = "UPDATE multimediaproperties SET video = ('$target_file3') WHERE propertyID = $propertyID;";
       
       mysqli_query($conn,$query3);
    
       move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$filename3);
     }
     
  header("Location: ../properties.php?upload=success");
  exit();
}
else{
  header("Location: ../properties.php?upload=fail");
  exit();
}