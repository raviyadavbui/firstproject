<?php
if(isset($_GET["login_message"]))
{
  ?>
  <script>alert("<?php echo $_GET["login_message"];?>")</script>
  <?php
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->


    <link rel="stylesheet" href="css/stylebetween.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>


    <style>
    .carousel-item{
		height:100vh;
		min-height: :300px;
		background:no-repeat center center scroll;
		-webkit-background-size:cover;
		 background-size:cover;
	}
  .carousel-caption{
		bottom:220px;

	}
   .carousel-caption h5{
     font-size:45px;
     text-transform:uppercase;
     letter-spacing:2px;
     margin-top:25px;
     font-family:merienda;

   }
   .carousel-caption p{
    width: 60%;
		margin: auto;
		font-size: 18px;
		line-height: 1.9;
		font-family: poppins;
		

   }
   .carousel-caption a{
    text-transform: uppercase;
		background: #262626;
		padding:10px 30px;
		display: inline-block;
		color:#fff;
		margin-top: 15px; 
   }

   .navbar-nav a{
    
    font-family:poppins;
    font-size:18px;
    text-transform: uppercase;
    font-weight:bold;
   
}
.navbar-light .navbar-brand{
       color:red;
       font-size:25px;
       text-transform: uppercase;
       font-weight:bold;
       letter-spacing:2px;
   }



    </style>
  

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light  fixed-top bg-success">
<div class="container ">
  <a class="navbar-brand " href="#">CREATIVO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto " style="margin-bottom:10px;">
      <li class="nav-item active ">
        <a class="nav-link" href="menu4.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rohit4.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contant</a>
      </li>
      
    </ul>
  </div>
  </div>
</nav>
  
