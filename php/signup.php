<?php
$serverName = "sysinventory.database.windows.net";
$connectionOptions = array(
    "Database" => "inventorysy",
    "Uid" => "invsys",
    "PWD" => "12262004Ssj",
    "Encrypt" => true
);

// Establish connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die("Connection failed: " . print_r(sqlsrv_errors(), true));
}

// Get POST data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Basic validation
    if (empty($username) || empty($password)) {
    die("All fields are required.");
}

// Hash the password (recommended for security)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$sql = "INSERT INTO loginsignup (username, password) VALUES (?, ?)";
$params = array($username, $hashed_password);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die("Error inserting user: " . print_r(sqlsrv_errors(), true));
}

// Success
header("Location: ../index.html?signup=success");
exit();
?>
