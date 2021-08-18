<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form2.css">




</head>
<body>
    <form method="post" name="memberregitrationform" enctype="multipart/form-data">
    <table border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
    <td>
    <input type="text" name="student_name" autofocus="true" required placeholder="Enter your name :">
    </td>
    <td rowspan="6">
    <img src="#" style="width: 100px; height: 100px;"><br>
    <input type="file" name="dp">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" name="father_name" autofocus="true" required placeholder="Enter your father name :">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" name="mother_name" autofocus="true" required placeholder="Enter your mother name :">
    </td>
    </tr>
    <tr>
    <td>
    <input type="date" name="dob" required placeholder="Enter your Date of Birth :">                     
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" name="mobile_no" required placeholder="Enter your mobile number no :">
    </td>
    </tr>
    
    <tr>
    <td>
    <input type="email" name="email_id" required placeholder="Enter your email id :">
    </td>
    </tr>

    <tr>
    <td>
    <input type="number" name="aadhar_number" required placeholder="Enter your aadhar number:">
    </td>
    <td>
    <input type="text" name="blood_group" required placeholder="Enter your blood group:">
    </td>
    </tr>
    <tr>
    <td>
    <label>Gender :</label>
    <input type="radio" required id="male" name="gender"> <label for="male"> MALE</label>
    <input type="radio" required id="female"checked name="gender"> <label for="female"> FEMALE</label>
    <input type="radio" required id="transgender" name="gender"> <label for="transgender">transgender</label>
    </td>
    <td>
    <label>Categories :</label>
    <input type="radio" required id="general" name="categories"><label for="general">General</label>

    <input type="radio" required id="obc" checked name="categories"><label for="obc">OBC</label>
    <input type="radio" required id="sc" name="categories"><label for="sc">SC</label>
    <input type="radio" required id="st" name="categories"><label for="st">ST</label>

    </td></tr>
    <tr>
    <td>
    <textarea name="local_address" style="width: 155px; height: 40px; " placeholder="your local address"></textarea>
    </td>
    <td>
    <textarea name="permanent_address" style="width: 155px; height: 40px;" placeholder="your permanent address"></textarea>
    </td></tr>
    <tr>
    <td>
    <select name="local_state" id="">
    <option value="">SELECT STATE</option>
    <option value="ap">Arunachal pradesh</option>
    <option value="bh">bihar</option>
    <option value="UP">UTTARPRADESH</option>
    <option value="MP">MADHYA PRADESH </option>
    </select>
    </td>

    <td>
    <select name="permanent state" id="">
    <option value="">SELECT STATE</option>
    <option value="ap">Arunachal pradesh</option>
    <option value="bh">bihar</option>
    <option value="UP">UTTARPRADESH</option>
    <option value="MP">MADHYA PRADESH </option>
    </select>
    </td>
    </tr>

    <tr>
    <td>
    <select name="local_districts">
    <option value="">SELECT DISTRICT</option>
    <option value="hazaribagh">HAZARIBAGH</option>
    <option value="ballia">BALLIA</option>
    <option value="dumka">DUMKA</option>
    <option value="ranchi">RANCHI</option>
    </select>
    </td>
    
    
    <td>
    <select name="permanent_district">
    <option value="">SELECT DISTRICT</option>
    <option value="hazaribagh">HAZARIBAGH</option>
    <option value="ballia">BALLIA</option>
    <option value="dumka">DUMKA</option>
    <option value="ranchi">RANCHI</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>
    <input type="number" name="local_pincode" placeholder="Enter pin code : ">
    </td>

    <td>
    <input type="number" name="permanent_pincode" placeholder="Enter pin code : ">
    </td>
    </tr>
    
    <tr>
    <td>
    <input type="number" name="bank_account_no" placeholder="Enter bank account no :  ">
    </td>

    <td>
    <input type="text" name="ifsc_code" placeholder="Enter ifsc code : ">
    </td>
    </tr>
    <tr>
    <td colspan="2">
    <table border="1" cellpadding="0" cellspacing="0">
    <tr>
    <th>SR NO</th><th>Degree course</th><th>Bord/university</th><th>Year</th><th>Percentage</th>
    </tr>
    <tr>
    <td>1.</td><td>10th</td><td><input type="text" name="hsc_bord"></td><td><input type="text" name="hsc_year"></td><td><input type="text" name=""></td>
    </tr>
    <tr>
    <td>2.</td><td>12th</td><td><input type="text" name="hsc_bord"></td><td><input type="text" name="hsc_year"></td><td><input type="text" name=""></td>
    </tr>
    
    
    
    </table>
    </td>
    </tr>
    <tr>
    <td colspan="2">
    <input type="submit" name="submit" value="SUBMIT">
    </td>
    </tr>

     

    



    

    

    
    




    
    
    
    
    
    
    
    
    
    


    


    
    









</table>
</form>

</body>
</html>