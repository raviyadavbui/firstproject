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
//$x = 2;  
//$x-= 100;
//$x=$x-100;
//echo $x;<br>

/*$y=2;
if($x!=$y)
{
    echo "true";
}
else{
    echo "false";
}*/

/*$y=2;
switch($x<=>$y)
{
    case -1:
        echo " x is less than y ";
        break;
        case 0:
            echo "x is equal to y ";
            break;
            case 1:
                echo "x is greater then y";
                break;
                default:
                break;
}*/

/*$x=3;
//echo ++$x;
echo $x++;
echo "<br>".$x;*/




?>    






<?php
/*$number =100;

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
    echo $i ."<br>";
  }
}*/


/*$cars = array("Volvo", "BMW", "Toyota");
echo count($cars );

echo "<br>";
for($x = 0; $x <count($cars) ; $x++) {
  echo $cars[$x];
  
  echo "<br>";
}
/*echo $cars["0"]."<br>";

echo $cars["1"]."<br>";
echo $cars["2"]."<br>";*/



$cars = array (
  
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15),
  array("Land Rover",17,15)
  
);
/*echo count($cars );*/
echo "<br>";
for($x = 0; $x <count($cars) ; $x++) {
  echo $cars[$x][0]. ":  In stock:" . $cars [$x][1]. "   sold:". $cars [$x][2];
  
  echo "<br>";
}
/*echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";*/



?><br>








</body>
</html>