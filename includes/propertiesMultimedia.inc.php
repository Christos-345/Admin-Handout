<?php

session_start();

include_once 'dbh.inc.php';

if(isset($_POST['submit1'])){
$propertyID = $_POST['propertyID'];
$sql = "INSERT INTO multimediaproperties (propertyID) VALUES ($propertyID);";
mysqli_query($conn,$sql);
 
$countfiles = count($_FILES['file']['name']);
$target_dir = "../../Real-Estate-Website/multimedia/";

for($i=0; $i<$countfiles; $i++){

  $filename = $_FILES['file']['name'][$i];
  $target_file = ($target_dir) . basename($_FILES['file']['name'][$i]);
  $file_size = $_FILES['file']['size'][$i];
  $file_type = $_FILES['file']['type'][$i];

  if (($file_size > 100000)){      
    $message = 'File too large. File must be less than 100 megabytes.'; 
     echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
   }
   elseif (($file_type != "image/jpeg") &&($file_type != "image/jpg") &&($file_type != "image/png") &&($file_type != "video/mp4"))   
   {
    $message = 'Invalid file type. Only JPG, JPEG, PNG and MP4 types are accepted.'; 
     echo '<script type="text/javascript">alert("'.$message.'");</script>';         
   }    

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","mp4");
  $pictures_array = array("photo1","photo2","photo3","photo4","photo5","photo6","photo7","photo8","photo9","photo10");
  $threeDpictures_array = array("3DPhoto1","3DPhoto2","3DPhoto3","3DPhoto4","3DPhoto5","3DPhoto6","3DPhoto7","3DPhoto8","3DPhoto9","3DPhoto10");

  
  if( in_array($imageFileType,array("png","jpeg"))){
 
     $query1 = "UPDATE multimediaproperties SET $pictures_array[$i] = ('$target_file') WHERE propertyID = $propertyID;";
     
     mysqli_query($conn,$query1);
  
     move_uploaded_file($_FILES['file']['tmp_name'][$i],$target_dir.$filename);

  }

  elseif( in_array($imageFileType,array("jpg"))){

    $resultCheck = mysqli_num_rows($result);

    $query2 = "UPDATE multimedia SET  $threeDpictures_array[$i] = ('$target_file') WHERE propertyID = $propertyID ";
    
    mysqli_query($conn,$query2);
 
    move_uploaded_file($_FILES['file']['tmp_name'][$i],$target_dir.$filename);

 }

 elseif( in_array($imageFileType,array("mp4"))){
 
  $query3 = "UPDATE multimediaproperties SET video = ('$target_file') WHERE propertyID = $propertyID";
  
  mysqli_query($conn,$query3);

  move_uploaded_file($_FILES['file']['tmp_name'][$i],$target_dir.$filename);

 } 
 
}
  header("Location: ../properties.php?upload=success");
}