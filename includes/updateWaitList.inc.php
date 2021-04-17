<?php

include 'dbh.inc.php';

$sql = "SELECT waitListID,userID, firstname, lastname, phoneNo, email, subject, message
        FROM contactwaitlist
        NATURAL JOIN users ;
         ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
      echo "<tr>

                 <td>".$row["waitListID"]."</td>
                 <td>".$row["userID"]."</td>
                 <td>".$row["firstname"]."</td>
                 <td>".$row["lastname"]."</td>
                 <td>".$row["phoneNo"]."</td>
                 <td>".$row["email"]."</td>
                 <td>".$row["subject"]."</td>
                 <td>".$row["message"]."</td>
                 <td>

                 <a href='contactUs.php?waitListID=";
                 echo $row["waitListID"] . "&userID=";
                 echo $row['userID'] . "&firstname=";
                 echo $row['firstname'] . "&lastname=";
                 echo $row['lastname'] . "&phoneNo=";
                 echo $row['phoneNo'] . "&email=";
                 echo $row['email'] . "&subject";
                 echo $row['subject'] . "&message";
                 echo $row['message'];
       
                echo $row["waitListID"];
                echo "&modal=deleteContact' class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   
               
               </td>
              </tr> ";
       }
    }