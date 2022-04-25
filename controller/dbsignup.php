<?php
    session_start();

    if ($_REQUEST["email"] == "" || $_REQUEST["password"] == "") {
        header("Location: /../signup.php");
    } else {
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];

        $email = $_SESSION["email"];
        $password = $_SESSION["password"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "m133";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO benutzer(email, `password`) VALUES($email, $password)";


        if (mysqli_query($conn, $sql)) {
            echo "<h1>Konto erfolgreich erstellt</h1>";
        } else {
            // echo "<h1>Error: Konto konnte nicht hergestellt werden, bitte versuche sie es erneut.</h1>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>" . $email . "<br>" . $password;
        }

        mysqli_close($conn);

        // header("Location: /../profile.php");
    }
?>