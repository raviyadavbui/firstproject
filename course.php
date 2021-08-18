<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        color:black; font-family:arial; margin:0px;padding:0px;
        box-sizing: border-box;



    }




    table{
        width: 100%;
        background-color:green;
        margin:0px;padding:0px;


    }
    .sno{
        background-color:black;
        width: 5%;

    }
    .contect{
        width: 50%;

    }
    .field{
        width: 45%;



    }
    tr:nth-child(even){
        background-color:khaki;

    }
    tr:nth-child(odd){
        background-color:pink;


    }
    /*input,select{
        width: 100px; border:1px solid green; border-radius:4px;background-color:#ccc;box-sizzing:border-box;margin:0px;padding:6px;




    }*/
     select{
        width: 150px;
        height: 30px;
        padding:2px;
        margin:2px;
    }
    
    
    </style>






</head>
<body>
    <table>
    <tr>
    <td class="sno">helo</td>
    <td class="contect">helo</td>
    <td class="field">helo</td>

    
    </tr>
    <tr>
    <td>1.</td>
    <td colspan="2">Registration form</td>
    
    
    </tr>
    <tr>
    <td>1.1</td>
    <td> Whether Applied Previously in CCC Examination/क्या आपने पहले ccc परीक्षा के लिए आवेदन किया है   
    </td>
    <td><input type="radio" required id="male" name="gender"> <label for="male"> NO/नहीं  </label>
    <input type="radio" required id="male" name="gender"> <label for="male"> YES/ हाँ </label>
</td>


    
    </tr>
    <tr>
    <td>2.</td>
    <td colspan="2">
    Applicant's Persional Detail/आवेदक का ब्यक्तिगत विवरण 
    
    </td>
    
    
    
    </tr>
    <tr>
    <td>21</td>
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
    <input type="text" name="name" value="">


    
    </td>
    
    
    </tr>
    <tr>
    <td>22</td>
    <td> Care Of/देखभाल </td>
    <td>
    <input  type="radio" required i
    d="male" name="parent"> <label for="parent"> Parent/माता पिता </label>
    <!--<input type="radio" required id="male" name="gender"> <label for="male"> संरक्षक </label>-->
    <input type="radio" name="radio" value="">Guardian/संरक्षक 
    
    </td>
    </tr>
    <tr>
    <td>22.1</td>
    <td>
    Father's Name/पिता का नाम 
    
    </td>
    <td><select placeholder="Mr/श्री ">
    <option placeholder="Mr/श्री ">Mr/श्री  </option>
    <option>m/s</option>
    
    </select>
    <input type="text" name="">
    
    </td>
    </tr>
    <tr>
    
    
    </tr>
    <tr>
    <td>22.2</td>
    <td> Mother'Name/माता का नाम</td>
    <td>
    <select placeholder="Mrs/श्रीमत">
    <option>Mrs/श्रीमत</option>
    <option>श्रीमत</option>
    
    </select>
    <input type="text" name="">
    </td>
    </tr>
    <tr>
    <td>2.3</td>
    <td>
    <label>Gender/लिंग </label>
    </td>
    <td>
    <input 
    type="radio" required id="male" name="gender">male/पुरुष <!-- <label for="male"> MALE</label>-->
    <input type="radio" required id="female"checked name="gender">female/ महिला <!-- <label for="female"> FEMALE</label>-->
    
    
    
    </td>
    
    
    </tr>
    <tr>
    <td>2.4</td>
    <td>
    Date of Birth/जन्म दिनांक 
    
    
    </td>
    <td>
    <input type="date" name="dob">
    </td>
    </tr>
    <tr>
    <td>2.5</td>
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
    2.6
    </td>

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
    <td>2.7</td>
    <td>
    Disability/दिब्यांगता 
    
    </td>
    <td>
    <input type="radio" required id="male" name="gender">yes/हाँ 
     <input type="radio" required id="male" name="gender"> no/ ना 
    
    
    
    </td>
    </tr>
    <tr>
    <td colspan="3">
    3Contact Details/संपर्क विवरण 
    </td>
    
    <td>
    


    </td>

    
    
    
    
    </tr>
    
    
    
    
    
    </table>





</body>
</html>