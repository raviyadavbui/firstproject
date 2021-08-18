<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "detabase123";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name );
// Check connection
if (!$conn) {
  die("Connection failed: " .  mysqli_connect_error());
}
echo "Connected successfully";
if(isset($_POST["save"]))
{
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql_query = "INSERT INTO entry_details (first_name,last_name,gender,email,mobile)
  VALUES ( '$first_name','$last_name','$gender','$email ',' $phone')";

if (mysqli_query($conn, $sql_query)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);

}