<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
function Switchon()
{
    document.getElementById("imgBulb").src="images/th (2).jfif";

}
function Switchoff()
{
    document.getElementById("imgBulb").src="images/isolated-light-bulb-1.jpg";

}






</script>







    
<table style="width:50%;margin-top:50px;border:1px solid;"align="center">
<tr>
<td>
<img id="imgBulb" src="images/isolated-light-bulb-1.jpg" style="width:100px;">
</td>
</tr>
<tr>
<td>
<input type="submit" name="getresult" onclick="Switchon()" id="getResult">
<input type="off" name="off" onclick="Switchoff()" id="getreset">
</td>
</tr>
</table>












</body>
</html>