<?php
// Import DB
require_once __DIR__ . '/../partials/database.php';

// FILTERING
$filter = [];

if (empty($_GET['query']) || $_GET['query'] === 'All') {
    $filter = $database;
} else {
    foreach($database as $value) {

        if ($_GET['query'] === $value['author']) {
            $filter[] = $value;
        }
    }
};

// Conversion
header('Content-Type: application/json');

echo json_encode($filter);


