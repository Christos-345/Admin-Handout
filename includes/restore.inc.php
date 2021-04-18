<?php
include_once 'dbh.inc.php';


$target_dir = "../Backups/";
$filename = $target_dir . basename($_FILES["fileToUpload"]["name"]);


$handle = fopen($filename,"w+");
fwrite($handle,$return);
fclose($handle);


if(isset($_POST["submit"])) 
{
    $handle = fopen($filename,"r+");
    $contents = fread($handle,filesize($filename));
    
    $sql = explode(';',$contents);
    foreach($sql as $query){
      $result = mysqli_query($conn,$query);
      if($result){
          /*echo '<tr><td><br></td></tr>';
          echo '<tr><td>'.$query.' <b>SUCCESS</b></td></tr>';
          echo '<tr><td><br></td></tr>';*/
      }
    }
    fclose($handle);
    //echo 'Successfully imported';
    header("Location: ../restore.php?r=success");
}

?>