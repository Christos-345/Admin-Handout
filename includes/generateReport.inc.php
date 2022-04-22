<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get variables
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Prepare query
    if (!empty($_POST['type'])) {
        $type = $_POST['type'];
        if ($type !== 'allTypes') {
            $query[] = "type='$type'";
        }
    }
    if (!empty($_POST['category'])) {
        $category = $_POST['category'];
        if ($category !== 'allCategories') {
            $query[] = "category='$category'";
        }
    }
    if (!empty($_POST['town'])) {
        $country = $_POST['town'];
        if ($country !== 'allTowns') {
            $query[] = "town='$town'";
        }
    }
    if (!empty($_POST['area'])) {
        $city = $_POST['area'];
        if ($city !== 'allAreas') {
            $query[] = "area='$area'";
        }
    }


    if (!empty($query)) {
        $where = "WHERE";
        $searchquery = implode(' AND ', $query);
    } else {
        $where = "";
        $searchquery = "";
    }

    //Get data and load them into an array
    
    $getsearch = "SELECT * FROM properties $where $searchquery;";
    $ressearch = mysqli_query($conn, $getsearch);
    if (mysqli_num_rows($ressearch) === 0) {
        header("Location:../properties.php?properties=none");
    } else {
       
        $searchProperties = array();
        while ($row = mysqli_fetch_assoc($ressearch)) {
            $searchProperties[] = array(
                'propertyID'=>$row['propertyID'],
                'type'=>$row['type'],
                'category' => $row['category'],
                'town' => $row['town'],
                'area' => $row['area'],
                'address' => $row['address'],
                'brand' => $row['brand'],
                'state' => $row['state'],
                'lastDate' => $row['lastDate'],
                'postDate' => $row['postDate'],
                
            );
            
        }
        
        $_SESSION['properties'] = $searchProperties;
        header('Location:propertiesPDF.inc.php');
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
