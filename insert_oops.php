<?php
include "config_oops.php";
$sql = "INSERT INTO test_entry (name, mobile)
VALUES ('John', '9506542036')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>