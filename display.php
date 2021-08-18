<?php
include("config5.php");
$result=mysqli_query($mysqli,"SELECT* from titels ORDER BY id DESC ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Update</th>

        </tr>
        <?php
        while($res=mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo'<td>'.$res['name'].'</td>';
            echo'<td>'.$res['email'].'</td>';
            echo'<td>'.$res['mobile'].'</td>';
            echo "<td><a href=\"edit.php?id=$res[id]\"><input type='submit' value='Edit'></a>";


            echo '</tr>';

        }

        ?>




    </table>
</body>
</html>