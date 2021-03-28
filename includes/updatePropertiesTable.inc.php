<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM properties ORDER BY propertyID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>
            <td>
             <span class='custom-checkbox'>
             <input type='checkbox' name='options[]' value=".$row['propertyID'].">
             <label for='checkbox5'></label>
            </span>
                </td>
                 <td>".$row["propertyID"]."</td>
                 <td>".$row["type"]."</td>
                 <td>".$row["category"]."</td>
                 <td>".$row["country"]."</td>
                 <td>".$row["town"]."</td>
                 <td>".$row["area"]."</td>
                 <td>".$row["squarem"]."</td>
                 <td>".$row["address"]."</td>
                 <td>".$row["bedrooms"]."</td>
                 <td>".$row["bathrooms"]."</td>
                 <td>".$row["parking"]."</td>
                 <td>".$row["heating"]."</td>
                 <td>".$row["furniture"]."</td>
                 <td>".$row["floor"]."</td>
                 <td>".$row["dateOfBuild"]."</td>
                 <td>".$row["availableFrom"]."</td>
                 <td>".$row["pricePerSqm"]."</td>
                 <td>".$row["totalPrice"]."</td>
                 
                 
                 <td>
                 <a href='#editProperty' class='edit' data-toggle='modal'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='#deleteProperty' class='delete' data-toggle='modal'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                  </td>
                </tr> ";
        
        }
      }