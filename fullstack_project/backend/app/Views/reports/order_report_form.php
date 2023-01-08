<?php
if ($orders) : ?>
   <table class="table table-striped">
      <tr>
         <th>CustomerName</th>
         <th>Phone</th>
         <th>City</th>
         <th>OrderNumber</th>
         <th>OrderDate</th>
         <th>Status</th>
      </tr>
      <?php
      foreach ($orders as $order) : ?>
         <tr>
            <td><?= $order['customerName']; ?></td>
            <td><?= $order['phone']; ?></td>
            <td><?= $order['city']; ?></td>
            <td><?= $order['orderNumber']; ?></td>
            <td><?= $order['orderDate']; ?></td>
            <td><?= $order['status']; ?></td>
         </tr>
      <?php endforeach; ?>
   </table>
<?php endif; ?>