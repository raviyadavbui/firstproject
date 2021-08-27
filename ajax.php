<?php


$link=mysqli_connect('localhost','root','','db_test');
$country_id =  $_POST['country_id'];
$res=mysqli_query($link,"select * from states where country_id='$country_id' ");
//$output="";
$output = '<option value="">Select State</potion>';
while($row=mysqli_fetch_array($res)){
    $output .= '<option value="' .$row['id'] . '">' . $row['name'] . '</option>';
}
echo $output;
//state

$link=mysqli_connect('localhost','root','','db_test');
$state_id =  $_POST['state_id'];
$res=mysqli_query($link,"select * from cities where state_id='$state_id' ");
//$output="";
$output = '<option value="">Select city</potion>';
while($row=mysqli_fetch_array($res)){
    $output .= '<option value="' .$row['id'] . '">' . $row['name'] . '</option>';
}
echo $output;





/*if (isset($_post['id'])){
    $id=$_POST['id'];


    $res=mysqli_query($link,"select * from state where country_id='$id' ");
    while($row=mysqli_fetch_array($res)){
        $id=$row['id'];
        $state=$row['state'];

        echo "<option value'$id'>$state</option>";
    }
}*/

/*$link=mysqli_connect("localhost","root","");
   mysqli_select_db($link,"detabase456");
   $country=$_GET["country"];

    if($country!="")
    {
        $res=mysqli_query("$link,select * from state where country_id=$country"); 
        echo "<select>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<option>"; echo $row["name"]; echo "</option>";

        }
        echo "<select>";
   }*/

   




?>