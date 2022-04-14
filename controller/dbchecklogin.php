<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "m133";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
    }

    $sql = "INSERT INTO benutzer(email, password)
        VALUES('email@gmail.com', 'password123')";

    if ($conn->query($sql) === TRUE) {
        echo "Neuer Eintag erfolgreich hinzugefügt";
    } else {
        echo "Fehler: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>