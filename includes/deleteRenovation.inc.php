<?php
if (isset($_POST['submitDeleteRenovation'])) {

    require_once 'dbh.inc.php';
    $param_id = $_POST['renovationID'];

    $selectSql = "SELECT * FROM multimediarenovations WHERE renovationID = $param_id";
    $rsSelect = mysqli_query($conn, $selectSql);
    $getRow = mysqli_fetch_assoc($rsSelect);

    $beforePictures_array = array("beforePhoto1", "beforePhoto2", "beforePhoto3", "beforePhoto4", "beforePhoto5", "beforePhoto6", "beforePhoto7", "beforePhoto8", "beforePhoto9", "beforePhoto10");
    $afterPictures_array = array("afterPhoto1", "afterPhoto2", "afterPhoto3", "afterPhoto4", "afterPhoto5", "afterPhoto6", "afterPhoto7", "afterPhoto8", "afterPhoto9", "afterPhoto10");
    $array_size = sizeof($beforePictures_array);

    if (($getVideoBefore = $getRow['videoBefore']) == NULL) {
        //Do nothing jump to else.
    } else {
        unlink($createDeletePath1 = "../../Real-Estate-Website/multimedia/" . $getVideoBefore);
    }

    if (($getVideoAfter = $getRow['videoAfter']) == NULL) {
        //Do nothing jump to else.
    } else {
        unlink($createDeletePath2 = "../../Real-Estate-Website/multimedia/" . $getVideoAfter);
    }

    for ($i = 0; $i < $array_size; $i++) {

        if (($getBeforeImage = $getRow["$beforePictures_array[$i]"]) == NULL) {
            continue;
        } else {
            unlink($createDeletePath3 = "../../Real-Estate-Website/multimedia/" . $getBeforeImage);
        }

        if (($getAfterImage = $getRow["$afterPictures_array[$i]"]) == NULL) {
            continue;
        } else {
            unlink($createDeletePath4 = "../../Real-Estate-Website/multimedia/" . $getAfterImage);
        }
    }

    //Delete Paths from multimediaproperties.
    $deleteSql = "DELETE FROM multimediarenovations WHERE renovationID = $param_id";
    $rsDelete = mysqli_query($conn, $deleteSql);
    
    //Delete renovation details from table
    $sql = "DELETE FROM renovations where renovationID = ?";

    if ($stmt =  mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $param_id);


        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../renovations.php?deletion=success');
            exit();
        } else {
            header('Location: ../renovations.php?deletion=error');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {

    header('Location: ../renovations.php?deletion=empty');
    exit();
}
