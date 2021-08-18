<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include"Header.php";
?>
<!--<div class="mt-4 mb-4 panel-primary">
		    <div class="panel-body border">
		      <!--<div class="text-on-pannel ml-5 bg-primary px-5 p-2 text-white">Log In</div>-->
				<!--<form method="post" action="#">
					<div class="row mb-4">
						<div class="col-12 d-md-flex justify-md-content-around">
							<div class="col-md-5 d-flex justify-content-around  p-3"><input class="p-2 w-100" type="text" name="userName" placeholder="User Name"></div>
							<div class="col-md-5 d-flex justify-content-around p-3"><input class="p-2 w-100" type="text" name="password" placeholder="*********"></div>
							<div class="col-md-2 d-flex justify-content-around p-3"><input class="p-2 bg-primary text-white w-100" type="button" name="loginButton" value="Log In"></div>
						</div>
					</div>				
				</form>
			</div>
		</div>-->

       <!-- <div class="container py-5">
<div class="container-fluid">
<form action="#" method="post"class="border p-lg-5 p-2">
<div class="container- fluid">
		<div class="row bg-dark">
			
		<div class="col-md-6">
				<div class="form-group">
					<label for="Fist name">Fist Name</label>
					<input  type="text" class="form-control " placeholder="Fist Name" name="Fist name" id="Fist name">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="Last name">Last Name</label>
					<input  type="text" class="form-control " placeholder="Last Name" name="Last name" id="Last name">
				</div>
			</div>




			<div class="col-md-6">
				<div class="form-group">
					<label for="Father name">Father's name</label>
					<input  type="text" class="form-control " placeholder="Father name" name="Father name"id="Father name">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="Mother name">Mother's name</label>
					<input  type="text" class="form-control " placeholder="Mother name" name="Mother name" id="Mother name">
				</div>
			</div>

			<div class="col-lg-3 col-md-6 my-2">
				<div class="form-group">
					<label for="Email">Email addres</label>
					<input  type="email" class="form-control " placeholder="Email" name="Email" id="Email">
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="Phone number">Phone NO:</label>
					<input  type="number" class="form-control " placeholder="Phone number" name="Phone number" id="Phone number">
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="WhatsApp number">WhatsApp No:</label>
					<input  type="number" class="form-control " placeholder="WhatsApp number" name="WhatsApp number" id="WhatsApp number">
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="date_of_birth">Date_of_birth</label>
					<input  type="Date" class="form-control " placeholder="date_of_birth" name="date_of_birth" id="date_of_birth">
				</div>
			</div>

			<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Gender:</label>
	    <div class="form-control">
	    <input type="radio" class="mx-2" checked name="gender" id="male" value="male"><label for="male">Male</label>
	    <input type="radio" class="mx-2" name="gender" id="female" value="female"><label for="female">Female</label>
	    <input type="radio" class="mx-2" name="gender" id="transgender" value="transgender"><label for="transgender">Transgender</label>
		</div>
	  </div>
	</div> 

	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Category:</label>
	    <div class="form-control">
	    <input type="radio" class="mx-2" checked name="category" id="general" value="general"><label for="general">General</label>
	    <input type="radio" class="mx-2" name="category" id="ews" value="ews"><label for="ews">EWS</label>
	    <input type="radio" class="mx-2" name="category" id="obc" value="obc"><label for="obc">OBC</label>
	    <input type="radio" class="mx-2" name="category" id="sc" value="sc"><label for="sc">SC</label>
	    <input type="radio" class="mx-2" name="category" id="st" value="st"><label for="st">ST</label>
		</div>
		</div>
	  
	</div>

	 <div class="col-md-6 my-2">
	<h5>Local Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_address">Address:</label>
		    <textarea name="l_address" id="l_address" class="w-100 form-control" rows="3"></textarea>
		  </div>
		</div> 

		<div class="my-2">
		  <div class="form-group">
		    <label for="l_country">Country</label>
			    <select class="form-control" name="l_country" id="l_country" style="appearance:auto;">
			    	<option value="IN">India</option>
			    	<option value="PK">Pakistan</option>
			    	<option value="CA">Caneda</option>
			    	<option value="AU">Australia</option>
			    	<option value="US">United States of America</option>
			    </select>
		  </div>
		</div> 

		<div class="my-2">
		  <div class="form-group">
		    <label for="p_state">State</label>
			    <select class="form-control" name="p_state" id="p_state" style="appearance:auto;">
			    	<option value="jharkhand">Jharkhand</option>
			    	<option value="bihar">Bihar</option>
			    	<option value="wb">West Bengal</option>
			    	<option value="orissa">Orisha</option>
			    	<option value="up">Uttar Pradesh</option>
			    	<option value="mp">Madhya Pradesh</option>
			    	<option value="chhatisgarh">Chhatisgarh</option>
			    </select>
		  </div>
		</div> 

		<div class="my-2">
		  <div class="form-group">
		    <label for="p_districts">Districts</label>
			    <select class="form-control" name="p_districts" id="p_districts" style="appearance:auto;">
			    	<option value="hazaribagh">Hazaribagh</option>
			    	<option value="gumla">Gumla</option>
			    	<option value="east_champaran">East Champaran</option>
			    	<option value="motihari">Motihari</option>
			    	<option value="siwan">Siwan</option>
			    	<option value="bhojpur">Bhojpur</option>
			    	<option value="varanasi">Varanasi</option>
			    </select>
		  </div>
		</div>

		 <div class=" my-2">
		  <div class="form-group">
		    <label for="p_zipcode">Zip Code:</label>
		    <input type="p_zipcode" class="form-control" placeholder="Enter ZIP Code" name="p_zipcode" id="p_zipcode">
		  </div>
		</div> 
	</div>

	<div class="col-md-6 my-2">
	<h5>Permanent Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_address">Address:</label>
		    <textarea name="p_address" id="p_address" class="w-100 form-control" rows="3"></textarea>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_country">Country</label>
			    <select class="form-control" name="p_country" id="p_country" style="appearance:auto;">
			    	<option value="IN">India</option>
			    	<option value="PK">Pakistan</option>
			    	<option value="CA">Caneda</option>
			    	<option value="AU">Australia</option>
			    	<option value="US">United States of America</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_state">State</label>
			    <select class="form-control" name="p_state" id="p_state" style="appearance:auto;">
			    	<option value="jharkhand">Jharkhand</option>
			    	<option value="bihar">Bihar</option>
			    	<option value="wb">West Bengal</option>
			    	<option value="orissa">Orisha</option>
			    	<option value="up">Uttar Pradesh</option>
			    	<option value="mp">Madhya Pradesh</option>
			    	<option value="chhatisgarh">Chhatisgarh</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_districts">Districts</label>
			    <select class="form-control" name="p_districts" id="p_districts" style="appearance:auto;">
			    	<option value="hazaribagh">Hazaribagh</option>
			    	<option value="gumla">Gumla</option>
			    	<option value="east_champaran">East Champaran</option>
			    	<option value="motihari">Motihari</option>
			    	<option value="siwan">Siwan</option>
			    	<option value="bhojpur">Bhojpur</option>
			    	<option value="varanasi">Varanasi</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_zipcode">Zip Code:</label>
		    <input type="p_zipcode" class="form-control" placeholder="Enter ZIP Code" name="p_zipcode" id="p_zipcode">
		  </div>
		</div> 
	</div>

	<div class="my-2 text-center">
		<input type="submit" name="submit" value="SUBMIT" class="bg-primary text-white px-5 py-2">
		<input type="reset" name="submit" value="RESET" class="bg-primary text-white px-5 py-2 mx-2">
	</div>

		</div>
		
	</form>

