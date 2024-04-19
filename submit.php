<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "W@2915djkq#";
$dbname = "priyanshi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]));
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feeling = $_POST["feeling"];
    $thoughts = $_POST["thoughts"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO responses (feeling, thoughts) VALUES (?, ?)");
    $stmt->bind_param("ss", $feeling, $thoughts);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->error]);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
