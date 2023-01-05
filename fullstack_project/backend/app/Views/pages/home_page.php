<?= $this->extend('layouts2/default'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layouts2/navbar'); ?>

<div class="container-fluid text-center">
   <div class="row content">
      <div class="col-sm-2 sidenav">
         <p><a href="#">Link</a></p>
         <p><a href="#">Link</a></p>
         <p><a href="#">Link</a></p>
      </div>
      <div class="col-sm-8 text-left">

         <h1>Hello Layouts 2</h1>
      </div>
      <div class="col-sm-2 sidenav">
         <div class="well">
            <p>ADS</p>
         </div>
         <div class="well">
            <p>ADS</p>
         </div>
      </div>
   </div>
</div>

<?= $this->endSection('content'); ?>