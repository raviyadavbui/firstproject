<table>
<tr>
    <th>Sr.N</th>
    <th>Name</th>
    <th>Mobile</th>

</tr>
<?php
include "config_oops.php";
$sql = "SELECT * FROM  test_entry ";
$rec = $conn->query($sql);
$i=1;
while($res = $rec->fetch_assoc()) {
   ?>
   <tr>
       <td><?php echo $i ;?></td>
       <td><?php echo $res['name'] ;?></td>
       <td><?php echo $res['mobile'] ;?></td>
   </tr>


   <?php

   $i++;
  }



?>

</table>