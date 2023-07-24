<?php
// This is a simple PHP script that returns a success message
$response = array('message' => 'AJAX request successful.');
header('Content-Type: application/json');
echo json_encode($response);
exit;
