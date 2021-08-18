<!-- The Modal -->
<div class="modal" id="myLoginModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
	  <form action="login.php" method="post" class="border p-lg-5 p-2 " >
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title">LOG IN</h3>
          <button type="button" class="close text-danger" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
			<div class="container">
			 	<div class="">
				  <div class="form-group">
				    <label for="user_id">User ID :</label>
				    <input type="text" class="form-control" placeholder="User ID?" name="user_id" id="user_id">
				  </div>
				</div> 
			 	<div class="">
				  <div class="form-group">
				    <label for="password">Password :</label>
				    <input type="password" class="form-control" placeholder="**********" name="password" id="password">
				  </div>
				</div> 
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" name="loginButton" class="btn btn-primary">Log In</button>        	
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
	  </form>        
      </div>
    </div>
  </div>
