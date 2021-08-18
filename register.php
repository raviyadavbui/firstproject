

<?php
include"header.php";
?>
<script type="text/javascript">
/*$(document).ready(function(){
	$.getJSON( "js/countries.json", function( data ) {
		$("#l_country").html("<option>Select country</option>");
  for(var a=0;a<data.length;a++)
  {
  	$("#l_country").append("<option value='"+data[a]["id"]+"'>"+data[a]["name"]+"</option>");
  }
});

$('#l_country').on('change', function() {
	var country_code=this.value;
	$("#l_state").html("<option>Select state</option>");
	$.getJSON( "js/states.json",{country_code:country_code}, function( data ) {
		var items = data.filter(function(obj){
			return obj.country_id == country_code;
		});
	  for(var a=0;a<items.length;a++)
	  {
	  	$("#l_state").append("<option value='"+items[a]["id"]+"'>"+items[a]["name"]+"</option>");
	
	  }
	});
});
$('#l_state').on('change', function() {
	var state_code=this.value;
	$("#l_districts").html("<option>Select City</option>");
	$.getJSON( "js/cities.json",{state_code:state_code}, function( data ) {
	// now apply your filter:
	var	items = data.filter(function(obj) {
		  // return the filtered value
		  return obj.state_id == state_code;
		});
	  for(var a=0;a<items.length;a++)
	  {
	  	$("#l_districts").append("<option value='"+items[a]["id"]+"'>"+items[a]["name"]+"</option>");
	
	  }

	});
});


});*/



function validateForm() {
  var student_first_name = document.forms["myForm"]["student_first_name"];
  var student_last_name = document.forms["myForm"]["student_last_name"];
  var father_name = document.forms["myForm"]["father_name"];
  var Mother_name = document.forms["myForm"]["Mother_name"];
  var email = document.forms["myForm"]["email"];
  var WhatsApp_number = document.forms["myForm"]["WhatsApp_number"];
  var Phone_number = document.forms["myForm"]["Phone_number"];
  var date_of_birth = document.forms["myForm"]["date_of_birth"];
  var l_address = document.forms["myForm"]["l_address"];
  /*var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})*$/;*/
  var regex_email = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})*$/;
  var regex_Phone_number=/^([0-9]{10})*$/;
  var regex_text=/^([a-zA-Z ])*$/;
  var regex_date_of_birth = ("(\\d{4})-(0?[1-9]|1[012])-(0?[1-9]|[12][0-9]|3[01])");
  if (student_first_name.value == "") {
    alert("Please Enter your first name  ");
	student_first_name.focus();
    return false;
  }
  if ((student_first_name.value).length<3) {
    alert("Student first name must be greater than two charecters! ");
    return false;
  }

  if(!regex_text.test(student_first_name.value))
  {
    alert("Student First Name Must be a Text!");
    student_first_name.focus();
    return false;  	
  }



  if (student_last_name.value == "") {
    alert("Please Enter your last  name ");
	student_last_name.focus();
    return false;
  }
  if(!regex_text.test(student_last_name.value))
  {
    alert("Student last Name Must be a Text!");
    student_last_name.focus();
    return false;  	
  }
  
  if ((father_name.value == "") ||((father_name.value).length<3)) {
    alert("Please Enter your father name & must be greater than two charecters! ");
    return false;
  }
  if(!regex_text.test(father_name.value))
  {
    alert("father_name Name Must be a Text!");
	father_name.focus();
    return false;  	
  }


  if (( Mother_name.value == "") ||(( Mother_name.value).length<3)) {
    alert("Please Enter your mother name & must be greater than two charecters! ");
    return false;
  }
  if(!regex_text.test(Mother_name.value))
  {
    alert("Mother_name Name Must be a Text!");
    Mother_name.focus();
    return false;  	
  }



  if ((email .value == "") || !regex_email.test(email .value)) {
    alert("email is invalid ");
	email.focus();
    return false;
  }
  if(( WhatsApp_number.value=="") || !regex_Phone_number.test( WhatsApp_number.value))
  {
    alert("WhatsApp Number is Required & Must have 10 Digits!");
    whatsapp_no.focus();
    return false;  	
  }

  if ((Phone_number.value == "")|| !regex_Phone_number.test(Phone_number.value)) {
    alert("Phone Number is Required & Must have 10 Digits! ");
    return false;
  }
  
  if (l_address.value == "") {
    alert("Please Enter your local address  name ");
	l_address.focus();
    return false;
  }
  if ((date_of_birth .value == "") || !regex_date_of_birth.test(date_of_birth .value)) {
    alert( "Invalid date of birth");
	date_of_birth.focus();
    return false;
  }
  if (l_address.value == "") {
    alert("Please Enter your local address  name ");
	l_address.focus();
    return false;
  }
  return true;
}
</script>
<div class="container py-5">
<div class="container-fluid">
<form name="myForm" action="" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">

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
	
	<div class="my-2 text-center">
		<input type="submit" name="submit" value="SUBMIT" class="bg-warning text-white px-5 py-2 ">
		<input type="reset" name="submit" value="RESET" class="bg-warning text-white px-5 py-2 mx-2 "style="text-align:center">

	</div>

		</div>
		
	</form>

</div>
</div>
</div>
<?php
include"footer1.php";
?>
<?php
include"config.php";
if(isset($_POST["submit"])){
	$first_name = $_POST['student_first_name'];
	$last_name = $_POST['student_last_name'];
	$fathers_name = $_POST['father_name'];
	$mothers_name = $_POST['Mother_name'];
	$email = $_POST['email'];
	$phone = $_POST['Phone_number'];
	$whatsapp = $_POST['WhatsApp_number'];
	$dob = $_POST['date_of_birth'];
	$gender = $_POST['gender'];
	$category = $_POST['category'];
	$l_address = $_POST['l_address'];
	$l_country = $_POST['l_country'];
	$l_state = $_POST['l_state'];
	$l_city = $_POST['l_districts'];
	$l_zipcode = $_POST['l_zipcode'];
	$p_address = $_POST['p_address'];
	$p_country = $_POST['p_country'];
	$p_state = $_POST['p_state'];
	$p_city = $_POST['p_districts'];
	$p_zipcode = $_POST['p_zipcode'];
	$dp = $_POST['dp'];
	$marksheet = $_POST['marksheet'];

	$insertquery = " insert into student_registration(first_name,last_name,father_name,
	mother_name,email,phone,whatsapp,dob,gender,category,l_address,l_country,l_state,l_city,
	
	l_zipcode ,p_address,p_country,p_state,p_city,p_zipcode ,dp,marksheet) values('$first_name','$last_name','$fathers_name','$mothers_name','$email','$phone','$whatsapp',
	'$dob','$gender','$category','$l_address','$l_country','$l_state','$l_city ','$l_zipcode','$p_address','$p_country','$p_state ','$p_city','$p_zipcode','$dp','$marksheet')";

	$res = mysqli_query($conn,$insertquery);

	if($res){
		?>
		<script>
			alert("data insertted properly");

		</script>
		<?php
	}else{
		?>
		<script>
			alert("data not insertted properly");

		</script>
		<?php
	}

	
	

}



?>
