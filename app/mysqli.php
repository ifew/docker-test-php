<?php
$hostname = getenv('MYSQL_DB_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

// Create connection
$conn = new mysqli($hostname, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_GET['action'] == "create_db") {
  $sql = "CREATE DATABASE ".$dbname." CHARACTER SET utf8 COLLATE utf8_general_ci;";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
}

if($_GET['action'] == "create_table") {
  $conn->select_db($dbname);
  $sql = "CREATE TABLE member (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table Member created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
}

if($_GET['action'] == "insert") {
  $conn->select_db($dbname);
  $sql = "INSERT INTO member (firstname, lastname, email)
  VALUES ('iFew', 'Wood', 'ifew@example.com')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if($_GET['action'] == "update") {
  $conn->select_db($dbname);
  $sql = "UPDATE member SET lastname='Wood-".rand(1,100)."' WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

if($_GET['action'] == "delete_data") {
  $conn->select_db($dbname);
  $sql = "DELETE FROM member WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

if($_GET['action'] == "drop_table") {
  $conn->select_db($dbname);
  $sql = "DROP TABLE member";

  if ($conn->query($sql) === TRUE) {
    echo "Dropped table successfully";
  } else {
    echo "Error drop table record: " . $conn->error;
  }
}
if($_GET['action'] == "drop_db") {
  $conn->select_db($dbname);
  $sql = "DROP DATABASE ".$dbname;

  if ($conn->query($sql) === TRUE) {
    echo "Dropped database successfully";
  } else {
    echo "Error drop database record: " . $conn->error;
  }
}

if($_GET['action'] == "select") {
  $conn->select_db($dbname);
  $sql = "SELECT id, firstname, lastname FROM member";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }
}

$conn->close();
?>
