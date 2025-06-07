<?php
$serverName = "sysinventory.database.windows.net";
$connectionOptions = array(
    "Database" => "inventorysy",
    "Uid" => "invsys",
    "PWD" => "12262004Ssj",
    "Encrypt" => true
);

//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Connected to Azure SQL Database!";
}
?>