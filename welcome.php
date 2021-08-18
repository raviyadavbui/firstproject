<?php 
if(!isset($_GET["name"]))
{
header("Location:index.php");
}
else
{
include"header.php";
?>
<div id="container" class="p-5">
	<div class="d-flex justify-content-around">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- My own Stylesheet CDN Link -->
<link rel="stylesheet" href="css/stylebetween.css">
		<div style="background-color:#de0;" class="card p-5 w-50 mt-2 mh-100">
			<div class="d-flex justify-content-center pb-4"><img src="images/pdf_icon.png" style="width:60px; height: 60px;"></div>
			<div class="d-flex justify-content-center h3 ">Hello  
				<div class="" style="color:red;">&nbsp; <?php echo $_GET["name"]; ?></div>
			</div><hr>
			<div class="d-flex justify-content-center h6"> You Are Registed Successfully.</div> 
			<div class="d-flex justify-content-center">Your Registration Number is <div class="font-weight-bold">&nbsp; <?php echo $_GET["regsno"]; ?></div></div>
			<div class="d-flex justify-content-center"><hr class="col-6"></div>
			<div class="text-justify font-weight-bold text-primary py-3">This Message has been already sent on your email id. Your Registration Number is your login/user id and password is default '123456'. After Login Please change your password.  </div>
		</div>
	</div>
</div>
<div class="pb-5 d-flex justify-content-around">
	<input type="button" name="button" onclick="form_print()" value="Print" class="bg-primary text-white px-5 py-2 mx-2">
</div>

<?php 
include"footer.php";
?>
<script type="text/javascript">
	function form_print()
	{
		neww=window.open();
        neww.document.write(document.getElementById("container").innerHTML);
        neww.print();
        neww.close();	
    }
</script>
<?php 
}
?>