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
#area{

    border:1px solid black;
    background-color:skyblue;
}
#first{
    background-color:pink;

}
#second{
background-color:blue;



}
#div1{
border: 1px; solid green ;
height: 200px;
width: 200px;


}




</style>


</head>
<body>
    <?php

    $nameError = $emailError = " ";
    $name = $email = $message = " ";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["name"])) {

            $nameError = "Name is mandatory" ;
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
        $emailError = "Email is mandatory";
    }
    else{
        $email = test_input($_POST["email"]);


    //}

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {

        $emailError = "Invalid email format";
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
<div id="divi">
<h2><u>PHP Form With Validation</u></h2>
<p><span class="errorcolor">* mandatory field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input  id="first" type="text" name="name" placeholder="aryan">
<span class="errorcolor">* <?php echo $nameError;?></span><br><br>

E-mail :<input id="second" type="text" name="email" placeholder="Anshika">
<span class="errorcolor">* <?php echo $emailError;?></span>
<br><br>

Messsage:<textarea  id="area" name="message" rows="6"
cols="24" placeholder="Shrishti"></textarea>
<br><br>

<input type="submit" name="submit" value="submit">
</div>


</form>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $message;
?>












</body>
</html>
