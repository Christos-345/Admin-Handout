<?php

session_start();
session_unset();
session_destroy();
header("Location: ../../Real-Estate-Website/index.php");
exit();