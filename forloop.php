<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="CountingTable()">
    <script>
     function CountingTable()
     {
         var a=0;
         for(var i=2;i<=21;i+=2)
         {
             if(a==0)
             {
                 a=i;


             }
             else
            {

                 a=a+"<br>"+i;

         }


         }
     document.getElementById("abc").innerHTML=a;




    }
    
    
    
    
    
    
    
    
    
    
    </script>

    <table border="1">
    <tr>
    <td id="abc" style="padding: 15px; " align="center">
    
    
    
    </td>
    
    
    </tr>
    
    
    
    </table>






</body>
</html>