<?php
function get_db_connection(){
function get_db_connection() {
    // Define Azure database credentials
    $servername = "dbhw3.mysql.database.azure.com"; // Azure server hostname
    $username = "hw3db"; // Your Azure MySQL username
    $password = "dbload2024!"; // Your Azure MySQL password
    $dbname = "hw3db"; // Your database name
    $port = 3306; // MySQL default port
    // Create connection
    $conn = new mysqli('138.197.17.168', 'projecto_hw3user', 'Opr%wFjet!Lr', 'projecto_hw3');
    
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    // Check connection
    if ($conn->connect_error) {
      return false;
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
