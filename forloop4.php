<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #printTable{
            text-align:center;
        }
    </style>

</head>
<body>
    
    <script type="text/javascript">
    function tablePrint()
    {
    neww=window.open();
    neww.document.write("<div align='center'>");
    neww.document.write(document.getElementById("abc").innerHTML)
    neww.document.write("</div>");
    neww.print();
    neww.close();

    }
    </script>
    <table style="width:50%;margin-top: 50px;border:1px solid;background-color:green;"align="center">
    <tr>
    <td id="abc" style="padding: 15px;" align="center" >
    <script type="text/javascript">
    var a="<table border='1'>";
    for(var j=2;j<=20;j+=2)
    {
        a=a+"<tr>";
        for(var i=j;i<=(j*10);i+=(j/2))
        {
            a=a+"<td>"+i+"</td>";
        }
        a=a+"</tr>";
    }
    a=a+"</table>";
    document.write(a);
    </script>
    </td>
    </tr>
    <tr>
    <td>
    <button onclick="tablePrint()">print</button>
    </td>
    </tr>
    </table>
</body>
</html>