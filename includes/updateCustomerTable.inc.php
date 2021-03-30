<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM users WHERE role = 2 ORDER BY userID ASC;";
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
                 <a href='#editProperty' class='edit' data-toggle='modal'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='#deleteProperty' class='delete' data-toggle='modal'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                  </td>
                </tr> ";
        
        }
      }