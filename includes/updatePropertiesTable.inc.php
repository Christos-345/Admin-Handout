<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM properties ORDER BY propertyID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
           
                 <td>" . $row["propertyID"] . "</td>
                 <td>" . $row["type"] . "</td>
                 <td>" . $row["category"] . "</td>
                 <td>" . $row["country"] . "</td>
                 <td>" . $row["town"] . "</td>
                 <td>" . $row["area"] . "</td>
                 <td>" . $row["squarem"] . "</td>
                 <td>" . $row["address"] . "</td>
                 <td>" . $row["bedrooms"] . "</td>
                 <td>" . $row["bathrooms"] . "</td>
                 <td>" . $row["parking"] . "</td>
                 <td>" . $row["heating"] . "</td>
                 <td>" . $row["furniture"] . "</td>
                 <td>" . $row["floor"] . "</td>
                 <td>" . $row["dateOfBuild"] . "</td>
                 <td>" . $row["availableFrom"] . "</td>
                 <td>" . $row["pricePerSqm"] . "</td>
                 <td>" . $row["totalPrice"] . "</td>
                 
                 
                 <td>
                 <a href='properties.php?propertyID=";
        echo $row["propertyID"] . "&type=";
        echo $row['type'] . "&category=";;
        echo $row['category'] . "&country=";
        echo $row['country'] . "&town=";
        echo $row['town'] . "&area=";
        echo $row['area'] . "&squarem=";
        echo $row['squarem'] . "&address=";
        echo $row['address'] . "&bedrooms=";
        echo $row['bedrooms'] . "&bathrooms=";
        echo $row['bathrooms'] . "&parking=";
        echo $row['parking'] . "&heating=";
        echo $row['heating'] . "&furniture=";
        echo $row['furniture'] . "&floor=";
        echo $row['floor'] . "&dateOfBuild=";
        echo $row['dateOfBuild'] . "&availableFrom=";
        echo $row['availableFrom'] . "&pricePerSqm=";
        echo $row['pricePerSqm'] . "&totalPrice=";
        echo $row['totalPrice']. "&description=";
        echo $row['description']. "&amenities=";
        echo $row['amenities'];
        echo "&modal=editProperty' class='edit'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                          <a href='properties.php?propertyID=";

        echo $row["propertyID"];
        echo "&modal=deleteProperty'  class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>  


                  </td>
                </tr> ";
    }
}
