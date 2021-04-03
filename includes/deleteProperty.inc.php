<?php
if (isset($_POST['propertyID'])  && !empty($_POST['propertyID'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['propertyID'];

    $selectSql = "SELECT * FROM multimediaproperties WHERE propertyID = $param_id";
    $rsSelect = mysqli_query($conn, $selectSql);
    $getRow = mysqli_fetch_assoc($rsSelect);

    $pictures_array = array("photo1", "photo2", "photo3", "photo4", "photo5", "photo6", "photo7", "photo8", "photo9", "photo10");
    $threeDpictures_array = array("3DPhoto1", "3DPhoto2", "3DPhoto3", "3DPhoto4", "3DPhoto5", "3DPhoto6", "3DPhoto7", "3DPhoto8", "3DPhoto9", "3DPhoto10");
    $array_size = sizeof($pictures_array);

    if (($getVideo = $getRow['video']) == NULL) {
        //Do nothing jump to else.
    } else {
        unlink($createDeletePath3 = "../../Real-Estate-Website/multimedia/" . $getVideo);
    }

    for ($i = 0; $i < $array_size; $i++) {

        if (($getImageName = $getRow["$pictures_array[$i]"]) == NULL) {
            continue;
        } else {
            unlink($createDeletePath1 = "../../Real-Estate-Website/multimedia/" . $getImageName);
        }

        if (($get3DImageName = $getRow["$threeDpictures_array[$i]"]) == NULL) {
            continue;
        } else {
            unlink($createDeletePath2 = "../../Real-Estate-Website/multimedia/" . $get3DImageName);
        }
    }

    //Delete Paths from multimediaproperties.
    $deleteSql = "DELETE FROM multimediaproperties WHERE propertyID = $param_id";
    $rsDelete = mysqli_query($conn, $deleteSql);

    //Delete property details from properties table
    $sql = "DELETE FROM properties WHERE propertyID = ?";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../properties.php?deletion=success');
            exit();
        } else {
            header('Location: ../properties.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    if (empty($_POST['propertyID'])) {
        header('Location: ../properties.php?deletion=empty');
        exit();
    }
}
