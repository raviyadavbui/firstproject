<?php
if(isset($_GET["id"]))
{
$query="select * from ragister_near where first_name='".$_GET["id"]."'";
$record=mysqli_query($conn,$query) or die(mysqli_error($conn));
$dataset=mysqli_fetch_array($dataset);
}




include"Header1.php";
include"config4.php";
if(isset($_POST["update"]))
{
  $first_name = $_POST['student_first_name'];
  $last_name = $_POST['student_last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['l_address'];
  $sql_query = "INSERT INTO ragister_near  (first_name,last_name,email,password,address)
  VALUES ( '$first_name','$last_name','$email ','$password','$address')";

if (mysqli_query($conn, $sql_query)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>

<div class=" bg-primary text-white text-center pt-2 mb-2 fs-bold sticky-top "><H1>A.S.M.CONVENT SCHOOL</H1></div>
	<section>
	<form name="myForm" action="service.php" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
		<div class="container-fluid">
			<!-- row -->
			<div class="row">
				<!-- first column -->
				

				<div class="col-sm-12 col-md-12 col-lg-8 ">
					
						<P class="text-center p-2 bg-secondary fs-3">Ragistration Form</P>
						<!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
						<!--<input type="text" name class="form-control mt-3" placeholder="first name">-->
						<div class="form-group">
				<label for="student_first_name">Student first Name :</label>
	    		<input type="text" class="form-control" placeholder="Student first Name?" name="student_first_name" id="student_first_name" value="<?php if(isset($_POST["student_first_name"])) echo $_POST["student_first_name"];else if(isset($result)) echo $result["first_name"]; ?>">
	    			<label style="color:#f00; font-weight: bold;">* <?php if(isset($student_first_name_error) ) echo $student_first_name_error; ?></label>
	  			</div>


						<div class="form-group">
				<label for="student_last_name">Student Last Name :</label>
	    		<input type="text" class="form-control" placeholder="Student Last Name?" name="student_last_name" id="student_last_name" value="<?php if(isset($_POST["student_last_name"])) echo $_POST["student_last_name"]; ?>" >
	    			<label style="color:#f00; font-weight: bold;">* <?php if(isset($student_last_name_error) ) echo $student_last_name_error; ?></label>
	  			</div>
						<!--<input type="text" name class="form-control mt-3" placeholder="last name">-->
						<!--<input type="text" name class="form-control mt-3" placeholder="email name">-->
		<div class="form-group">
	    <label for="email">E-Mail:</label>
	    <input type="text" class="form-control" placeholder="Enter Student Email ID?" name="email" id="email" value="<?php if(isset($_POST["email"])) echo $_POST["email"]; ?>" >
		<label style="color:#f00; font-weight: bold;">* <?php if(isset($emailerror) ) echo $emailerror; ?></label>
	  </div>				
						<!--<input type="text" name class="form-control mt-3" placeholder="password name">-->
		<div class="form-group">
	    <label for="password">password:</label>
	    <input type="text" class="form-control" placeholder="Enter password ?" name="password" id="password" value="<?php if(isset($_POST["password"])) echo $_POST["password"]; ?>" >
		<label style="color:#f00; font-weight: bold;">* <?php if(isset($password_error) ) echo $password_error; ?></label>
	  </div>				

		<div>
		<textarea name="l_address" id="l_address" class="form-control mt-3" placeholder="Address"><?php if(isset($_POST["l_address"])) echo $_POST["l_address"]; ?></textarea>
		<label style="color:#f00; font-weight: bold;">* <?php if(isset($l_address_error) ) echo$l_address_error; ?></label>
		</div>
						<!--<center>	<button type="button" class=" btn btn-warning active mt-2 pr-5">ragister now</button></center>-->
						<!--<script type="text/javascript">
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
 	<div class="col-md-3 my-2 mx-2">
	  <div class="form-group">
	  	<input type="file" class="form-control custom-file-input" id="marksheet" name="marksheet" required>
	    <label class="custom-file-label" for="dp">10th Mark-Sheet</label>
	  </div>
	</div>-->






						<div class="my-2 text-center">
						<input type="submit" <?php if(isset($result)){ ?> value="UPDATE" name="update" <?php } else {?> value="SUBMIT" name="submit" <?php } ?>  class="bg-primary text-white px-5 py-2">					
		<!--<input type="submit" name="update" value="update" class="bg-primary text-white px-5 py-2">-->
		<input type="reset" name="submit" value="RESET" class="bg-primary text-white px-5 py-2 mx-2">
	</div>
	


					</div>
						