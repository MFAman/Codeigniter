<?php
if ($empls) : ?>
   <table class="table table-striped">
      <tr>
         <th>EmployeeNumber</th>
         <th>Name</th>
         <th>email</th>
         <th>Job Title</th>
      </tr>
      <?php
      foreach ($empls as $empl) : ?>
         <tr>
            <td><?= $empl['employeeNumber']; ?></td>
            <td><?= $empl['firstName'] . ' ' . $empl['lastName']; ?></td>
            <td><?= $empl['email']; ?></td>
            <td><?= $empl['jobTitle']; ?></td>
         </tr>
      <?php endforeach; ?>
   </table>
<?php endif; ?>