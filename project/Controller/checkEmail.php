<?php
include "../Model/DatabaseConnection.php";

$email = $_POST["email"];

if ($email == "") {
    echo "Email Empty";
} 
else {
    $db = new DatabaseConnection();
    $connection = $db->openConnection();

    $result = $db->checkExistingUser($connection, "registration", $email);

    if ($result->num_rows > 0) {
        echo "Use another email";
    } else {
        echo "Unique Email";
    }

    $db->closeConnection($connection);
}

?>
