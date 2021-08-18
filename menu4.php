<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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
   img{
     margin-top:5px;
     
   }
   h3{
     text-align:center;
   }
   </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top ">
<div class="container">
  <a class="navbar-brand " href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu4.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rohit4.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Abouts</a>
      </li>

      </ul>
      </div>
      
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/1234.jpg" class="d-block w-100 h-100  img-fluid" alt="...">
    
      <div class="carousel-caption d-none d-md-block">
        <h5>Rajesh yadav</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        <p><a href="#">More Info</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/simage.jpg" class="d-block w-100 h-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rajesh yadav</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        <p><a href="#">More Info</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/hd.jpg" class="d-block w-100 h-100  img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rajesh yadav</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        <p><a href="#">More Info</a></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div class=>
<div class="row row-cols-1 row-cols-md-4">
  <div class="col mb-4">
    <div class="card">
      <img src="images/flower.jpg" class="card-img-top" alt="flower">
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <img src="images/flower1.jpg" class="card-img-bottom" alt="flower1">

      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/flower.jpg " class="card-img-top " alt="flower" >
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="images/flower4.jpg" class="card-img-top" alt="flower4">
      <div class="card-body ">
        
      </div>
    </div>
  </div>
  
</div>
</div>


<div class="container">
		<div class="row ">
			<div class="col-md-4">
				<div class="card p-3 mb-4  border border-primary p-3">
					<h3 class="bg-secondary p-3 mb-2">Home</h3>
					<p class="text-justify border border-danger p-3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card p-3 mb-4 border border-primary p-3">
					<h3 class="bg-secondary p-3 mb-2">About</h3>
					<p class="text-justify border border-danger p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card p-3 mb-4 border border-primary p-3">
					<h3 class="bg-secondary p-3 mb-2">Cotant</h3>
					<p class="text-justify border border-danger p-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
				</div>
			</div>
		</div>


    <div class="container">
  <h2>Aligning images</h2>
  <p>Use the float classes to float the image to the left or to the right:</p> 
  <img src="images/tj.jpg" class="float-left" alt="tj" width="304" height="236"> 
  

  <img src="images/tj1.jpg" class="float-right" alt="tj1" width="304" height="236"> 
</div>
</body>
</html>