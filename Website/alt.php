<?php

// Database credentials (replace with your actual values)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection (improved error handling)
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!"; // Success message if connected (optional)
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Stop script execution on error
}

// Check if form is submitted (assuming POST method)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING); // Sanitize user input
  $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
  $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT); // Validate as integer
  $blood_group = filter_input(INPUT_POST, 'blood-group', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // Validate as email
  $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

  // Prepared statement to prevent SQL injection (improved)
  $sql = "INSERT INTO user_details (name, address, age, blood_group, email, phone) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$name, $address, $age, $blood_group, $email, $phone]);

  if ($stmt->rowCount() > 0) {
    echo "New user created successfully!";
  } else {
    echo "Error: User creation failed.";
  }

  $stmt->close();
}

$conn = null; // Close connection
?>
