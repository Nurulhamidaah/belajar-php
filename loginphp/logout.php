<?php
    session_start();
    $_SESSION['userweb']="";
    header ("location:logiin.php");
    exit;
?>