
<?php
include("config5.php");
?>

<form action="" method="POST">
Name<input type ="text" name="name"><br>
Email<input type ="email" name="email"><br>
Mobile<input type ="number" name="mobile"><br>
<input type ="submit" name="submit">


</form >

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $result=mysqli_query($mysqli,"insert into titels values('','$name','$email','$mobile')");

    if($result)
    {
        echo "succes";
    }
    else{
        echo "failed";
    }



}


?>