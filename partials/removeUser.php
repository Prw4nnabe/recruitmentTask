<?php

require_once 'common.php';

$file = '../dataset/users.json';
$users = getUsersData($file);

if ($users === false) {
    http_response_code(500);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_GET['id'])) {
        $userId = $_GET['id'];

        $updatedUsers = removeUser($users, $userId);

        if ($updatedUsers !== false) {
            if (saveUsersData($file, $updatedUsers)) {
                http_response_code(200); // OK
            } else {
                http_response_code(500); // Server error - data cannot be saved
            }
        } else {
            http_response_code(404); // User not found
        }
    } else {
        http_response_code(400); // Invalid request - user ID not transmitted
    }
} else {
    http_response_code(400); // Invalid request - not a POST method
}

?>
