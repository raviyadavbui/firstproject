

<?php 
include"header2.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
	*{
		padding: 0px;
		margin: 0px;
		
		box-sizing: border-box;

	}
	body{
		background:red;
		background-image: url("images/color.jpg");
		height: 100vh;
		background-position: center; 
		background-repeat: no-repeat;
		background-size: cover;
	}
	.row{
		
		background:rgb(255,235,205);
		/*border-top-right-radius: 30px;
		border-bottom-left-radius: 30px;*/
		border-radius: 30px;
		box-shadow: 12px 12px 22px grey;
		
	
	}
	img{
		
		border-top-left-radius: 30px;
		border-bottom-left-radius: 30px;
		
		
		 

	}
	.btn1{
		border:none;
		outline:none;
		height: 50px;
		width: 100%;
		background-color: black;
		color:white;
		border-radius: 4px;
		font-weight: bold;
		font-size:20px;
	}
	.btn1:hover{
		background:white;
		border: 1px solid;
		color:black;
	}
	p a{
		font-size:20px;
	}


</style>

</head>
<body>
	<section class="form my-4 mx-5 bg-"   >
	<div class="container mt-5 p-3" >

			<div class="row no-gutters mb-5" style="margin-top:60px;" >
				<div class="col-lg-5">
					<img src="images/login1.png" class="img-fluid" alt="" style="height: 550px;">
				</div>
				<div class="col-lg-7 px-5 pt-5">
					<h1 class="font-weight-bold py-2">Logo</h1>
					<h4>Sign into your account</h4>
					<form action="login.php" method="Post">
						<div class="form-row">
							<div class="col-lg-7  " style="font-size:20px;">
								<input type="email" name="email" placeholder="email-address" class="form-control my-3 p-4 fs-5">
							</div>
							
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								<input type="password" name="password" placeholder="********" class="form-control my-3 p-4 fs-5">

							</div>
							
						</div>
						<div class="form-row " >
							<div class="col-lg-7">
								<button type="submit" name="button" class="btn1 mt-3 mb-5"> Login</button>
								

							</div>
							
						</div>
						<a href="#">Forgot passwogd </a>
						<p>Don't have an account?<a href="#">Register here</a></p>

					</form>
				</div>
				
			</div>
			
		</div>
		



	</section>




	</body>
</html>

<?php 
include"footer1.php";
?>

