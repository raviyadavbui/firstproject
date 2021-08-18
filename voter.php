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
    if (y1 < 18==0)
    {
        getdata="Is voter";


    }
    else{

        getdata="Is not voter";
    }
    document.getElementById("demo").innerHTML=getdata;
}












</script>
     








</body>
</html>