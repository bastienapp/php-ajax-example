<?php

$todo = $_POST['todo'];

// TODO: stocker en base de données

echo json_encode([
    'success' => true,
    'content' => "j'ai reçu " . $todo,
]);
