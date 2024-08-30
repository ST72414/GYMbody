

<?php
include('config.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Přesměrování na stránku se seznamem uživatelů po úspěšném smazání
        header("Location: read.php");
        exit; // Ukončení skriptu po přesměrování
    } else {
        echo "Chyba: " . $conn->error;
    }
}

$conn->close();
?>