</div>

</div>-->

<!--<div class="container py-5">


<form action="register_code.php" method="post" class="border p-lg-5 p-2 " enctype="multipart/form-data" >
<div class="row">
 	<div class="my-2 text-center mb-3">
 		<h2>Student Registration Form</h2>
 		<hr class="mx-auto w-25">
 	</div>

 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="student_first_name">Student First Name :</label>
	    <input type="text" class="form-control" placeholder="Student First Name?" name="student_first_name" id="student_first_name">
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="student_last_name">Student Last Name :</label>
	    <input type="text" class="form-control" placeholder="Student Last Name?" name="student_last_name" id="student_last_name">
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="father_name">Father's Name:</label>
	    <input type="text" class="form-control" placeholder="Enter Father's Name?" name="father_name" id="father_name">
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="mother_name">Mother's Name:</label>
	    <input type="text" class="form-control" placeholder="Enter Mother's Name?" name="mother_name" id="mother_name">
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="email">E-Mail:</label>
	    <input type="email" class="form-control" placeholder="Enter Student Email ID?" name="email" id="email">
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="whatsapp_no">WhatsApp No:</label>
	    <input type="number" class="form-control" placeholder="Enter WhatsApp No?" name="whatsapp_no" id="whatsapp_no">
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="number" class="form-control" placeholder="Enter Phone?" name="phone" id="phone">
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="date_of_birth">Date of Birth:</label>
	    <input type="date" class="form-control" placeholder="Date of Birth?" name="date_of_birth" id="date_of_birth">
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Gender:</label>
	    <div class="form-control">
	    <input type="radio" class="mx-2" checked name="gender" id="male" value="male"><label for="male">Male</label>
	    <input type="radio" class="mx-2" name="gender" id="female" value="female"><label for="female">Female</label>
	    <input type="radio" class="mx-2" name="gender" id="transgender" value="transgender"><label for="transgender">Transgender</label>
		</div>
	  </div>
	</div> 

 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Category:</label>
	    <div class="form-control">
	    <input type="radio" class="mx-2" checked name="category" id="general" value="general"><label for="general">General</label>
	    <input type="radio" class="mx-2" name="category" id="ews" value="ews"><label for="ews">EWS</label>
	    <input type="radio" class="mx-2" name="category" id="obc" value="obc"><label for="obc">OBC</label>
	    <input type="radio" class="mx-2" name="category" id="sc" value="sc"><label for="sc">SC</label>
	    <input type="radio" class="mx-2" name="category" id="st" value="st"><label for="st">ST</label>
		</div>
	  </div>
	</div> 

	<div class="col-md-6 my-2">
	<h5>Local Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_address">Address:</label>
		    <textarea name="l_address" id="l_address" class="w-100 form-control" rows="3"></textarea>
		  </div>
		  
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_country">Country</label>
			    <select class="form-control" name="l_country" id="l_country" style="appearance:auto;">
			    	<option value="IN">India</option>
			    	<option value="PK">Pakistan</option>
			    	<option value="CA">Caneda</option>
			    	<option value="AU">Australia</option>
			    	<option value="US">United States of America</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_state">State</label>
			    <select class="form-control" name="l_state" id="l_state" style="appearance:auto;">
			    	<option value="jharkhand">Jharkhand</option>
			    	<option value="bihar">Bihar</option>
			    	<option value="wb">West Bengal</option>
			    	<option value="orissa">Orisha</option>
			    	<option value="up">Uttar Pradesh</option>
			    	<option value="mp">Madhya Pradesh</option>
			    	<option value="chhatisgarh">Chhatisgarh</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_districts">Districts</label>
			    <select class="form-control" name="l_districts" id="l_districts" style="appearance:auto;">
			    	<option value="hazaribagh">Hazaribagh</option>
			    	<option value="gumla">Gumla</option>
			    	<option value="east_champaran">East Champaran</option>
			    	<option value="motihari">Motihari</option>
			    	<option value="siwan">Siwan</option>
			    	<option value="bhojpur">Bhojpur</option>
			    	<option value="varanasi">Varanasi</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_zipcode">Zip Code:</label>
		    <input type="l_zipcode" class="form-control" placeholder="Enter ZIP Code" name="l_zipcode" id="l_zipcode">
		  </div>
		</div> 

	</div>


	<div class="col-md-6 my-2">
	<h5>Permanent Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_address">Address:</label>
		    <textarea name="p_address" id="p_address" class="w-100 form-control" rows="3"></textarea>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_country">Country</label>
			    <select class="form-control" name="p_country" id="p_country" style="appearance:auto;">
			    	<option value="IN">India</option>
			    	<option value="PK">Pakistan</option>
			    	<option value="CA">Caneda</option>
			    	<option value="AU">Australia</option>
			    	<option value="US">United States of America</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_state">State</label>
			    <select class="form-control" name="p_state" id="p_state" style="appearance:auto;">
			    	<option value="jharkhand">Jharkhand</option>
			    	<option value="bihar">Bihar</option>
			    	<option value="wb">West Bengal</option>
			    	<option value="orissa">Orisha</option>
			    	<option value="up">Uttar Pradesh</option>
			    	<option value="mp">Madhya Pradesh</option>
			    	<option value="chhatisgarh">Chhatisgarh</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_districts">Districts</label>
			    <select class="form-control" name="p_districts" id="p_districts" style="appearance:auto;">
			    	<option value="hazaribagh">Hazaribagh</option>
			    	<option value="gumla">Gumla</option>
			    	<option value="east_champaran">East Champaran</option>
			    	<option value="motihari">Motihari</option>
			    	<option value="siwan">Siwan</option>
			    	<option value="bhojpur">Bhojpur</option>
			    	<option value="varanasi">Varanasi</option>
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_zipcode">Zip Code:</label>
		    <input type="p_zipcode" class="form-control" placeholder="Enter ZIP Code" name="p_zipcode" id="p_zipcode">
		  </div>
		</div> 
	</div>

	<div class="my-2 text-center">
		<input type="submit" name="submit" value="SUBMIT" class="bg-primary text-white px-5 py-2">
		<input type="reset" name="submit" value="RESET" class="bg-primary text-white px-5 py-2 mx-2">
	</div>
	
