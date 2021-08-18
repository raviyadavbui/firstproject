<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
function SwitchCase(opt)
{
    var firstValue=document.getElementById("firstValue").value;
    var secondValue=document.getElementById("secondValue").value;
    var result="";
    var method=document.getElementsByName("mtype");
   // for(i=0;i<method.length;i++)
    //{
       // if(method[i].checked==true)
       // {
           // var opt=method[i].value;
       // }

    //}
    switch(Number(opt.value))
    {
        case 0:
            result=Number(firstValue)+Number(secondValue);
            
            break;
            case 1:
                result=Number(firstValue)-Number(secondValue);
            break;

            case 2:
                result=Number(firstValue)*Number(secondValue);
            break;
            case 3:
                result=Number(firstValue)/Number(secondValue);
            break;
            case 4:
                result=Number(firstValue)%Number(secondValue);
            break;
            default:
                alert("none of these");
    
    
    

    }
    document.getElementById("result").innerHTML="result :"+result;


}
</script>
    <table style="width:50%;margin-top:50px; border:1px solid; " align="center">
    <tr>
    <td id="abc" style="padding:15px;" align="center">
    First Value:<input type="text" id="firstValue"><br>
    Second Value:<input type="text" id="secondValue"><br>
    <input type="radio" onclick="SwitchCase(this)" id="add"checked name="mtype" value="0"><label for="add">Add</label>
    <input type="radio" onclick="SwitchCase(this)" id="sub" name="mtype" value="1"><label for="sub">Sub</label>
    <input type="radio" onclick="SwitchCase(this)" id="mul" name="mtype" value="2"><label for="mul">Mul</label>
    <input type="radio"onclick="SwitchCase(this)"  id="div" name="mtype" value="3"><label for="div">Div</label>
    <input type="radio" onclick="SwitchCase(this)" id="mod" name="mtype" value="4"><label for="mod">Mod</label><br>
    
    <label id="result"></label><br>
   <!-- <button onclick="SwitchCase()">submit</button>
    <input type="reset" name="reset"value="reset">-->
    </td>
    </tr>
    </table>




</body>
</html>