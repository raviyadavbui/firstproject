<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        font-family:arial;
        font-weight:bold;
        
        
    }
    



    table{
        width: 100%;
        
        
    }
    
    .td1{
        width:50%;
        /*background-color:green;*/
        text-align:center;color:white;
        background-color:#2679D1;
        


    }
    .td2{
        width:50%;
        padding: 15px;
        margin-top:15px;
        background-color:#2679D1;


    }
    
    
    td{
       /* border:1px solid red;*/
        padding:10px;
    }
    input{
        padding:5px;
         
        
    }
    div{
        margin-bottom:5px;
        color:black;
        font-size:10px;
    }

    .button1{
        background-color:green;
        padding:5px;margin:0px;
        color:white;
        border:1px solid black;
        border-radius:2px;
        font-size:8px;

    }
    .button2{
        background-color:green;
        padding:5px;margin:0px;
        color:white;
        border:1px solid black;
        border-radius:2px;
        width:150px;
    }
    
    
    </style>
</head>
    <body>
    <table cellpadding="0" cellspacing="0">
    <tr id="tr1">
    <td class="td1">
  <h1>  facebook</h1>
    
    </td>
    <td class="td2">
    <div>Email Id/ password</div>
    <input style="width:150px;" type="text" name=" name" value="" placeholder="email">
    <input style="width:150px;" type="text" name=" name" value=""placeholder="password">
    <button class="button1">sign in</button>
    </td>
    </tr>
    <tr class="tr2">
    <td>
    Facebook helps you connect and share with the people in your life.
    </td>
    <td>
    <h1>Create an account</h1>
    <p>Its and always will be</p>
    </td>
    </tr>

    <tr>
    <td rowspan="6">
    <img src='images/facbook-like-and-share-thumbs-up.png'style="width:300px;">
    </td>
    <td>
    <input type="text" name="n" value="" placeholder="first name">
    <input type="text" name="n" value="" placeholder="Last name">
    </td>
    </tr>

    <tr>
    <!--<td></td>-->
    <td>
    <input style="width:300px;" type="text" name="email" value="" placeholder="mobail number or email address">
    </td>
    </tr>
    <tr>
    <td>
    <input style="width:300px;" type="text" name="name" value="" placeholder="New password">
    </td>
    </tr>
    <tr>
    <td>
    <div>Date of birth</div>
    
    <select>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    </select>
    <select>
    <option>Jan</option>
    <option>Feb</option>
    <option>Mar</option>
    </select>
    <select>
    <option>1991</option>
    <option>1992</option>
    <option>1993</option>
    <option>1994</option>
    <option>1995</option>
    <option>1996</option>
    </select>
    





    </td>
    </tr>
    <tr>
    <td>
    
    <input type="radio" required id="male" name="gender"> <label for="male"> Male </label>
    <input type="radio" required id="male" name="gender"> <label for="female"> female </label>

    </td>
    </tr>
    <tr>
    <td>
    <button class="button2">Create In account</button>
    </rd>
    
    </tr>
    
    </table>











</body>
</html>