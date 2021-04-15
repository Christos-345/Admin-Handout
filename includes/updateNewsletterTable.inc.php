<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM newsletter ORDER BY entryID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        
        echo "<tr>
        <td>" . $row["entryID"] . "</td>
        <td>" . $row["email"] . "</td>
      
        <td>
        
        <a href='newsletter.php?entryID=";
          echo $row["entryID"] . "&email=";
          echo $row['email'];

         echo $row["entryID"];
         echo "&modal=deleteNewsletterUser'  class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   
        
        
        </td>
       </tr> ";
}
}
