<?php
require_once "db_connect.php";
// sql to create table
/*$sql = "CREATE TABLE voters_info (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Fullname VARCHAR(30) NOT NULL,
  Year_of_Birth VARCHAR(30) NOT NULL,
  Country_of_Origin VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
      echo "Table Voter_info created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  */
$sql = "CREATE TABLE Actual_Voters (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Candidates VARCHAR(30) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY(id) REFERENCES Voters_info(id)
  )";
  
  if ($conn->query($sql) === TRUE) {
      echo "Table Actual_Voters created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  
  
$sql = "CREATE TABLE Wished_Voters (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Candidates VARCHAR(30) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY(id) REFERENCES Voters_info(id)
  )";
  
  if ($conn->query($sql) === TRUE) {
      echo "Table Wished_Voters created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
?>