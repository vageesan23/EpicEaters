<?php
// read file
$json = file_get_contents('../db.json');

// Converts it into a PHP object
$data = json_decode($json);

echo json_encode($data[$_GET['id']]);