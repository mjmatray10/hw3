<?php
function get_db_connection() {
    // Define Azure database credentials
    $servername = "dbhw3.mysql.database.azure.com"; // Azure server hostname
    $username = "hw3db"; // Your Azure MySQL username
    $password = "dbload2024!"; // Your Azure MySQL password
    $dbname = "hw3db"; // Your database name
    $port = 3306; // MySQL default port

    try {
        // Create connection using PDO
        $dsn = "mysql:host=$servername;dbname=$dbname;port=$port;charset=utf8mb4";
        $conn = new PDO($dsn, $username, $password);
        
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}
?>
