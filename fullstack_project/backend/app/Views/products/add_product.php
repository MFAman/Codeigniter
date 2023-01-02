<?php echo view('/layouts/header.php'); ?>
<!-- Navbar -->
<?php echo view('/layouts/topbar.php'); ?>

<?php echo view('/layouts/left_sidebar.php'); ?>

<div class="content-wrapper">

   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Add New Products</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <?php if (session()->has('errors')) {
      $errors = session()->errors;
   } ?>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <section class="col-lg-8 offset-2">
               <div class="card card-info">

                  <div class="card-header">
                     <h3 class="card-title">Product Entry Form</h3>
                  </div>

                  <form action="<?= base_url('/products/create'); ?>" method="post" enctype="multipart/form-data">
                     <?= csrf_field(); ?>
                     <div class="card-body">
                        <div class="form-group">
                           <label>Product Name</label>
                           <input type="text" name="product_name" class="form-control" value="<?= old('product_name') ?>" placeholder="Enter Product email">
                           <span class="text-danger">
                              <?= isset($errors['product_name']) ? $errors['product_name'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Category</label>
                           <select name="cat_name" class="form-control">
                              <option value="" selected>Select One</option>
                              <?php foreach ($cats as $cat) : ?>
                                 <option value="<?= $cat['id']; ?>"><?= $cat['category_name']; ?>
                                 </option>
                              <?php endforeach ?>

                           </select>
                        </div>
                        <div class="form-group">
                           <label>Product Details</label>
                           <textarea type="text" id="summernote" name="product_details" class="form-control" placeholder="Enter Product Details"><?= old('product_details') ?></textarea>
                           <span class="text-danger">
                              <?= isset($errors['product_details']) ? $errors['product_details'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Price</label>
                           <input type="text" name="product_price" class="form-control" value="<?= old('product_price') ?>" placeholder="Enter Product Price">
                           <span class="text-danger">
                              <?= isset($errors['product_price']) ? $errors['product_price'] : '' ?>
                           </span>
                        </div>
                        <div class="form-group">
                           <label>Product Image</label>
                           <input type="file" name="product_image" class="form-control" value="<?= old('product_image') ?>">
                           <span class="text-danger">
                              <?= isset($errors['product_image']) ? $errors['product_image'] : '' ?>
                           </span>
                        </div>

                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-info" onclick="return confirm('Product Added Successfully')">Submit</button>
                     </div>
                  </form>

               </div>
            </section>

         </div>

      </div>
   </section>
</div>

<?php echo view('/layouts/footer.php'); ?>