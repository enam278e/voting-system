<?php
require_once 'db_connect.php';
// Create database
$sql = "CREATE DATABASE vote_db";
if ($conn->query($sql) === TRUE) {
    echo "Database vote_db created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
 $conn->close();
?>