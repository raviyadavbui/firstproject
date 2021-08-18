<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--<script type="text/javascript">
    var a=["ram","shyam"];
    
    a.push('ravi','rohit');
    a.push('rohit');
    a.unshift('raju');
    a.pop();
    a.splice(0,0);
    var cont=a.length;
    
    
    document.write(a);
  



</script>-->
<!--<script type="text/javascript">
var arr=["ram","shyam","ghansham","rakesh","mukesh","mahesh"];
for(var i=0;i<arr.length;i++){
document.write(arr[i]+"<br>");
}

</script>-->
<style type="text/css">
*{
    color:black;
    font-family:arial;
   /* margin:0px;*/
    box-sizing:border-box;
   
}


table{
    text-align:center;
    margin-left:45px;
    border:1px solid black;

}
th{
background-color:#77AB4F;color:white;

}
/*td{
    background-color:pink;
}*/

tr:nth-child(even)
{
    background-color:#20B3B3;
    
    
}
tr:nth-child(odd)
{
background-color:#F7EE36;

}
</style>
<script type="text/javascript">
var arr1={name:["sunandhi","anupama","parena","anil","vibha"],age:[15,18,20,24,31],city:["Danapur","hariyana","panjab","patiyala","firozpur"]};
document.write("<table border='1'cellpadding='0'cellspacing='0') >");
document.write("<tr><th>Sr No</th><th>Name</th><th>Age</th><th>City</th></tr>");
for(var j=0;j<arr1["name"].length;j++)
{
document.write("<tr>");
document.write("<td>"+(j+1)+"</td>");
document.write("<td>"+arr1["name"][j]+"</td>");
document.write("<td>"+arr1["age"][j]+"</td>");
document.write("<td>"+arr1["city"][j]+"</td>");
document.write("</tr>");
}


</script>
</body>

</html>