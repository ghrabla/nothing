<?php 
$cars = array("Volvo", "BMW", "Toyota","mamak");
?>
<table>
  <tr>
    <th>title</th>
  </tr>
  <?php foreach ($cars as $car) { ?>   
  <tr>
    <td><?= $car ?></td>
  </tr
  <?php }?>
  </table>

