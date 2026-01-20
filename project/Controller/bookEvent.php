<?php
session_start();
include "../Model/DatabaseConnection.php";

if (!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] !== true) {
    header("Location: ../View/login.php");
    exit;
}

$username = $_SESSION["username"];
$event = $_GET["event"] ?? "";

if ($event == "") {
    die("Invalid event");
}

$db = new DatabaseConnection();
$conn = $db->openConnection();

$sql = "INSERT INTO booking (username, eventname) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $event);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: ../View/dashboard.php");
exit;
