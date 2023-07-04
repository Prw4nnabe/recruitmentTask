<?php

function getUsersData($file) {
    if (!file_exists($file)) {
        return false;
    }

    $data = file_get_contents($file);

    if ($data === false) {
        return false;
    }

    return json_decode($data, true);
}

function saveUsersData($file, $users) {
    $result = file_put_contents($file, json_encode($users));

    return ($result !== false);
}

function redirect($location) {
    header("Location: $location");
    exit();
}

function removeUser($users, $userId) {
    $userIndex = -1;

    foreach ($users as $index => $user) {
        if ($user['id'] === (int) $userId) {
            $userIndex = $index;
            break;
        }
    }

    if ($userIndex !== -1) {
        array_splice($users, $userIndex, 1);
        return $users;
    }

    return false;
}

?>
