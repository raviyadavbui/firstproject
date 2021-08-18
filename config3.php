<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "detabase456";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name );
// Check connection
if (!$conn) {
  die("Connection failed: " .  mysqli_connect_error());
}
if(isset($_POST["submit"]))
{
  $first_name = $_POST['student_first_name'];
  $last_name = $_POST['student_last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['l_address'];
  $sql_query = "INSERT INTO service_near (first_name,last_name,email,password,address)
  VALUES ( '$first_name','$last_name','$email ','$password','$address')";

if (mysqli_query($conn, $sql_query)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);

}



?>