<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM renovations ORDER BY renovationID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
           
                 <td>" . $row["renovationID"] . "</td>
                 <td>" . $row["propertyID"] . "</td>
                 <td>" . $row["description"] . "</td>
                
                 
                 
                 <td>
                 <a href='renovations.php?renovationID=";
        echo $row["renovationID"] . "&propertyID=";
        echo $row['propertyID'] . "&description=";
        echo $row['description'];
        echo "&modal=editRenovation' class='edit'><i class='fas fa-edit' data-toggle='tooltip' title='".$lang['edit']."'>&#xE254;</i></a>
                 <a href='renovations.php?renovationID=";
        echo $row["renovationID"];
        echo "&modal=deleteRenovation'  class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>   

                  </td>
                </tr> ";
    }
}
