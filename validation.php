<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="R2.css">
</head>
<body>
    <form action="send3.php" method="post">
 Name:<input type="text" name="name">
 <span class="errorcolor">* <?phpecho $nameError;?></span>

<br><br>
E-mail:<input type="text" name="email">
<span class="errorcolor">* <?php echo $emailerror;?></span>
<br><br>
Message: <textarea name="message" rows="6" cols="24"></textarea>
<br><br>
<input type="submit" name="submit" value="submit">




    </form>
</body>
</html>