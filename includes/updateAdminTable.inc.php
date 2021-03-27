<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM users WHERE role = 1 ORDER BY userID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>
                 <td>".$row["userID"]."</td>
                 <td>".$row["firstname"]."</td>
                 <td>".$row["lastname"]."</td>
                 <td>".$row["phoneNo"]."</td>
                 <td>".$row["email"]."</td>
                 
                 <td>
                 <input type='hidden' name ='userID' value = ".$row['userID'].">
                 <button type='submit' value='Yes' class='btn btn-danger' >Delete</button>   
                 </td>
                </tr> ";
        
        }
      }