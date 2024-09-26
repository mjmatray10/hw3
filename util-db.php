<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'projecto_hw3user', 'Opr%wFjet!Lr', 'projecto_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
