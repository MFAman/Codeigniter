<?php echo view('layouts/header1.php'); ?>
<!-- Navbar -->
<?php echo view('layouts/topbar.php'); ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php echo view('layouts/left_sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Products List</h1>
               <?php if (session()->has('msg')) : ?>
                  <div class="alert alert-success"><?= session()->msg; ?></div>
               <?php endif; ?>

               <?php if (session()->has('dlmsg')) : ?>
                  <div class="alert alert-danger"><?= session()->dlmsg; ?></div>
               <?php endif; ?>
            </div><!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
               </ol>
            </div><!-- /.col -->
         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">

         <!-- Main row -->
         <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">DataTable with default features</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>SL</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Details</th>
                              <th>Price</th>
                              <th>Category</th>
                              <th>Action</th>
                           </tr>
                        </thead>

                        <tbody>
                           <?php
                           $count = 1;
                           foreach ($products as $product) {; ?>
                              <tr>
                                 <td><?= $count ?></td>
                                 <td><img src="<?= $product['product_image']; ?>" style="width: 90px;" alt=""></td>
                                 <!-- <td><img src="assets/uploads/<?php //$product['product_image']; 
                                                                     ?>" alt="Product Image" style="width: 80px;"></td> -->
                                 <td><?= $product['product_name']; ?></td>
                                 <td><?= $product['product_details']; ?></td>
                                 <td><?= $product['product_price']; ?></td>
                                 <td><?php $product['product_category'] ?>
                                 </td>
                                 <td class="d-flex justify-content-between">
                                    <a href="<?= site_url("/products/edit/" . $product['id']) ?>" class="btn btn-info">Edit</a>

                                    <form method="post" action="<?= site_url("/products/delete/" . $product['id']) ?>">
                                       <?= csrf_field(); ?>
                                       <button onclick="return confirm('Are you sure you want to')" class="btn btn-danger delete" type="submit">Delete</button>
                                    </form>
                                 </td>
                              </tr>
                           <?php $count++;
                           } ?>
                        </tbody>

                        <tfoot>
                           <tr>
                              <th>SL</th>
                              <th>Image</th>
                              <th>Name</th>
                              <th>Details</th>
                              <th>Price</th>
                              <th>Category</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </section>

</div>

<?php echo view('layouts/footer1.php'); ?>