</div>
</form>













</div>-->

<div class="container-fluid bg-primary text-white text-center pt-2 mb-2 fs-bold"><H1>A.S.M.CONVENT SCHOOL</H1></div>
	<section>
		<div class="container-fluid">
			<!-- row -->
			<div class="row">
				<!-- first column -->
				<div class="col-sm-12 col-md-12 col-lg-8">
					
						<P class="text-center p-2 bg-secondary fs-3">Ragistration Form</P>
						<!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
						<input type="text" name class="form-control mt-3" placeholder="first name">
						<input type="text" name class="form-control mt-3" placeholder="last name">
						<input type="text" name class="form-control mt-3" placeholder="email name">
						<input type="text" name class="form-control mt-3" placeholder="password name">
						<textarea class="form-control mt-3" placeholder="Address"></textarea>
						<center>	<button type="button" class=" btn btn-warning active mt-2 pr-5">ragister now</button></center>
				</div>
				<!-- second column -->
				<div class="col-sm-12 col-md-12 col-lg-4">
					<img src="images/sc.jpg" class="img-thumbnail" alt="sc" class="img-thumbnail img-fluid  " style="width:100%;">
					<img src="images/hool.jpg" class="img-thumbnail" alt="hool" class="img-thumbnail img-fluid md-w-20  "style="width:100%;" >
				</div>
			
			</div>			
		</div>
	<!--   -->	
	<div class="container-fluid">
		<div class="row m-3">
			<div class="col-sm-12 col-md-12 col-lg-12 ">
				<img src="images/1234.jpg" class="img-thumbnail" alt="1234" class="img-thumbnail img-fluid p-3 mt-2 w-100%" style="height:100%;width:100%;">
			</div>

		</div>
	</div>
	<div class="container-fluid ">
		<div class="row m-3">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid  w-50 mx-auto" src="images/logo.jpg" alt="Card image">
				    <div class="card-body bg-warning ">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto" src="images/logo.jpg" alt="Card image">
				    <div class="card-body bg-warning">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
				
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto bg-danger" src="images/logo.jpg" alt="Card image">
				    <div class="card-body bg-warning">
				      <h4 class="card-title">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
				
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card mb-3 w-100">
				    <img class="card-img-top img-fluid w-50 mx-auto " src="images/logo.jpg" alt="Card image">
				    <div class="card-body bg-warning">
				      <h4 class="card-title ">John Doe</h4>
				      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				      <a href="#" class="btn btn-primary">See Profile</a>
				 	</div>
				 </div>
				
			</div>
</div>





<?php 
include"Footer.php";
?>
</body>
</html>