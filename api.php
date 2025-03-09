<?php
include 'config.php';

header('Content-Type: application/json');
echo json_encode([
    "apiKey" => GOOGLE_MAPS_API_KEY,
    "mapId" => GOOGLE_MAPS_MAP_ID
]);
