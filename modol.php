<?php
session_start();
if(isset($_POST ["button"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    if($email=="email" && $password==123456)
    {
        header("Location:dashboard.php");
        $_SESSION["email"]="email";
    }
    else
    {

        header("Location:index.php?login_message=Your User ID and Password is not Correct, Please 
        Try agin.");

    }


}
?>
<p>ravi yadav</p>