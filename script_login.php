<?php
    session_start();
    $user = $_POST['us'];
    $pw = $_POST['pw'];
    $_SESSION['permission'] = false;
    if($user == "admin" && $pw == "1234") {
        header("Location: benvenuto.php");
        $_SESSION['permission'] = true;
    } else {
        header("Location: errore.php");
    }
?>