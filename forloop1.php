
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="CountingTable()">

<script type="text/javascript">
function CountingTable()
{
var a="<table border='1'>";
for(var i=2;i<21;i+=2)
{

    a=a+"<tr>";
    a=a+"<td>"+i+"</td>";
    a=a+"</tr>";
}
a=a+"</table>";
document.getElementById("abc").innerHTML=a;

}

</script>



















<table style="width:50%;margin-top:50px;border:1px solid;"align="center">
<tr>
<td id="abc" style="padding: 20px" align="center" >

</td>


</tr>





</table>



















    
</body>
</html>