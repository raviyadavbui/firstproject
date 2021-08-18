<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
#div1{
    width:50%;
border:1px solid green;

}



</style>


</head>
<body>
<div id="div1">


First Number :<input type="number" id="a1"><br><br>
Second Number :<input type="number" id="b1"><br><br>
Third Number :<input type="number" id="c1"><br><br>
<button  onclick="myfunction()">chek</button>
</div>
<h1 id="demo"></h1> 

<script>

    function myfunction() {
        var a1=document.getElementById("a1").value;
        var b1=document.getElementById("b1").value;
        var c1=document.getElementById("c1").value;
        var x=(a1,b1,c1);
        if (a1>=b1 && a1>=c1)
        {
            getdata ="first number is largest number";
        } 
        else if(b1>=a1 && b1>=c1)
        {
            getdata ="b1";
        }
        else{
            getdata ="c1";


        }
        document.getElementById("demo").innerHTML = getdata;
    }
    
    
    
    
    
    
    </script>









</body>
</html>