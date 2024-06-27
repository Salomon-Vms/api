<?php

require_once 'db_connect.php';

$id = 3;

$sql = "SELECT * FROM articles WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "ID : " . $row["id"] . "<br>";
    echo "Titre : " . $row["title"] . "<br>";
    echo "Auteur : " . $row["author"] . "<br>";
    echo "Contenu : " . $row["content"] . "<br>";
    echo "Créé le : " . $row["created_at"] . "<br>";
    echo "Mis à jour le : " . $row["updated_at"] . "<br>";
} else {
    echo "Aucun article trouvé avec cet ID.";
}

$conn->close();

?>