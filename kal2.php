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
var firstValue=document.getElementById("first").value;
    var secondValue=document.getElementById("second").value;
if(Number( firstValue)>Number(secondValue))
{
    var result="First value ("+firstValue+") is greater then second value ("+secondValue+")";


}
else if(Number( firstValue)==Number(secondValue))
{
    var result="Both value are Equal";  


}
else
{
    var result="second value ("+secondValue+") is greater then First value ("+firstValue+")";



}
document.getElementById("result").innerHTML=result;




}
</script>

<input type="text" name="first" id="first" >
<input type="text" name="second" id="second">
<input type="submit" name="getresult" onclick="getResult()" id="getresult">
<label id="result"></label>












</body>
</html>