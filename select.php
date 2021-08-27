<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   $link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"detabase456");
   
   ?> 
<form name="form1" cation="" method='post'>
<table>
    <tr>
        <td>
            select country
        </td>
        <td>
            <select id="countrydd" onChange="change_country()">
            <option>select country</option>
            <?php
            $res=mysqli_query($link,"select * from countries");
            while($row=mysqli_fetch_array($res)){
                ?>
                <option><?php echo $row["name"]?></option>
                <?php


            }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>
        select state
        </td>
        <td>                                              
             <div id="state">
             <select>
            <option>select state</option>
        </select>

             </div>
            
            </td>
</tr>


</table>
</form>

<script type="text/javascript">
function change_country(){
    var xmlhttp=new xmlhttpRequest();
    xmlhttp.open("GET","ajax.php?country="+document.getElementById("countrydd").value,false);
    xmlhttp.sened(null);
    document.getElementById("state").innerHTML=xmlhttp.responseText;
}


</script>
</body>
</html>