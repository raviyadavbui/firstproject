<?php

include"Header.php";

?>

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
 	<div class="col-md-6 my-2 mx-2">
	  <div class="form-group">
	  	<input type="file" class="form-control custom-file-input" id="marksheet" name="marksheet" required>
	    <label class="custom-file-label" for="dp">10th Mark-Sheet</label>
	  </div>
	</div>



<?php

include"footer.php";

?>