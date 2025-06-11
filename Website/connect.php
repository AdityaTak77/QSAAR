<?php

$servername = "localhost"; // Replace with your database server address
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "database"; // Replace with your database name

echo "Connecting to: $servername on port: " . mysqli_get_port($conn) . PHP_EOL; // Removed (commented out for now)
echo "Using username: $username" . PHP_EOL; // Removed (commented out for now)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit(); // Stop script execution if there's an error
} else {
    echo "Connection successful!";
}

// Get form data (assuming form uses POST method)
if (isset($_POST['Signup'])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $blood_group = $_POST["blood-group"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Prepare SQL statement (prevents SQL injection)
    $sql = "INSERT INTO user_details (name, address, age, blood_group, email, phone) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind values to prevent SQL injection
    $stmt->bind_param("ssssss", $name, $address, $age, $blood_group, $email, $phone);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "New user created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
