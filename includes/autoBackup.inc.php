<?php

include_once 'dbh.inc.php';


//Update Interval

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  require_once 'functions.inc.php';

  //Get Variable data
  
  $autointerval = mysqli_real_escape_string($conn,$_POST['autointerval']);

  $getQuery2 = "UPDATE autobackup SET autointerval = '$autointerval' WHERE bID=(SELECT MAX(bID) FROM autobackup)";  
  

  if(mysqli_query($conn,$getQuery2))
  {
    header("Location: ../backup.php?b=success");
  }else{
    header("Location: ../backup.php?b=fail");
  }    
  
}

else{

  //Check for Backup

  $getQuery2 = "SELECT * from autobackup WHERE bID=(SELECT MAX(bID) FROM autobackup);";
  $setQuery2 = mysqli_query($conn, $getQuery2);
  $searchProp = array();

  while ($row = mysqli_fetch_assoc($setQuery2)) 
  {
    $searchProp[] = array(
  
      $lastbackup = $row['lastbackup'],
      $autointerval = $row['autointerval']
    );  
  }

  $nextBackup = mktime(0, 0, 0, date("m"), date("d")+$autointerval,   date("Y"));
  $checkBackup =  date("Y-m-d", $nextBackup);
  echo $checkBackup;  

  if(date("Y-m-d")==$checkBackup)
  {
  //Backup Script

    $tables = array();
    $result = mysqli_query($conn,"SHOW TABLES");
    while($row = mysqli_fetch_row($result)){
      $tables[] = $row[0];
    }

    $return = '';
    foreach($tables as $table){
      $result = mysqli_query($conn,"SELECT * FROM ".$table);
      $num_fields = mysqli_num_fields($result);
  
      $return .= 'DROP TABLE '.$table.';';
      $row2 = mysqli_fetch_row(mysqli_query($conn,"SHOW CREATE TABLE ".$table));
      $return .= "\n\n".$row2[1].";\n\n";
  
      for($i=0;$i<$num_fields;$i++){
        while($row = mysqli_fetch_row($result)){
          $return .= "INSERT INTO ".$table." VALUES(";
          for($j=0;$j<$num_fields;$j++){
            $row[$j] = addslashes($row[$j]);
            if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
            else{ $return .= '""';}
            if($j<$num_fields-1){ $return .= ',';}
          }
          $return .= ");\n";
        }
      }
      $return .= "\n\n\n";
    }


    //save file
    $handle = fopen("..\Backups\backup ".date("d-m-Y").".sql","w+");
    fwrite($handle,$return);
    fclose($handle);

    $lastbackup =  date("Y-m-d");

    $getQuery3 = "UPDATE autobackup SET lastbackup = '$lastbackup' WHERE bID=(SELECT MAX(bID) FROM autobackup)";  
    mysqli_query($conn,$getQuery3);

    echo 'Database successfully backed up. <br> You can now close this window. ';
  }
  else 
  {
    echo 'Database does not need to be backed up yet. <br> You can now close this window. ';
  }

}
