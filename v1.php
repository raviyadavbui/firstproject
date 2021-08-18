
<?php

$name = $email = $website = $gender = $country =  $error = "";

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    function clean_input($field){

        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;




    }







    $name =  clean_input($_POST['name']);

//}

    



    
    if(isset($name) && $name != ""){



    }else{
        $error =  "you must fill all the required field";


    }

    //echo"hello, ".$name;
    
    

}








?> 







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href ="R3.css">


</head>
<body>
  <div id="div1">  
<form action="<?php  echo htmlspecialchars( $_SERVER["PHP_SELF"]);?>" method="post">

name: <input  type="text" name="name"*><br><br>
email:<input type ="email" name="emali"><br><br>
website:<input type="website" name="website"><br><br>
select Gender:<input type="radio" name="gender" value="mail">mail
<input type="radio" name="gender" value="femail">femail<br><br>
password  <input type="password" name="pname"><br><br>


<input id="submit" type="submit" name="submit" value="signup">


<input id="reset" type="reset" name="reset" value="reset form">

<?php

if($error){
echo '<span style="display: block">'.$error.'</span>';

}




?>

</div>
<div class="error-row">
<?php

if($error){
echo '<span style="display: block">'.$error.'</span>';

}




?>



</div>


</form>



</body>
</html>