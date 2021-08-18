<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
function getResult()
{
var years=document.getElementById("first").value;
    
if(years / 4==0)
{
    var result=  "Leap year";


}
else 
{
    var result="Is not Leap year";  


}





document.getElementById("result").innerHTML=result;




}
</script>

<input type="text" name="first" id="first" >
<input type="submit" name="getresult" onclick="getResult()" id="getresult">
<label id="result"></label>







</body>
</html>