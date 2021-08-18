<!DOCTYPE html>
<html>
<head>
	<title></title>
	//Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
//jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
//Latest compiled JavaScript
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
	.carousel-item{
		height:100vh;
		min-height: :300px;
		background:no-repeat center center scroll;
		webkit-background-size:cover;
		 background-size:cover;
	}
	.carousel-Caption p{
		text-transform: uppercase;
		background: #262626;
		padding:10px 30px;
		display: inline-block;
		color:#fff;
		margin-top: 15px; 
		

	}
	.carousel-Caption h5{
		font-size: 45px;
		text-transform: uppercase;
		letter-spacing: 2px;
		margin-top: 25px;
		font-family: merienda;
		background-image: url("photographer.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
	}




</style>



</head>
<body>
	<div>
		<h1>Details Entry Form</h1>
	</div>
<form action="" method="post">
	<table border="1" align="center">
		<tr>						
			<td><lable>Enter First Name</lable></td>				
			<td><input type="text" name="first_name"></td>
		</tr>

		<tr>						
			<td><lable>Enter Last Name</lable></td>				
			<td><input type="text" name="last_name"></td>
		</tr>

		<tr>						
			<td><lable>Gender</lable></td>				
			<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</td>
		</tr>
		<tr>						
			<td><lable>Enter Email</lable></td>				
			<td><input type="email" name="email"></td>
		</tr>
		<tr>						
			<td><lable>Enter Phone</lable></td>				
			<td><input type="phone" name="phone"></td>
		</tr>
		<tr>						
			<td><lable>Submit</lable></td>				
			<td><input type="submit" name="save" value="Submit"></td>
		</tr>
	</table>
	





</form>





</body>
</html>