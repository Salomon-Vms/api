<?php

require_once 'db_connect.php';

$title = 'Mon premier article';
$auteur ='Agape Tshingombe';
$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';

$sql = "INSERT INTO articles (title, author, content, created_at, updated_at) VALUES ('$title', '$auteur', '$content', NOW(), NOW())";

if ($conn->query($sql) === TRUE) {
    echo "L'article a été créé avec succès.";
} else {
    echo "Erreur lors de la création de l'article: " . $conn->error;
}

$conn->close();

?>