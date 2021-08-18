<?php
$nameerror = $emailerror = " ";
$name = $email = $message = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {

    $nameerror = "Name is mandatory";
} else{

    $name = test_input($_POST["name"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

        $name = "only letters allowed";



    }
    if (empty($_POST["email"])) {

        $emailerror = "email is mandatory";
    }
    else{
        $email = test_input($_POST["email"]);

    }
    if (!filter_var($eamail,FILTER_VALIDATE_EMAIL)) {
        $emailerror = "Invalid email format";
    }
    if (empty($_POST["message"])) {
        $message ="";
    }
    else{
        $message = test_input($_POST["message"]);
    }



    



}






















}


















?>