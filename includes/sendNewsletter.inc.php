<?php

if(isset($_POST['submitSendNewsletter'])){
    $subject = $_POST['subject'];
    

    //Prepare parts of email that are the same

    $headers = "From: APM Smart Houses <apmsmarthousestesting@gmail.com>\r\n";
    $headers .= "Content: Newsletter\r\n";

    //Send an email to each entry in newsletter table

    require_once 'dbh.inc.php';

    $sql = "SELECT email FROM newsletter;";
    $result = mysqli_query($conn,$sql);
    $resultCheck =mysqli_num_rows($result);

    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){

            $to = $row['email'];

            $message = $_POST['message'];
            $message .= '<p>Unsubscribe: </br>';
            $message .= '<a href = "http://destini-h2020.com/realestate2021/unsubscribeNewsletter.php?email='.$row['email'].'"</a></p>';
            mail($to, $subject, $message, $headers);

        }
    }

    header("Location: ../newsletter.php?newsletter=send");
    exit();

}else{
    header('Location: ../newsletter.php');
    exit();
}