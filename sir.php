<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BS 5</title>
	<!-- CSS only -->
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- My own Stylesheet CDN Link -->
<style>
    /* Small devices (landscape phones, 576px and up)*/
@media (min-width: 0px) {
	.bg-sm-danger
	{
		background-color: brown;
	}
	.top{
			background-color:#ccc;
			padding: 6px;
			text-align: center;
			font-weight: bold;
			color: #f00;
	}
	.fa
	{
		text-decoration: none;
		color: #000;
		padding: 5px;
	}
	.top1,.top2
	{
		font-size: 13px;
	}
	.top2
	{
		display: none;
	}
	.img1
	{
		width: 100%;
		height: 200px;
	}

	.cont{
		display: none;
	}
}
@media (min-width: 313px) {
	.top1,.top2
	{
		font-size: 16px;
	}
	.top2
	{
		display: inline-block;
	}
	.top{
			background-color:#ccc;
			padding: 6px;
			text-align: center;
			font-weight: bold;
			color: #f00;
			display: flex;
			flex: 1;
			justify-content: space-around;
	}

}

@media (min-width: 576px) {
	.bg-sm-danger
	{
		background-color: transparent;
	}
	.top{
			background-color:red;
			color: #fff;
	}
	.img1
	{
		height: 250px;
	}
	.cont{
		width: 100%;
		font-weight: bold;
		text-align: center;
		background-color: #fc5;
		padding: 5px;
		display: inline-block;
	}

}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
	.top{
			background-color:green;
	}
	.img1
	{
		height: 300px;
	}
	.cont{
		text-align: right;
		padding-right: 50px;
	}

}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
	.top{
			background-color:blue;
	}
	.img1
	{
		height: 400px;
	}

}

/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
	.top{
			background-color:yellow;
			color: #000;
	}
	.img1
	{
		height: 500px;
	}

}
</style>
</head>
<body>
	<div class="container-fluid text-center bg-danger text-white p-2 text-uppercase fs-4">Abhi I-Tech</div>
	<div class="container-fluid text-center bg-success text-white text-uppercase">
		<div class="row d-flex justify-content-around ">
			<div class="col-sm-6 p-2"><i class="fa fa-bullhorn text-white"></i> +91 9039137768</div>
			<div class="col-sm-6 bg-sm-danger bg-md-white p-2 mt-sm-0" >
				<a class="text-white p-1" href="mailto:verma.abhishek92@gmail.com"><i class="fa fa-envelope text-white"></i></a>
				<a class="text-white p-1" href="https://www.facebook.com/abhiitech" target="_new"><i class="fa fa-facebook text-white"></i></a>
				<a class="text-white p-1" href="https://www.youtube.com/channel/UCr5ZkOTtdgIi_Tge5pbo3iA" target="_new"><i class="fa fa-youtube text-white fa-xl"></i></a>
				<a class="text-white p-1" href="https://www.linkedin.com/in/abhishek-verma-a44b3535/" target="_new"><i class="fa fa-linkedin text-white p-1"></i></a>
				<a class="text-white p-1" href="https://www.instagram.com/verma.abhishek92/" target="_new"><i class="fa fa-instagram text-white"></i></a>
			</div>			
		</div>
		<div class="position-absolute m-3 d-flex">
	        <img class="w-25 w-md-50 w-lg-50 w-xl-50 img-fluid" src="./images/abhiitech.jpg">
	    </div>
	</div>
	<img class="img-fluid mb-5 rounded w-100" src="images/banner.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="">Column1</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
			</div>
			<div class="col-md-4">
				<h3>Column 2</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
			</div>
			<div class="col-md-4">
				<h3>Column 3</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
			</div>
		</div>
		
	</div>
	<script type="text/javascript">
			var loadFile = function(event) {
		    var output = document.getElementById('dp_preview');
		    output.src = URL.createObjectURL(event.target.files[0]);
		    output.onload = function() {
		      URL.revokeObjectURL(output.src) // free memory
		    }
		  };
	</script>
 	<div class="col-md-6 my-2 mx-2">
	  <div class="form-group">
	  	<input type="file" class="form-control custom-file-input" accept="image/*" id="dp" name="dp" onchange="loadFile(event)" required>
	    <label class="custom-file-label" for="dp">Display Picture</label>
	  </div>
	  <div class="form-group card p-2" style="width: 8rem; border:solid 3px;">
	  	<img id="dp_preview" class="card-img-top" src="images/img_preview.png" style="width:100px;height: 100px;" alt="Your Display Picture" />
	  </div>
	</div> 
 	<div class="col-md-5 my-2 mx-2">
	  <div class="form-group">
	  	<input type="file" class="form-control custom-file-input" id="marksheet" name="marksheet" required>
	    <label class="custom-file-label" for="dp">10th Mark-Sheet</label>
	  </div>
	</div> 

</body>
</html>