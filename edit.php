<?php
include("config5.php");
$id=$_GET['id'];
$result=mysqli_query($mysqli,"SELECT* from  titels Where id=$id");
while($res=mysqli_fetch_array($result))
{
    $name=$res['name'];
    $email=$res['email'];
     $mobile=$res['mobile'];
}
?>
<?php
if(isset($_POST['Update']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $result=mysqli_query($mysqli,"Update titels SET name='$name',email='$email',mobile='$mobile'Where id=$id");
    if($result){

        header("location:display.php");
    }
    else{
        echo "Failed";
    }


}

?>
<form action="" method="POST">
Name<input type ="text" name="name" value="<?php echo  $name; ?>"><br>
Email<input type ="email" name="email" value="<?php echo $email;?>"><br>
Mobile<input type ="number" name="mobile" value="<?php echo $mobile; ?>"><br>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

<input type ="submit" name="Update" value="update">


</form >