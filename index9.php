<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet"href="R1.css">




</head>
<body>
<div id="text">
   <form action="" method="post">
       first:
   <input type="text" name="n" value="" placeholder="enter no"><br><br>
second:
   <input type="text" name="n2" value=""placeholder="enter no"><br><br>
   
   <input type="submit" name="a" value=" ADD + ">
   <input type="submit" name="m" value=" MUL * ">
   <input type="submit" name="d" value=" DIV / ">
   <input type="submit" name="s" value=" SUB - ">
   <input type="reset">
   </form>
   </div>
   <?php
if(isset($_POST['a']))
{
$n = $_POST['n'];
$n2 = $_POST['n2'];
$add = $n+$n2; 
echo "Addition Is".$add;
}
if(isset($_POST['m']))
{
$n =$_POST['n'];
$n2 =$_POST['n2'];
$mul =$n*$n2;
echo "mul Is".$mul;
}

if(isset($_POST['d']))
{
$n =$_POST['n'];
$n2 =$_POST['n2'];
$div =$n/$n2;
echo "div Is".$div;
}


if(isset($_POST['s']))
{
$n =$_POST['n'];
$n2 =$_POST['n2'];
$sub =$n-$n2;
echo "sub Is".$sub;
}







?>
</body>
</html>