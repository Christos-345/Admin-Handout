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
                 <td>".$row["address"]."</td>
                 <td>".$row["city"]."</td>
                 <td>".$row["occupation"]."</td>
                 <td>".$row["gender"]."</td>
                 
                 <td>
                  
                 <a href='customers.php?userID=";
        echo $row["userID"]."&firstname=";
        echo $row['firstname']."&lastname=";
        echo $row['lastname']."&phoneNo=";
        echo $row['phoneNo']."&email=";
        echo $row['email']."&city=";
        echo $row['city']."&occupation=";
        echo $row['occupation']."&gender=";
        echo $row['gender']."&role=";
        echo $row['role']."&address=";
        echo $row['address'];
        
        echo "&modal=editCustomer' class='edit'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                 <a href='customers.php?userID=";
        echo $row["userID"];
        echo "&modal=deleteCustomer'  class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   
                  </td>
                </tr> ";
        
        }
      }