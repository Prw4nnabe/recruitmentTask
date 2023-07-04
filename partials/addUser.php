<?php

require_once 'common.php';

$file = '../dataset/users.json';
$users = getUsersData($file);

if ($users === false) {
    echo "Error: Unable to retrieve data from the users file.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Checking if required form fields are set
    if (!isset($_POST['name']) || !isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['address']) || !isset($_POST['phone']) || !isset($_POST['company'])) {
        echo "Error: Required form fields are missing.";
        exit();
    }

    // Retrieving data from the form
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    // Extracting address components
    $addressArray = explode(' ', $address);
    if (count($addressArray) !== 3) {
        echo "Error: Invalid address format.";
        exit();
    }
    $street = trim($addressArray[0]);
    $zipcode = trim($addressArray[1]);
    $city = trim($addressArray[2]);

    // Creating a new user
    $newUser = [
        'id' => count($users) + 1,
        'name' => $name,
        'username' => $username,
        'email' => $email,
        'address' => [
            'street' => $street,
            'suite' => '',
            'city' => $city,
            'zipcode' => $zipcode
        ],
        'phone' => $phone,
        'company' => [
            'name' => $company
        ]
    ];

    // Adding the new user to the array
    $users[] = $newUser;

    // Saving the data to the users.json file
    if (saveUsersData($file, $users)) {
        redirect('../index.php');
    } else {
        echo "Error: Unable to save data to the users file.";
        exit();
    }
}

?>
