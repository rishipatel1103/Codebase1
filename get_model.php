<?php
require 'database.php';

header('Content-Type: application/json');

try {
    $database = new Database('3dmodel.sql');
    $models = $database->getModels();
    echo json_encode(['status' => 'success', 'data' => $models]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
?>
