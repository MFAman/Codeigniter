<?php
echo view('includes/header');
echo view('includes/navbar');
?>
<div class="container">
   <h1>All Students List</h1>
   <table border="2px">
      <thead>
         <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($students as $student) {
            echo $student['name'] . "<br>"; ?>

            <tr>
               <td><?php echo $student['name'] ?></td>
               <td><?php echo $student['phone'] ?></td>
               <td><?php echo $student['email'] ?></td>
               <td><?php echo $student['address'] ?></td>
            </tr>

         <?php } ?>
      </tbody>

   </table>
</div>

<?php
echo view('includes/footer');
?>