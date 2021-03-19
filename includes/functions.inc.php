<?php
//Function to check if user exists in database
function emailExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../login.php?error=stmtFailed');
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

//Function to get latest id
function getLatestPropertyID($conn){
    $sql= mysqli_query( $conn,"SELECT MAX( propertyID ) AS max FROM properties;" );
    $res = mysqli_fetch_assoc( $sql);
    $maxID = $res['max'];
    return $maxID; 
}