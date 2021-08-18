<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
echo strlen("Hello  world!!"); // outputs 12
?>
<br>
<?php
echo str_word_count("Hello world!"); // outputs 2
?>
<br>
<?php
echo strrev("Ravi yadav!"); // outputs !dlrow olleH
?><br>
<?php
echo strpos("Hello world!", "world!"); // outputs 6
?><br>

<?php
$paira="My name is Ravi,My home is Ballia" ;
echo str_replace("Ballia", "sukhpura", "$paira"); // outputs Hello Dolly!

?><br><br>

<?php
$paira="My name is Ravi,My home is Ballia" ;
if(strpos($x=$paira,"sukhpura"))
{
echo str_replace("Ballia", "sukhpura",$x); // outputs Hello Dolly!

}
else{
  echo str_replace("ballia", "sukhpura", $x); // outputs Hello Dolly!
}
?><br>
<?php

var_dump(12544);
if(is_float(2.45)==true)
{
  echo "String is float";
}
else
{
  echo "String is not float";

}
?><br>

<?php
$x = 153.65;
var_dump(is_float($x));
?><br>
<?php

function randalfa()
{
  $otp=null;
  for($i=0;$i<5;$i++)
  {
    $otp=$otp.rand(0,9);
  }
  echo $otp;
}
return randalfa();

?><br><br>



<?php
$x = 20;  
$x += 100;

echo $x;
?><br>


<?php

$i=100;
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
 

}
?><br>

<?php
$number =100;

for($i=2;$i<=$number;$i++)
{
  $isprime = true;
  for($j = 2;$j <$i;$j++)
  {
    if($i % $j == 0)
    {
      $isprime = false;
    }
  }
  if($isprime == true)
  {
    echo $i."ravi";
  }
}

?><br>








</body>
</html>