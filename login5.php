<?php 
include("config4.php");
if(isset($_POST ["submit"]))
{
	$email = $_POST["email"];
    $password = $_POST["password"];

	$query = "SELECT email,password FROM service_near WHERE email = '".$email."' and  password = '".$password."'";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data );
	//echo $total;
	if($total == 1){
		echo"login ok";
	}else{
		echo "login fail";
	}


}
?>

<form action="login5" method="POST">
Email<input type="text" name="email"><br><br>
Password<input type="text" name="password"><br><br>
<input type="submit" name="submit" value="login"><br>

</form>

