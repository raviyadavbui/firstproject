<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
		<h1>Details Entry Form</h1>
	</div>
<form action="config2.php" method="post">
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
							
			<td colspan='2' align="center"><input type="submit" name="save" value="Submit"></td>
		</tr>
	</table>
	





</form>

</body>
</html>