<?php

require_once 'db_connect.php';

$articleId = 1;

if (empty($articleId)) {
    http_response_code(400);
    echo json_encode(['message' => 'L\'ID de l\'article est requis']);
    exit;
}

$sql = "DELETE FROM articles WHERE id = $articleId";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $articleId, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    http_response_code(200);
    echo json_encode(['message' => 'Article supprimé avec succès']);
} else {
    http_response_code(404);
    echo json_encode(['message' => 'Article non trouvé']);
}