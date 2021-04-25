<?php
 
 if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = "gr"; //Default
 }
else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
      if($_GET['lang'] == "gr"){
          $_SESSION['lang'] = "gr";
      }
      else{
        $_SESSION['lang'] = "en";
      }
}

include $_SESSION['lang'] . ".php";

?>