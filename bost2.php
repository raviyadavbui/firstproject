<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
/*@media min-width:10{

}*/


/* Small devices (landscape phones, 576px and up)*/
@media (min-width: 476px){
    .abc{
        background-color:pink;
        text-align:center;
    }
    img{
        width:1000px;
        height:200px;
    }
    .div{
        display:none;
        
    }
}


@media (min-width: 576px) { 
    .abc{
        background-color:red;
    }
    img{
        width:1000px;
        height:200px;
    }
    .div{
        display:inline;
        background-color:rgba(5,250,245,1)50% ;


    }
    table{
        background-color:red;
        width:100%;
        color:white;
        background-color:rgba(5,250,245,1) ;

    }
    input{
        
    }
    .button2{
    background-color:red;
        padding:5px;margin:0px;
        color:white;
        border:1px solid red;
        border-radius:100%;
        width:150px;
    }

 }

/* Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) { 
    .abc{
        background-color:green;
    }
    .img{
        width:1000px;
        display:;
    }
    table{
        background-color:green;
        width:100%;
    


    }
    .button2{
        background-color:red;
        padding:5px;margin:0px;
        color:white;
        border:1px solid red;
        border-radius:100%;
        width:150px;
    }


 }

/* Large devices (desktops, 992px and up)*/
@media (min-width: 992px) { 
    .abc{
        background-color:black;
    }
 }

/* X-Large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) { 
    .abc{
        background-color:black;
    }
 }

/* XX-Large devices (larger desktops, 1400px and up)*/
@media (min-width: 1400px) { ... }   

</style>
</head>




<body>
    
<div class="abc">abc</div>
<img class="img" src="images/35939924170_2a5dba5966_z.jpg">
<div class="div">
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
    </td>
    
    </tr>
    
    </table>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="">Column1</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
			</div>
			<div class="col-md-4">
				<h3>Column 2</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
			</div>
			<div class="col-md-4">
				<h3>Column 3</h3>
				<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus congue ipsum ut rutrum. Proin ultrices maximus lorem et rhoncus. Vivamus at diam tellus. Fusce non consequat sapien, vel fermentum elit. Fusce nec sapien vestibulum, congue urna ac, feugiat elit. In vestibulum sem arcu, molestie tincidunt nulla dictum ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent faucibus semper tellus nec pulvinar. Phasellus laoreet vel est a pulvinar. Maecenas malesuada tellus nec purus pulvinar posuere. Sed pellentesque sapien et pretium blandit.</p>
			</div>
		</div>
		
	</div>

</body>
</html>