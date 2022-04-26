<?php
    session_start();

    if ($_REQUEST["email"] == "" || $_REQUEST["password"] == "") {
        header("Location: /../signup.php");
    } else {
        $_SESSION["email"] = $_REQUEST["email"];
        $_SESSION["password"] = $_REQUEST["password"];

        $email = ($_SESSION["email"]);
        $password = hash('ripemd160', $_SESSION["password"]);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "m133";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Verbindung mit der Datenbank konnte nicht hergestellt werden, versuchen Sie es später erneut.");
        }

        $sql = "INSERT INTO user (`email`, `password`) VALUES ('$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("Location: /../profile.php");
        } else {
            $conn->close();
            echo "Konto konnte nicht hergestellt werden, bitte versuchen Sie es später erneut.";
        }
    }
?>