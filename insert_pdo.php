<?php

try {
    include "config_pdo.php";
    $sql = "INSERT INTO test_entry (name, mobile)
    VALUES ('ravi', '9506542036')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;



?>