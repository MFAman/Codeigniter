<?php
echo view('includes/header');
echo view('includes/navbar');
?>
<div class="container">
   <!-- <h1><?php //echo $title 
            ?></h1> -->
   <form action="/student/update/<?= $student['id'] ?>" method="post" class="col-6">
      <?= csrf_field(); ?>
      <div class="mb-2">
         <label class="form-label">Name</label>
         <input value="<?php echo $student['name']; ?>" type="text" name="name" id="name" class="form-control">
      </div>
      <div class="mb-2">
         <label class="form-label">Email</label>
         <input value="<?php echo $student['email']; ?>" type="email" name="email" id="email" class="form-control">
      </div>
      <div class="mb-2">
         <label class="form-label">Phone</label>
         <input value="<?php echo $student['phone']; ?>" type="text" name="phone" id="phone" class="form-control">
      </div>
      <div class="mb-2">
         <label class="form-label">Address</label>
         <textarea type="text" name="address" id="address" class="form-control"><?php echo $student['address']; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary" value="Submit">Update</button>
   </form>
</div>
<?php
echo view('includes/footer');
?>