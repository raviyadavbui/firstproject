<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ccc4.css">
</head>
<body>
<form method="post" name="memberregitrationform" enctype="multipart/form-data">


    <table border="0" cellpadding="0" cellspacing="0" align="center">
        
    
<tr>
      <td colspan="2">1.</td>  
    <td id="D" colspan="3">
    Rgistration Detail/पंजीकरण के विवरण  
    
    
    </td>
    






    
    </tr>


    <tr>
    <td colspan="0">
     Whether Applied Previously in CCC Examination/क्या आपने पहले ccc परीक्षा के लिए आवेदन किया है   
    </td>
    <td>
    <input type="radio" required id="male" name="gender"> <label for="male"> NO/नहीं  </label>
    <input type="radio" required id="male" name="gender"> <label for="male"> YES/ हाँ </label>




    </td>




    </tr>
    <tr>
    

    <td id="E" colspan="3">
     Applicant's Personal Detail/आवेदक का ब्यक्तिगत विवरण 
    </td>

    </tr>
    <tr>
    <td>
    Applicant's Full Name/ आवेदक का पूरा नाम                    
    </td>
    <td>
    <select >
    <option value="">SELECT</option>
    <option value=""> </option>
    <option value=""></option>
    <option value=""></option>
    <option value=""> </option>
    </select>
    </td>
    <td>
    <input type="text" name="name" value="">
    
    
    
    </td>


    </tr>
    <tr>
    <td colspan="1">
    Care Of/देखभाल 
    </td>
    <td id="M"><input  type="radio" required i
    d="male" name="parent"> <label for="parent"> Parent/माता पिता </label>
    <!--<input type="radio" required id="male" name="gender"> <label for="male"> संरक्षक </label>-->
    <input type="radio" name="radio" value="">Guardian/संरक्षक 
    </td>
    </tr>
    
    <tr>
    <td>
    Father's Name/पिता का नाम 
    </td>
    <td>
    <select placeholder="Mr/श्री ">
    <option>Mr/श्री </option> 
    <option>Mr/श्री </option>
    <option>m/s</option>
    
    </select>
    
    </td>
    <td>
    <input type="text" name="">
    </td>
    </tr>

    <tr>
    <td>
    
    Mother'Name/माता का नाम

    </td>
    <td><select placeholder="Mrs/श्रीमत">
    <option>Mrs/श्रीमत</option>
    <option>श्रीमत</option>
    
    </select>
    
    
    </td>


    <td>
    <input type="text" name="">
    </td>
    </tr>
    <tr>
    <td>
    <label>Gender/लिंग </label>
    </td>
    <td><input 
    type="radio" required id="male" name="gender">male/पुरुष <!-- <label for="male"> MALE</label>-->
    <input type="radio" required id="female"checked name="gender">female/ महिला <!-- <label for="female"> FEMALE</label>-->
    </td>
    <!--<input type="radio" required id="transgender" name="gender"> <label for="transgender">transgender</label>
    </td>
    <td>
    <label>Categories :</label>
    <input type="radio" required id="general" name="categories"><label for="general">General</label>

    <input type="radio" required id="obc" checked name="categories"><label for="obc">OBC</label>
    <input type="radio" required id="sc" name="categories"><label for="sc">SC</label>
    <input type="radio" required id="st" name="categories"><label for="st">ST</label>

    </td></tr>-->
    <tr>
    <td>
    Date of Birth/जन्म दिनांक 
    </td>
    <td>
    <input type="date" name="dob">
    

     
    </td></tr>
    <tr>
    <td>
    Category/वर्ग 
    </td>
    <td>

    <select name="permanent state" id="">
    <option>Select one</option>
    <option></option>
    <option></option>
    </select>
    
    </td>
    </tr>
    <tr>
    <td>
    Occupation/ब्यवसाय 

    </td>
    <td>
    <select name="permanent state" id="">
    <option>Select one</option>
    <option></option>
    <option></option>
    </select>
    
    </td>
    
    
    </tr>
    <tr>
    <td>
    Disability/दिब्यांगता 
    </td>
    <td>
     <input type="radio" required id="male" name="gender">yes/हाँ 
     <input type="radio" required id="male" name="gender"> no/ ना 
    </td>

    </tr>
    <tr>
        <div id="div3">
    <td id="F" colspan="3">
    Contact Details/संपर्क विवरण 
    </td>
</div>
    </tr>
    <tr>
    <td>
    PhonE with STD Code/दूरभाष एस टी डी  कोड सहित 
    
    
    </td>
    <td>
    
    <input style="width: 100px;" type="number" name="code" value="">
</td>
<td>
    <input style="width: 300px;" type="number" name="phone" value="">
    
    
    
    </td>
    
    </tr>
    <tr>
    <td >
    Mobile/मोबाइल 
    </td>
    <td>
    <input style="width: 100px;height: 15px;" type="number" name="number" value="" placeholder="+91">
    </td>
    <td> 
    <input style="width: 300px;" type="number" name="number" value="" placeholder="+91"> 
    
    </td>

    
    
    </tr>
    <tr>
    <td>
    Email/ईमेल पता 
    
    </td >
    <td colspan="3">
    <input type="email" name="email" value=""> 
    
    
    
    
    
    </tr>












</table>
</form>
<input id="button" type="button" name="submit" value="submit">
</body>
</html>