if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
{
		$student_last_name_error=$mothers_name_error=$p_address_error="";
		$student_last_name=$mothers_name=$p_address="";
		$error=0;
	//	echo "asd".$_POST["student_last_name"];
		function test_input($data) 
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

	if (empty($_POST["student_last_name"])) {
	    $student_last_name_error = "Student Last Name is required";
	    $error=$error+1;
	  } else {
	    $student_last_name = test_input($_POST["student_last_name"]);
	}

	if (empty($_POST["mother_name"])) {
	    $mothers_name_error = "Mother Name is required";
	    $error=$error+1;
	  } else {
	    $mothers_name = test_input($_POST["mother_name"]);
	}

	if (empty($_POST["p_address"])) {
	    $p_address_error = "Permanent Address Name is required";
	    $error=$error+1;
	  } else {
	    $p_address = test_input($_POST["p_address"]);
	}
}
?>
<?php
include"header.php";
?>
<script type="text/javascript">
$(document).ready(function(){

	$.getJSON( "js/countries.json", function( data ) {
	$("#l_country").html("<option>Select Country</option>");
  for(var a=0;a<data.length;a++)
  {
  	$("#l_country").append("<option <?php if(isset($_POST['l_country']) && 
  		$_POST['l_country']=='?>"+data[a]["id"]+"<?php' ) echo 'SELECTED'; ?> value='"+data[a]["id"]+"'>"+data[a]["name"]+"</option>");
  }
});

$('#l_country').on('change', function() {
	var country_code=this.value;
	$("#l_state").html("<option>Select States</option>");
	$.getJSON( "js/states.json",{country_code:country_code}, function( data ) {
	// now apply your filter:
	var	items = data.filter(function(obj) {
		  // return the filtered value
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


});

function validateForm() {
  var student_first_name = document.forms["myForm"]["student_first_name"];
  var father_name = document.forms["myForm"]["father_name"];
  var email = document.forms["myForm"]["email"];
  var whatsapp_no = document.forms["myForm"]["whatsapp_no"];
  var phone = document.forms["myForm"]["phone"];
  var dob = document.forms["myForm"]["date_of_birth"];
  
  var regex_email = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})*$/;
  var regex_phone=/^([0-9]{10})*$/;
  var regex_text=/^([a-zA-Z ])*$/;
  if (student_first_name.value == "") {
    alert("Please Fill Student First Name?");
    student_first_name.focus();
    return false;
  }
  if((student_first_name.value).length<3)
  {
    alert("Student First Name Must be greater than two Charecters!");
    student_first_name.focus();
    return false;  	
  }
  if(!regex_text.test(student_first_name.value))
  {
    alert("Student First Name Must be a Text!");
    student_first_name.focus();
    return false;  	
  }
  if((father_name.value=="") || ((father_name.value).length<3) || !regex_text.test(father_name.value))
  {
    alert("Father Name is Required & Must be greater than two Charecters!");
    father_name.focus();
    return false;  	
  }
  if((email.value=="") || !regex_email.test(email.value))
  {
    alert("Email is Required & Must be in their proper Fomat!");
    email.focus();
    return false;  	
  }

  if((whatsapp_no.value=="") || !regex_phone.test(whatsapp_no.value))
  {
    alert("WhatsApp Number is Required & Must have 10 Digits!");
    whatsapp_no.focus();
    return false;  	
  }

  if((phone.value=="") || !regex_phone.test(phone.value))
  {
    alert("Phone Number is Required & Must have 10 Digits!");
    phone.focus();
    return false;  	
  }
  
  /*var regex_date = "^[0-9]{2}-[0-9]{2}-[0-9]{4}$";
  var date=dob.value.split("-");
  if(date[0]>31 || date[0]<1)
  {
    alert("Day is Not Correct");
    dob.focus();
    return false;  	  	
  }
  if(date[1]>12 || date[1]<1)
  {
    alert("Month is Not Correct");
    dob.focus();
    return false;  	  	
  }
  if(date[2]>2010 || date[2]<1950)
  {
    alert("Year is Not Correct");
    dob.focus();
    return false;  	  	
  }
  if((dob.value=="") || !dob.value.match(regex_date))
  {
    alert("Date is Not in their Correct Format");
    dob.focus();
    return false;  	
  }
	var currentDate = new Date();*/
//  alert(currentDate.getTime());
	/*var new_dob=new Date(date[2]+'-'+date[1]+'-'+date[0]);
	var start_date=new Date("1998-01-01");
	var end_date=new Date("2002-12-31");
	if(!(new_dob.getTime()>=start_date.getTime() && new_dob.getTime()<=end_date.getTime()))
	{
		alert("Date of Birth is Not Correct");
		return false;
	}*/


  return true;
}
</script>
<div class="container py-5">


<form name="myForm" onsubmit="return validateForm()" method="post" class="border p-lg-5 p-2" enctype="multipart/form-data" action="register_code.php">
<div class="row">
 		<label style="color:#f00; font-weight:bold;">All Fields Marked with * is Mandetory!</label>
 	<div class="my-2 col-sm-12 text-center mb-3">
 		<h2 class="display-6">Student Registration Form</h2>
 		<hr class="mx-auto w-25">
 	</div>

 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="student_first_name">Student First Name :</label>
	    <input type="text" class="form-control" placeholder="Student First Name?" name="student_first_name" id="student_first_name" autofocus="true" value="<?php if(isset($_POST["student_first_name"])) echo $_POST["student_first_name"]; ?>" >
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="student_last_name">Student Last Name :</label>
	    <input type="text" class="form-control" placeholder="Student Last Name?" name="student_last_name" id="student_last_name" value="<?php if(isset($_POST["student_last_name"])) echo $_POST["student_last_name"]; ?>" >
	    <label style="color:#f00; font-weight: bold;">* <?php if(isset($student_last_name_error) ) echo $student_last_name_error; ?></label>
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="father_name">Father's Name:</label>
	    <input type="text" class="form-control" placeholder="Enter Father's Name?" name="father_name" id="father_name" value="<?php if(isset($_POST["father_name"])) echo $_POST["father_name"]; ?>" >
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="mother_name">Mother's Name:</label>
	    <input type="text" class="form-control" placeholder="Enter Mother's Name?" name="mother_name" id="mother_name" value="<?php if(isset($_POST["mother_name"])) echo $_POST["mother_name"]; ?>" >
	    <label style="color:#f00; font-weight: bold;">* <?php if(isset($mothers_name_error) ) echo $mothers_name_error; ?></label>
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="email">E-Mail:</label>
	    <input type="text" class="form-control" placeholder="Enter Student Email ID?" name="email" id="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" >
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="whatsapp_no">WhatsApp No:</label>
	    <input type="text" class="form-control" placeholder="Enter WhatsApp No?" name="whatsapp_no" id="whatsapp_no" value="<?php if(isset($_POST["whatsapp_no"])) echo $_POST["whatsapp_no"]; ?>" >
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="text" class="form-control" placeholder="Enter Phone?" name="phone" id="phone" value="<?php if(isset($_POST["phone"])) echo $_POST["phone"]; ?>" >
	  </div>
	</div> 
 	<div class="col-lg-3 col-md-6 my-2">
	  <div class="form-group">
	    <label for="date_of_birth">Date of Birth:</label>
	    <input type="text" class="form-control" placeholder="dd-mm-yyyy" name="date_of_birth" id="date_of_birth" value="<?php if(isset($_POST["date_of_birth"])) echo $_POST["date_of_birth"]; ?>" >
	  </div>
	</div> 
 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Gender:</label>
	    <div class="form-control">		
			<div class="custom-control custom-radio custom-control-inline">	    	
		    	<input type="radio" class="mx-2 custom-control-input" checked name="gender" id="male" value="male" <?php if(isset($_POST["gender"]) && $_POST["gender"]=="male") echo "CHECKED"; ?>>
		    	<label class="custom-control-label" for="male">Male</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
		    	<input type="radio" class="mx-2 custom-control-input" name="gender" id="female" value="female" <?php if(isset($_POST["gender"]) && $_POST["gender"]=="female") echo "CHECKED"; ?> >
		    	<label class="custom-control-label" for="female">Female</label>
			</div>
		    <div class="custom-control custom-radio custom-control-inline">
		    	<input type="radio" class="mx-2 custom-control-input" name="gender" id="transgender" value="transgender" <?php if(isset($_POST["gender"]) && $_POST["gender"]=="transgender") echo "CHECKED"; ?> >
		    	<label class="custom-control-label" for="transgender">Transgender</label>
		    </div>
		</div>
	  </div>
	</div> 

 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Category:</label>
	    <div class="form-control">
	    <input type="radio" class="mx-2" checked name="category" id="general" value="general" <?php if(isset($_POST["category"]) && $_POST["category"]=="general") echo "CHECKED"; ?> ><label for="general">General</label>
	    <input type="radio" class="mx-2" name="category" id="ews" value="ews" <?php if(isset($_POST["category"]) && $_POST["category"]=="ews") echo "CHECKED"; ?> >
	    <label for="ews">EWS</label>
	    <input type="radio" class="mx-2" name="category" id="obc" value="obc" <?php if(isset($_POST["category"]) && $_POST["category"]=="obc") echo "CHECKED"; ?> ><label for="obc">OBC</label>
	    <input type="radio" class="mx-2" name="category" id="sc" value="sc" <?php if(isset($_POST["category"]) && $_POST["category"]=="sc") echo "CHECKED"; ?> ><label for="sc">SC</label>
	    <input type="radio" class="mx-2" name="category" id="st" value="st" <?php if(isset($_POST["category"]) && $_POST["category"]=="st") echo "CHECKED"; ?> ><label for="st">ST</label>
		</div>
	  </div>
	</div> 

	<div class="col-md-6 my-2">
	<h5>Local Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_address">Address:</label>
		    <textarea name="l_address" id="l_address" class="w-100 form-control" rows="3" > <?php if(isset($_POST["l_address"])) echo $_POST["l_address"]; ?></textarea>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_country">Country</label>
			    <select class="form-control" name="l_country" id="l_country" style="appearance:auto;" >
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_state">State</label>
			    <select class="form-control" name="l_state" id="l_state" style="appearance:auto;" >
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_districts">City</label>
			    <select class="form-control" name="l_districts" id="l_districts" style="appearance:auto;" >
			    </select>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_zipcode">Zip Code:</label>
		    <input type="l_zipcode" class="form-control" placeholder="Enter ZIP Code" name="l_zipcode" id="l_zipcode" >
		  </div>
		</div> 

	</div>


	<div class="col-md-6 my-2">
	<h5>Permanent Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_address">Address:</label>
		    <textarea name="p_address" id="p_address" class="w-100 form-control" rows="3" ></textarea>
	    <label style="color:#f00; font-weight: bold;">* <?php if(isset($p_address_error) ) echo $p_address_error; ?></label>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_country">Country</label>
			    <select class="form-control" name="p_country" id="p_country" style="appearance:auto;" >
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
			    <select class="form-control" name="p_state" id="p_state" style="appearance:auto;" >
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
		    <label for="p_districts">City</label>
			    <select class="form-control " name="p_districts" id="p_districts" style="appearance:auto;" >
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
		    <input type="p_zipcode" class="form-control" placeholder="Enter ZIP Code" name="p_zipcode" id="p_zipcode" >
		  </div>
		</div> 
	</div>
	<div class="my-2 col-sm-12">
		<div class="custom-control custom-switch mb-3">
      	<input type="checkbox" class="custom-control-input" id="switch1" name="example1" >
      	<label class="custom-control-label" for="switch1">Terms & Conditions </label>
    </div>		
	</div>
	<div class="my-2 col-sm-12 text-center">
		<input type="submit" name="submit" value="SUBMIT" class="bg-primary text-white px-5 py-2">
		<input type="reset" name="submit" value="RESET" class="bg-primary text-white px-5 py-2 mx-2">
	</div>
	
</div>
</form>





