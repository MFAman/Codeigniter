<?php
echo view('includes/header');
echo view('includes/navbar');
?>
<div class="container">
   <h1><?php echo $title ?></h1>
   <form action="/student/create" method="post" class="col-6">
      <?= csrf_field(); ?>
      <div class="mb-2">
         <label class="form-label">Name</label>
         <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="mb-2">
         <label class="form-label">Email</label>
         <input type="email" name="email" id="email" class="form-control">
      </div>
      <div class="mb-2">
         <label class="form-label">Phone</label>
         <input type="text" name="phone" id="phone" class="form-control">
      </div>
      <div class="mb-2">
         <label class="form-label">Address</label>
         <textarea type="text" name="address" id="address" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
   </form>
</div>
<?php
echo view('includes/footer');
?>