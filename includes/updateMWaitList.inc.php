<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM contactmanualwaitlist ORDER BY MWaitListID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
        echo "<tr>
        <td>" . $row["MWaitListID"] . "</td>
        <td>" . $row["firstname"] . "</td>
        <td>" . $row["lastname"] . "</td>
        <td>" . $row["phoneNo"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["subject"] . "</td>
        <td>" . $row["message"] . "</td>      
        <td>
        
        <a href='waitingList.php?MWaitListID=";
          echo $row["MWaitListID"] . "&firstname=";
          echo $row['firstname'] . "&lastname=";
          echo $row['lastname'] . "&phoneNo=";
          echo $row['phoneNo'] . "&email=";
          echo $row['email'] . "&subject=";
          echo $row['subject'] . "&message=";
          echo $row['message'];

         echo $row["MWaitListID"];
         echo "&modal=deleteInterest' class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   
        
        
        </td>
       </tr> ";
 }
}
      