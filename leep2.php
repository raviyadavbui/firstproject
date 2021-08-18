<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="number" id="y1">
<button onclick="myfunction()">chek</button>
<h1 id="demo"></h1>
<script>
function myfunction() {
    var y1=document.getElementById("y1").value;
    if (y1 % 4==0)
    {
        getdata="Leap year";


    }
    else{

        getdata="Is not leap year";
    }
    document.getElementById("demo").innerHTML=getdata;
}












</script>
     






</body>
</html>