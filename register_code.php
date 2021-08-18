<?php
include"header.php";
?>
<div class="container py-5">

		<div class="row">
			
		<div class="col-md-6">
				<div class="form-group">
					<label for="student_first_name">Student First Name :</label>
				<?php	echo $_POST ["student_first_name"]."<br>";?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="student_last_name">Last Name</label>
					<?php	echo $_POST ["student_last_name"]."<br>";?>
				</div>
			</div>




			<div class="col-md-6">
				<div class="form-group">
					<label for="father_name">Father's name</label>
					<?php	echo $_POST ["father_name"]."<br>";?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="Mother_name">Mother's name</label>
					<?php	echo $_POST ["Mother_name"]."<br>";?>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 my-2">
				<div class="form-group">
					<label for="email">Email addres</label>
					<?php	echo $_POST ["email"]."<br>";?>
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="Phone_number">Phone NO:</label>
					<?php	echo $_POST ["Phone_number"]."<br>";?>
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="WhatsApp_number">WhatsApp No:</label>
					<?php	echo $_POST ["WhatsApp_number"]."<br>";?>
				</div>
			</div>

			<div class="col-lg-3  col-md-6 my-2">
				<div class="form-group">
					<label for="date_of_birth">Date_of_birth</label>
					<?php	echo $_POST ["date_of_birth"]."<br>";?>
				</div>
			</div>

			<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Gender</label>
	    
	    <div class="form-control">
		<?php echo strtoupper($_POST["gender"]); ?>
	    
		</div>
	  </div>
	</div> 

	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label>Category:</label>
	    <div class="form-control">
	    <?php echo strtoupper($_POST["category"]);?>
		</div>
		</div>
	  
	</div>

	 <div class="col-md-6 my-2">
	<h5>Local Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="l_address">Address:</label>
		    <?php	echo $_POST ["l_address"]."<br>";?>
		  </div>
		</div> 

		<div class="my-2">
		  <div class="form-group">
		    <label for="l_country">Country</label>
           
			<?php	echo $_POST ["l_country"]."<br>";?>	
				
		  </div>
		</div> 

		<div class="my-2">
		  <div class="form-group">
		    <label for="p_state">State</label>
            <?php	echo $_POST ["p_state"]."<br>";?> 
		  </div>
		</div> 

		<div class="my-2">
		  <div class="form-group">
		    <label for="p_districts">Districts</label>
            <?php	echo $_POST ["p_districts"]."<br>";?>
		  </div>
		</div>

		 <div class=" my-2">
		  <div class="form-group">
		    <label for="p_zipcode">Zip Code:</label>
		    <?php	echo $_POST ["p_zipcode"]."<br>";?>
		  </div>
		</div> 
	</div>

	<div class="col-md-6 my-2">
	<h5>Permanent Address</h5>
	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_address">Address:</label>
			<?php echo $_POST["p_address"]; ?>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_country">Country</label>
			
			<?php if($_POST["p_country"]=="IN") echo "India"; ?>
			<?php if($_POST["p_country"]=="PK") echo "PAKISTAN"; ?>
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_state">State</label>
			<?php echo $_POST["p_state"]; ?> 
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_districts">Districts</label>
			<?php echo $_POST["p_districts"]; ?> 
		  </div>
		</div> 

	 	<div class="my-2">
		  <div class="form-group">
		    <label for="p_zipcode">Zip Code:</label>
		    <?php echo $_POST["p_zipcode"]; ?>
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

<?php

include"footer.php";

?>
 





