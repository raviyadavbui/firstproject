<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
//alert($("h1").html());
$("#btnCalculate").click(function(){
    var method = Number($("input[name='method']:checked").val());
    var firstval=Number($("#firstValue").val());
    var secondval=Number($("#secondValue").val());
    switch(method)
    {
        case 1:
        var result=firstval+secondval;
        break;
        case 2:
        var result=firstval-secondval;
        break;
        case 3:
        var result=firstval*secondval;
        break;
        case 4:
        var result=firstval/secondval;
        break;
        default:
        var result ="Calculation Failed";
    
    }
    $("#result").html(result);
    
})


});
</script>
<h1>ravi</h1>

<table style="width: 100%;" id="tb">
    <tr>
        <td style="width: 100%" align="center">            
                <table style="width: 50%; margin-top: 50px; border:1px solid; " align="center">
                    <tr>
                        <td id="abc"  style="padding: 15px;" align="center">
                            <p>This is Abhi I-Tech Computer Institute. Situated in Ballia District of Uttar Pradesh.</p>
                            <input type="text" id="firstValue" name="firstValue">
                            <input type="text" id="secondValue" name="firstValue"><br>
                            <label id="result"></label><br>
                            <input type="radio" value="1" id="add" name="method"><label for="add">ADD</label>
                            <input type="radio" value="2" id="sub" name="method"><label for="sub">SUB</label>
                            <input type="radio" value="3" id="mul" name="method"><label for="mul">MUL</label>
                            <input type="radio" value="4" id="div" name="method"><label for="div">DIV</label>
                            <input type="button" name="btn" value="CALCULATE" id="btnCalculate">


                        </td>

                    </tr>
                </table>
        




</body>
</html>