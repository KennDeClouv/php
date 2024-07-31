<?php 
    session_start();
    session_destroy();
    session_unset();
    // $_SESSION["cookie"]
    setcookie("id", "", time() - 3600, "/");
    setcookie("sig", "", time() - 3600, "/");
    header("Location: ../");
    exit;
