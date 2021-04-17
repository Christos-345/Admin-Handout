<?php

include 'dbh.inc.php';

$sql = "SELECT interestID, propertyID, firstname, lastname, phoneNo, email, message
        FROM contactinterestlist
        NATURAL JOIN users ;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>
            
                 <td>".$row["interestID"]."</td>
                 <td>".$row["propertyID"]."</td>
                 <td>".$row["firstname"]."</td>
                 <td>".$row["lastname"]."</td>
                 <td>".$row["phoneNo"]."</td>
                 <td>".$row["email"]."</td>
                 <td>".$row["message"]."</td>
                 <td>

                 <a href='messages.php?interestID=";
                 echo $row["interestID"] . "&propertyID=";
                 echo $row['propertyID'] . "&firstname=";
                 echo $row['firstname'] . "&lastname=";
                 echo $row['lastname'] . "&phoneNo=";
                 echo $row['phoneNo'] . "&email=";
                 echo $row['email'] . "&message";
                 echo $row['message'];
       
                echo $row["interestID"];
                echo "&modal=deleteCustomer' class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   
               
               </td>
              </tr> ";
       }
    }