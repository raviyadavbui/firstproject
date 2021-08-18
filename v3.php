<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.errorcolor{
color:red;


}
/*#area{

    border:1px solid black;
    background-color:skyblue;
}
#first{
    background-color:pink;

}
#second{
background-color:blue;



}*/
#form{
border:1px solid black;
height: 400px;
width: 350px;
text-align:center;
margin:20%;
color:green;


}
#sub{
background-color:black;
color:red;

}








</style>







</head>
<body>
<?php

$nameError = $emailError = $passwordError = " ";

$name = $email = $message = $password = " ";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])) {

        $nameError = "Enter your name" ;
    }
    else{
        $name = test_input($_POST["name"]);
    //}


    if( !preg_match("/^[a-zA-Z-' ]*$/",$name)) {

        $nameError = "Only letters allowed";
    }

}
/*if(empty($_POST["email"])) {

    $emailError = "Email is mandatory" ;
}*/



if(empty($_POST["email"])) {
    $emailError = "Enter your Email ";
}
else{
    $email = test_input($_POST["email"]);


//}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {

    $emailError = "Invalid email format";
}
}

if(empty($_POST["password"])) {

$passwordError ="Enter the Password ";

}else{
    $password = test_input($_POST["password"]);


    if( !preg_match("/^[1-5' ]*$/",$password)) {

        $passwordError = "wrong paasword";
    }







}








   
if(empty($_POST["message"])) {
$message = " ";
}else{
$message =test_input($_POST["message"]);
}


}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data ;
}
?>
<div id="form">
<h2><u>PHP Form With Validation</u></h2>
<p><span class="errorcolor">* mandatory field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input  id="first" type="text" name="name" placeholder="name">
<span class="errorcolor">* <?php echo $nameError;?></span><br><br>

E-mail :<input id="second" type="text" name="email" placeholder="email">
<span class="errorcolor">* <?php echo $emailError;?></span>
<br><br>
Password:<input type="text" name="password" placeholder="password"><br>
<span class="errorcolor">* <?php echo $passwordError;?></span>
<br><br>

Messsage:<textarea  id="area" name="message" rows="6"
cols="24" placeholder=""></textarea>
<br><br>

<input id="sub" type="submit" name="submit" value="submit">



</form>
</div>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo  $message;






?>




































</body>
</html>