
<?php
include"header.php";
?>
<script type="text/javascript">
function validateForm() {
  var dob = document.forms["myForm"]["dob"];
  var date=dob.value.split("-");
//	alert(parseInt((currentDate.getTime()-new_dob.getTime())/(24*3600*1000*365)));
//  var regex_date = /^(([1-3][0-9]{2}+)-([1][0-9]{2}+)-([1-2][0-9]{4}))*$/;
  var regex_day = "^[0-9]{2}-[0-9]{2}-[0-9]{4}$";
  
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
  if((dob.value=="") || !dob.value.match(regex_day))
  {
    alert("Date is Not in their Correct Format");
    dob.focus();
    return false;  	
  }
	var currentDate = new Date();
//  alert(currentDate.getTime());
	var new_dob=new Date(date[2]+'-'+date[1]+'-'+date[0]);
	var start_date=new Date("1998-01-01");
	var end_date=new Date("2002-12-31");
	if(!(new_dob.getTime()>=start_date.getTime() && new_dob.getTime()<=end_date.getTime()))
	{
		alert("Date of Birth is Not Correct");
		return false;
	}
  return true;
}
</script>



<form name="myForm" onsubmit="return validateForm()" method="post" class="border p-lg-5 p-2" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="row">
 	<div class="my-2 col-sm-12 text-center mb-3">
 		<h2 class="display-6">Student Registration Form</h2>
 		<hr class="mx-auto w-25">
 	</div>

 	<div class="col-md-6 my-2">
	  <div class="form-group">
	    <label for="dob">DOB :</label>
	    <input type="text" class="form-control" placeholder="dd-mm-yyyy" name="dob" id="dob" >
	  </div>
	</div> 

	<div class="my-2 col-sm-12 text-center">
		<input type="submit" name="submit" value="SUBMIT" class="bg-primary text-white px-5 py-2">
		<input type="reset" name="submit" value="RESET" class="bg-primary text-white px-5 py-2 mx-2">
	</div>

</div>
</form>
/*$i=100;
for($i=2;$i<=100;$i++)
{
  for($j=2;$j<$i;$j++)
  {
    if($i%$j==0)
    {
      echo $i."prim number";
    }
    else{
      echo $i."not prime number";
    }
  }
 

}*/
<?php
include"footer.php";
?>

/*$cars = array("Volvo", "BMW", "Toyota");
echo count($cars );

echo "<br>";
for($x = 0; $x <count($cars) ; $x++) {
  echo $cars[$x];
  
  echo "<br>";
}
/*echo $cars["0"]."<br>";

echo $cars["1"]."<br>";
echo $cars["2"]."<br>";*/
