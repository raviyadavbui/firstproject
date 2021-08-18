<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        width:50%;
        height:10%;
        background-color:green;
        border:1px solid red;


    }
    input{
        border:1px solid red;
        padding:2px;
        margin: 2px;
        border-radius:2px;



    }
    button{
        border:1px solid black;
        text-align:center;
        margin-left: 20px; padding:2px;
        margin-right:5px;
        

    }
    td{
        border:1px solid pink;
        margin:0px; padding:2px;
        align:center;
        
    }
    
    
    
    
    
    
    </style>





</head>
<body>


<table>
<tr>
<td>First number</td>
<td>
<input type="number" id="a1">

</td>


</tr>
<tr>
<td> Second number</td>
<td>
<input type="number" id="b1">

</td>


</tr>
<tr>
<td> Third number</td>
<td>
<input type="number" id="c1">

</td>


</tr>
<tr>
<td colspan="2">
<button onclick="myfunction()">chek</button>


</td>

</tr>

</table>

<label id="demo"></label>

<script>

    function myfunction() {
        var a1=document.getElementById("a1").value;
        var b1=document.getElementById("b1").value;
        var c1=document.getElementById("c1").value;
        var x=(a1,b1,c1);
        if (a1>=b1 && a1>=c1)
        {
            getdata ="first number("+a1+") is largest second number("+b1+") ";
        } 
        else if(b1>=a1 && b1>=c1)
        {
            getdata ="Second number ("+b1+") is largest first number("+a1+") ";
        }
        else{
            getdata ="Third number is largest ";


        }
        document.getElementById("demo").innerHTML = getdata;
    }
    
    
    
    
    
    
    </script>












    
</body>
</html>