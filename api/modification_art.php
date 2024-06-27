<?php
require_once 'db_connect.php';

$id = 3;
$title = "Mon premier article modifié";
$auteur = 'Salomon viekoy';
$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit de salomon';

$sql = "UPDATE articles SET title='$title', author='$auteur', content='$content', updated_at=NOW() WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "L'article a été modifié avec succès.";
} else {
    echo "Erreur lors de la modification de l'article : " . $conn->error;
}

$conn->close();

?>