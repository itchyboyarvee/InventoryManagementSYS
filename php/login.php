<?php
session_start();
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

if (empty($username) || empty($password)) {
    die("All fields are required.");
}

// Fetch user from loginsignup table
$sql = "SELECT * FROM loginsignup WHERE username = ?";
$params = array($username);
$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {
    die("Error fetching user: " . print_r(sqlsrv_errors(), true));
}

$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {
    // Set session variables
    $_SESSION['user_id'] = $user['id'] ?? $user['username'];
    $_SESSION['username'] = $user['username'];
    header("Location: ../home.php");
    exit();
} else {
    die("Invalid username or password.");
}
?>
