<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){

$("#clkbtn1").click(function(){
    $("#opt1").attr("src","images/newfolder.jfif");
    $("#opt2").attr("src","images/th (1).jfif");
    $("#opt3").attr("src","images/th (1).jfif");
    $("#opt4").attr("src","images/th (1).jfif");
    $("#radioValue").val("1");

});
$("#clkbtn2").click(function(){
    $("#opt2").attr("src","images/newfolder.jfif");
    $("#opt1").attr("src","images/th (1).jfif");
    $("#opt3").attr("src","images/th (1).jfif");
    $("#opt4").attr("src","images/th (1).jfif");
    $("#radioValue").val("2");
    $("#image").attr("src","images/6514.jpg");
   
});
$("#clkbtn3").click(function(){
    $("#opt3").attr("src","images/newfolder.jfif");
    $("#opt2").attr("src","images/th (1).jfif");
    $("#opt1").attr("src","images/th (1).jfif");
    $("#opt4").attr("src","images/th (1).jfif");
    $("#radioValue").val("3");

});
$("#clkbtn4").click(function(){
    $("#opt4").attr("src","images/newfolder.jfif");
    $("#opt2").attr("src","images/th (1).jfif");
    $("#opt3").attr("src","images/th (1).jfif");
    $("#opt1").attr("src","images/th (1).jfif");
    $("#radioValue").val("4");

});




    
   /*$("#bulbswitch").click(function(){
       /*if($("#bulboff").css("display")=="none")
       {

           $("#bulboff").css("display","inline");
           $("#bulbon").css("display","none");
       }
       else if($("#bulbon").css("display")=="none")
       {
        $("#bulboff").css("display","none");
           $("#bulbon").css("display","inline"); 
       }*/
       /*if($("#bulboff").css("display")=="none")
       {
           $("#bulboff").show();
           $("#bulbon").hide();
       }
       else{
        $("#bulboff").hide();
           $("#bulbon").show();
       }*/
       /*$("#bulboff").toggle();
       $("#bulbon").toggle();*/
  /* })
  
   /*setInterval(trig,500);
   function trig(){
       $("#bulbswitch").trigger("click");
      
   }*/
});
</script>
<table style="width:50%;margin-top:50px; border:1px solid" align="center">
<tr>
<td>
<!--<img id="bulboff" style="display:none;width:100px;" src="images/isolated-light-bulb-1.jpg">
<img id="bulbon"  src="images/th (2).jfif"style="width:100px;">
<button id="bulbswitch" name="mtype">Bulb switch</button>-->
<!--<button id="#bulbswitch1" name="mtype">bulb switch1</button>
<input type="radio" id="bulbswitch" name="mtype">
<input type="radio" id="bulbswitch" name="mtype">-->
<div id="clkbtn1" >
<img id="opt1" src=" images/newfolder.jfif"style="width:20px;height:20px;">option1
</div>
<div id="clkbtn2">
<img id="opt2" src=" images/th (1).jfif"style="width:20px;height:20px;">option2
</div> 
<div id="clkbtn3" >
<img id="opt3" src=" images/th (1).jfif"style="width:20px;height:20px;">option3
</div>
<div id="clkbtn4" >
<img id="opt4" src=" images/th (1).jfif"style="width:20px;height:20px;">option4
</div>
<input type="hidden" id="radioValue" name="radioValue" value= "1">

</td>
</tr>
<tr>
<td>
<img id="image" src="">
</td>
</tr>
</table>
</body>
</html>