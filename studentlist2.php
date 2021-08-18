<?php 
include"header1.php";
include("config2.php");
?>
<div class="row d-flex justify-content-around">
	<div class="col-8 py-4">
		<table class="table table-hover table-dark">
		  <thead>
		    <tr>
		      <th scope="col">Roll.No</th>
		      
		      
		      <th scope="col">FIRST Name </th>
		      <th scope="col">LAST Name</th>
		      <th scope="col">EMAIL</th>
		      <th scope="col">opration</th>
		    </tr>
		  </thead>
		  <tbody>
              <?php
              $query="SELECT * FROM `entry_details` order by first_name";
              $dataset=mysqli_query($conn,$query ) ;
              $i=0;
              while($res=mysqli_fetch_array($dataset))
              {
                  $i++;
                  ?>
                   <tr>
		      <th scope="row"><?php echo $i; ?></th>
			  <td><?php echo $res["first_name"];?></td>
			  <td><?php echo $res["last_name"];?></td>
		      <td><?php echo $res["email"];?></td>
		      <td style="vertical-align: middle;">
				<input  style="color:red;"type="button" name="edit/update" value="edit/update">      		
				      	</td>
		      
		      
		    </tr>
                  
                  
                  <?php
              }
              
              
              ?>
		  </tbody>
		</table>
	</div>
</div>
<?php 
include"footer1.php";
?>