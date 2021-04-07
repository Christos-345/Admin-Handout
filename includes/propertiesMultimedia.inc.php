<?php

include_once 'dbh.inc.php';

if(isset($_POST['submitPro'])){
$propertyID = $_POST['propertyID'];

//Check if user is trying to update multimedia
$sqlSel = "SELECT propertyID FROM multimediaproperties;";
$result = mysqli_query($conn, $sqlSel);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    $row = mysqli_fetch_assoc($result);

    if($row["'.$propertyID.'"] != NULL){
      //Do nothing
    }
    else{
      $sql = "INSERT INTO multimediaproperties (propertyID) VALUES ($propertyID);";
      mysqli_query($conn,$sql);
    }
  
}


$countfiles1 = count($_FILES['file1']['name']);
$countfiles2 = count($_FILES['file2']['name']);

$target_dir = "../../Real-Estate-Website/multimedia/";

$beforePictures_array = array("beforePhoto1","beforePhoto2","beforePhoto3","beforePhoto4");
$afterPictures_array = array("afterPhoto1","afterPhoto2","afterPhoto3","afterPhoto4");

$extensions_arr = array("jpg","jpeg","png","mp4");
$pictures_array = array("photo1","photo2","photo3","photo4","photo5","photo6","photo7","photo8","photo9","photo10");
$threeDpictures_array = array("3DPhoto1","3DPhoto2","3DPhoto3","3DPhoto4","3DPhoto5","3DPhoto6","3DPhoto7","3DPhoto8","3DPhoto9","3DPhoto10");

//Before Pictures query
for($i=0; $i<$countfiles1; $i++){

  $filename1 = $_FILES['file1']['name'][$i];
  $target_file1 = ($target_dir) . basename($_FILES['file1']['name'][$i]);
  $file_size1 = $_FILES['file1']['size'][$i];
  $file_type1 = $_FILES['file1']['type'][$i];

  if (($file_size1 > 2097152)){      
   header("Location: ../properties.php?upload=largefile");
   exit();
  }
  elseif (($file_type1 != "image/jpeg") &&($file_type1 != "image/jpg") &&($file_type1 != "image/png")){   
  header("Location: ../properties.php?upload=wrongext");
  exit();
  }    
  else{

  $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
 
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

    if (($file_size2 > 2097152)){      
      header("Location: ../properties.php?upload=largefile");
      exit();
     }
     elseif (($file_type2 != "image/jpeg") &&($file_type2 != "image/jpg") &&($file_type2 != "image/png")){   
     header("Location: ../properties.php?upload=wrongext");
     exit();
     }    
     else{
    $imageFileType = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
      
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

    if (($file_size3 > 2097152)){      
      header("Location: ../properties.php?upload=largefile");
      exit();
     }
     elseif (($file_type3 != "video/mp4")){   
     header("Location: ../properties.php?upload=wrongext");
     exit();
     }    
     else{
   
    $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
    
   
       $query3 = "UPDATE multimediaproperties SET videoBefore = ('$target_file3') WHERE propertyID = $propertyID;";
       
       mysqli_query($conn,$query3);
    
       move_uploaded_file($_FILES['file3']['tmp_name'],$target_dir.$filename3);
    }
   
  header("Location: ../properties.php?upload=success");
  exit();
}

