<?php 
include"header1.php";
include("config4.php");
?>
<div class="row d-flex justify-content-around">
	<div class="col-8 py-4">
		<table class="table table-hover table-dark">
		  <thead>
		    <tr>
		      <th style=";text-align:center;" scope="col">Roll.No</th>
		      <th  style="text-align:center;" scope="col">FIRST Name </th>
		      <th  style="text-align:center;" scope="col">LAST Name</th>
		      <th  style="text-align:center;" scope="col">EMAIL</th>
		      <th  style="text-align:center;" scope="col">opration</th>
		    </tr>
		  </thead>
		  <tbody>
              <?php
              $query="SELECT * FROM `ragister_near`order by first_name";
              $dataset=mysqli_query($conn,$query ) ;
              $i=0;
              while($res=mysqli_fetch_array($dataset))
              {
                  $i++;
                  ?>
                   <tr>
		      <th style="vertical-align: middle;text-align:center;" scope="row"><?php echo $i; ?></th>
			  <td style="vertical-align: middle;text-align:center;"><?php echo $res["first_name"];?></td>
			  <td style="vertical-align: middle;text-align:center;"><?php echo $res["last_name"];?></td>
		      <td style="vertical-align: middle;text-align:center;"><?php echo $res["email"];?></td>
		      <td style="vertical-align: middle;text-align:center;">
					
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