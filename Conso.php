$apiUrl = 'http://localhost/api/creation.php';
$responseData = file_get_contents($apiUrl);

if ($responseData) {
    $decodedData = json_decode($responseData, true); 
    print_r($decodedData); 
} else {
    echo "Erreur lors de la récupération des données de l'API";
}
