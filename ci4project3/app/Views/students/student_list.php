<?php
echo view('includes/header');
echo view('includes/navbar');
?>
<div class="container">
   <h1><?php echo $title ?></h1>
   <table class="table table-success table-striped">

      <tr>
         <th>SL</th>
         <th>Name</th>
         <th>Phone</th>
         <th>Email</th>
         <th>Address</th>
         <th>Action</th>
      </tr>

      <?php foreach ($students as $student) {
         //echo $student['name'] . "<br>";
      ?>
         <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['name'] ?></td>
            <td><?php echo $student['phone'] ?></td>
            <td><?php echo $student['email'] ?></td>
            <td><?php echo $student['address'] ?></td>
            <td>
               <a href="student/edit/<?= $student['id'] ?>" class="btn btn-info">Edit</a>
               <a href="student/delete/<?= $student['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
         </tr>

      <?php } ?>

   </table>
   <a href="/student/new" class="btn btn-primary">Create New Student</a>
</div>

<?php
echo view('includes/footer');
?>