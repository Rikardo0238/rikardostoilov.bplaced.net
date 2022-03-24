<?php
    session_start();

    if ($_REQUEST["email"] == "" || $_REQUEST["password"] == "") {
        header("Location: /../login.php");
    } else {
        $_SESSION["email"] = $_REQUEST["email"];
        $_SESSION["password"] = $_REQUEST["password"];

        header("Location: /../profile.php");
    }
?>