<?php

include"header.php";

?>

<script type="text/javascript">


</script>
<div class="container py-5">
<div class="container-fluid">
<form name="myForm" action="register_code.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

<div class="container- fluid">
		<div class="row">
			
		<div class="col-md-6">
				<div class="form-group">
					<label for="student_first_name">Student First Name :</label>
					<input autofocus="true" type="text"  class="form-control " placeholder="First Name" name="student_first_name" id="student_first_name">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="student_last_name">Last Name</label>
					<input  type="text" class="form-control " placeholder="Last Name" name="student_last_name" id="student_last_name">
				</div>
			</div>




			<div class="col-md-6">
				<div class="form-group">
					<label for="father_name">Father's name</label>
					<input  type="text" class="form-control " placeholder="Father name" name="father_name"id="father_name">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="Mother_name">Mother's name</label>
					<input  type="text" class="form-control " placeholder="Mother name" name="Mother_name" id="Mother_name">
				</div>
			</div>

			<div class="col-lg-3 col-md-6 my-2">
				<div class="form-group">
					<label for="email">Email addres</label>
					<input  type="text" class="form-control " placeholder="Email" name="email" id="email">
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="Phone_number">Phone NO:</label>
					<input  type="text" class="form-control " placeholder="Phone number" name="Phone_number" id="Phone_number">
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="WhatsApp_number">WhatsApp No:</label>
					<input  type="number" class="form-control " placeholder="WhatsApp number" name="WhatsApp_number" id="WhatsApp_number">
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
	    <input type="radio" class="mx-2"  name="gender" id="female" value="female"><label for="female">Female</label>
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
			    	<option value="Ballia">Ballia</option>
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
			    	<option value="Ballia">Ballia</option>
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
</div>
</div>
<?php

include"footer.php";

?>