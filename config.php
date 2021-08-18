
<?php

$hostname="localhost";
$user_name="test_db";
$password="123456";
$dbname="db_test";

$conn = mysqli_connect($hostname, $user_name,$password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "detabase123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
if(isset($_POST["submit"]))
{
  $student_first_name = $_POST['student_first_name'];
  $student_last_name = $_POST['student_last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $l_address = $_POST['l_address'];

  $sql_query = "INSERT INTO service_details (first_name,last_name,email,password,l_address)
  VALUES ( '$student_first_name','$student_last_name','$email','$password','$l_address')";

if (mysqli_query($conn, $sql_query)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}*/
  
?>

