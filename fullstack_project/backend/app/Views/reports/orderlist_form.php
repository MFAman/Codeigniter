<?= $this->include('layouts/header1.php'); ?>

<?= $this->include('layouts/topbar.php'); ?>

<?= $this->include('layouts/left_sidebar.php'); ?>

<div class="content-wrapper">

   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Orler List Form</h1>
               <?php if (session()->has('msg')) : ?>
                  <div class="alert alert-success"><?= session()->msg; ?></div>

               <?php endif; ?>

               <?php if (session()->has('dlmsg')) : ?>
                  <div class="alert alert-danger"><?= session()->dlmsg; ?></div>
               <?php endif; ?>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">

         <!-- Main row -->
         <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Month wise Order List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <h3>Order List</h3>
                     <form action="">

                        <input class="btn btn-info" type="date" id="startdate">
                        <input class="btn btn-info" type="date" id="enddate"><br><br>
                        <button class="btn btn-success" type="button" id="repbtn">Show Report</button>
                        <br>
                        <br>
                        <h3>Staff List</h3>
                        <div id="show">
                        </div>
                  </div>

                  </form>

               </div>
            </section>
         </div>
      </div>

   </section>


</div>

<?= $this->include('layouts/footer1.php'); ?>