<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM contactmanualwaitlist ORDER BY MWaitListID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>
            <td>
             <span class='custom-checkbox'>
             <input type='checkbox' id='checkbox5' name='options[]' value='1'>
             <label for='checkbox5'></label>
            </span>
                </td>
                 <td>".$row["MWaitListID"]."</td>
                 <td>".$row["firstname"]."</td>
                 <td>".$row["lastname"]."</td>
                 <td>".$row["phoneNo"]."</td>
                 <td>".$row["email"]."</td>
                 <td>".$row["subject"]."</td>
                 <td>".$row["message"]."</td>

                 <td>
                 <a href='#editCustomer' class='edit' data-toggle='modal'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='#deleteCustomer' class='delete' data-toggle='modal'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                  </td>
                </tr> ";
        
        }
      }
      