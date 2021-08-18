<?php 
include"Header.php";
?>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">-->



	<div class="position-absolute m-3 d-flex">
        <img class="w-25 w-md-50 w-lg-50 w-xl-50 img-fluid" src="./images/abhiitech.jpg">
    </div>
	<img class="img-fluid rounded w-100" src="images/programming_banner.jpg">
		<div class="bg-danger mb-3 text-white text-center p-3">
			<marquee direction="right">Abhi I-Tech is a software development company. | Abhi I-Tech is a software development company. | Abhi I-Tech is a software development company.</marquee>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card p-3 mb-4">
					<h3 class="">Column1</h3>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card p-3 mb-4">
					<h3>Column 2</h3>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card p-3 mb-4">
					<h3>Column 3</h3>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
				</div>
			</div>
		</div>
		<div class="mt-4 mb-4 panel-primary">
		    <div class="panel-body border">
		      <div class="text-on-pannel ml-5 bg-primary px-5 p-2 text-white">Log In</div>
				<form method="post" action="#">
					<div class="row mb-4">
						<div class="col-12 d-md-flex justify-md-content-around">
							<div class="col-md-5 d-flex justify-content-around p-3"><input class="p-2 w-100" type="text" name="userName" placeholder="User Name"></div>
							<div class="col-md-5 d-flex justify-content-around p-3"><input class="p-2 w-100" type="text" name="password" placeholder="*********"></div>
							<div class="col-md-2 d-flex justify-content-around p-3"><input class="p-2 bg-primary text-white w-100" type="button" name="loginButton" value="Log In"></div>
						</div>
					</div>				
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table border table-light table-hover table-responsive mb-4">
			<thead>
				<tr>
					<th>Sr.No</th>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>	
			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<td>Manish</td>
					<td>Chanchad</td>
				</tr>
				<tr>
					<th>2</th>
					<td>Sukesh</td>
					<td>mahto</td>
				</tr>
				<tr>
					<th>3</th>
					<td>Dinesh</td>
					<td>Diwan</td>
				</tr>
				<tr>
					<th>4</th>
					<td>Raza</td>
					<td>Murad</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="2">Total</th><th>4</th>
				</tr>
			</tfoot>
		</table>
		<div class="row">
			<div class="card-deck col-sm-6 col-md-4 col-lg-3">
			  <div class="card mb-3 w-100">
			    <img class="card-img-top img-fluid w-50 mx-auto" src="images/abhiitech.jpg" alt="Card image">
			    <div class="card-body">
			      <h4 class="card-title">John Doe</h4>
			      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
			      <a href="#" class="btn btn-primary">See Profile</a>
			 	</div>
			 </div>
			</div>
				 <div class="col-sm-6 col-md-4 col-lg-3">
				  <div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto " src="images/abhiitech.jpg" alt="Card image">
				    <div class="card-body">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
			 </div>
				 <div class="col-sm-6 col-md-4 col-lg-3">
				  <div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto" src="images/abhiitech.jpg" alt="Card image" >
				    <div class="card-body">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
			 </div>
				 <div class="col-sm-6 col-md-4 col-lg-3">
				  <div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto" src="images/abhiitech.jpg" alt="Card image">
				    <div class="card-body">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
			 </div>
				 <div class="col-sm-6 col-md-4 col-lg-3">
				  <div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto" src="images/abhiitech.jpg" alt="Card image">
				    <div class="card-body">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
			 </div>
		</div>
	</div>

	<a class="nav-link text-white font-weight-bold" href="tomy.php">Register</a>
	<li class="nav-item">
		        <a class="nav-link text-white font-weight-bold" href="service.php">service</a>
		      </li>

<?php
include"Footer.php";
?>