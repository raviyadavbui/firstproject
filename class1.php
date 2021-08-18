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
$total=$_POST['yname'];
$percentage=$total/500*100;
echo "yoyr percentage is",$percentage;
echo "<br>";
if($percentage>=90)
{
    echo "A Gread";
}
else if($percentage>=70)
{
    echo "B Gread";
}
else if($percentage>=50)
{
    echo "C Gread";
}
else{
    echo "faill";
}



    ?>
</body>
</html>