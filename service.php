<?php 
include"Header.php";

?>
<?php
/*include"config.php";*/
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
{
	$student_first_name_error=$student_last_name_error=$mothers_name_error=$p_address_error=$emailerror=$password_error = $l_address_error= "";
	$l_address =$email =$student_first_name=$student_last_name=$password=$p_address="";
		$error=0;
	//	echo "asd".$_POST["student_last_name"];
		function test_input($data) 
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
		if (empty($_POST["student_first_name"])) {
			$student_first_name_error = "Student first Name is required";
			/*$err["student_first_name_error"]="Student first Name is required";*/
			$error=$error+1;
		  }

		  else {
			if(strlen($_POST["student_first_name"])>2)
			{
				if(ctype_alpha($_POST["student_first_name"])=="yes")
				{
				  $student_first_name = test_input($_POST["student_first_name"]);	  			  			  			
				}
				else
				{
				/*$err["student_last_name_error"]="Student Last Name Must Be a String!";*/
				$student_first_name_error = "Student first Name Must Be a String!";	  			
				}
			}
			else
			{
				/*$err["student_last_name_error"]="Student Last Name Must Be Greater Then 2 Characters!";*/
				$student_first_name_error = "Student first Name Must Be Greater Then 2 Characters!";	
			}
			
	  } 	 
	
	if (empty($_POST["student_last_name"])) {
		$student_last_name_error = "Student Last Name is required";
	    /*$err["student_last_name_error"]="Student Last Name is required";*/
	    $error=$error+1;
	  }  

	else {
		if(strlen($_POST["student_last_name"])>2)
		{
			if(ctype_alpha($_POST["student_last_name"])=="yes")
			{
			  $student_last_name = test_input($_POST["student_last_name"]);	  			  			  			
			}
			else
			{
			/*$err["student_last_name_error"]="Student Last Name Must Be a String!";*/
			$student_last_name_error = "Student Last Name Must Be a String!";	  			
			}
		}
		else
		{
			/*$err["student_last_name_error"]="Student Last Name Must Be Greater Then 2 Characters!";*/
			$student_last_name_error = "Student Last Name Must Be Greater Then 2 Characters!";	
		}
	}
	if (empty($_POST["password"])) {
		$password_error = "password Name is required";
		/*$err["student_first_name_error"]="Student first Name is required";*/
		$error=$error+1;

	  }

	  else {
		if(strlen($_POST["password"])>2)
		{
			
			$password = test_input($_POST["password"]);
		}
		else
		{
			/*$err["student_last_name_error"]="Student Last Name Must Be Greater Then 2 Characters!";*/
			$password_error = "password Name Must Be Greater Then 2 Characters!";	
		}
		
  }
  	if (empty($_POST["l_address"])) {
	    $l_address_error = " Address Name is required";
	    $error=$error+1;
	  } else {
	    $l_address = test_input($_POST["l_address"]);
	}
	if(isset($_FILES['dp']) && isset($_FILES['marksheet']))
	{
		$errors= array();
		$file_name = $_FILES['dp']['name'];
		$file_size =$_FILES['dp']['size'];
		$file_tmp =$_FILES['dp']['tmp_name'];
		$file_type=$_FILES['dp']['type'];
		$newFileName=time()."_".$file_name;
		$file_ext=strtolower(explode('.',$file_name)[1]);
		$extensions= array("jpeg","jpg","png");

		if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
	    $err["dp_error"]="extension not allowed, please choose a JPEG or PNG file.";
	    $error=$error+1;
    }

    if($file_size > 2097152){
         $errors[]='File size must be less than 2 MB';
		    $err["dp_error"]="File size must be less than 2 MB";
		    $error=$error+1;
    }
	
		$errors1= array();
		$file_name1 = $_FILES['marksheet']['name'];
		$file_size1 =$_FILES['marksheet']['size'];
		$file_tmp1 =$_FILES['marksheet']['tmp_name'];
		$file_type1=$_FILES['marksheet']['type'];
		$newFileName1=time()."_".$file_name1;
		$file_ext1=strtolower(explode('.',$file_name1)[1]);
		$extensions1= array("pdf");
		if(in_array($file_ext1,$extensions1)=== false){
      $errors1[]="extension not allowed, please choose a PDF file.";
	    $err["marksheet_error"]="extension not allowed, please choose a PDF file.";
	    $error=$error+1;
    }

    if($file_size1 > 2097152){
         $errors1[]='File size must be less than 2 MB';
		    $err["marksheet_error"]="File size must be less than 2 MB";
		    $error=$error+1;
    }

    if(empty($errors)==true && empty($errors1)==true){
         move_uploaded_file($file_tmp,"storage/dp/".$newFileName);
         move_uploaded_file($file_tmp1,"storage/marksheet/".$newFileName1);
    }
    else
    {
    	print_r($errors1);
	    $err["marksheet_error"]="DP & Marksheet Not Uploaded due to some unknown errors";
	    $error=$error+1;
    }		
	}
	else
	{
	    $err["dp_error"]="Please Select DP and MarkSheet?";
	    $error=$error+1;
	}

	if (empty($_POST["email"])) {
		$emailerror = "Email is required";
	  } else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailerror = "Invalid email format";
		}
	  }

	/*if (empty($_POST["email"])) {
	    $emailerror = " email Name is required";
	    $error=$error+1;
	  } else {
		$email = test_input($_POST["email"]); 
	    /*$email_name = test_input($_POST["email_name"]);*/
	}
	/*if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $emailerror = "Invalid email format";
    }*/
	/*if (empty($_POST["email"])) {

        $emailerror = "email is mandatory";
    }
    else{
        $email = test_input($_POST["email"]);

    }
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $emailerror = "Invalid email format";
    }*/
	/*if (empty($_POST["password"])) {
	    $passworderror = "password is m required";
	    $error=$error+1;
	  } else {
		$password = test_input($_POST["password"]);
	}

	if (strlen($_POST["password"])<='8') {
		$passworderror = "Your Password Must Contain At Least 8 Characters!";
	}*/
	

	  
	
	/*if (empty($_POST["l_address"])) {
	    $l_address_error = " Address Name is required";
	    $error=$error+1;
	  } else {
	    $l_address = test_input($_POST["l_address"]);
	}*/

?>
<?php
include"config4.php";
if(isset($_POST["submit"]))
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
	    		<input type="text" class="form-control" placeholder="Student first Name?" name="student_first_name" id="student_first_name" value="<?php if(isset($_POST["student_first_name"])) echo $_POST["student_first_name"]; ?>" >
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
		<input type="submit" name="submit" value="SUBMIT" class="bg-primary text-white px-5 py-2">
		<input type="reset" name="submit" value="RESET" class="bg-primary text-white px-5 py-2 mx-2">
	</div>
	


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
</form>
</section>
</div>


















<?php
include"Footer.php";
?>