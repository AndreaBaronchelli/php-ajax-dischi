<?php
// Import DB
require_once __DIR__ . '/../partials/database.php';

// var_dump($database);

// Conversion
header('Content-Type: application/json');

echo json_encode($database);


