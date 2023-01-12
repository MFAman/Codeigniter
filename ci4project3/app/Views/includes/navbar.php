<?php $page = basename($_SERVER['PHP_SELF']); ?>
<div class="p-5 bg-primary text-white text-center">
   <h1>My First Bootstrap 5 Page</h1>
   <p>Resize this responsive page to see the effect!</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <div class="container-fluid">
      <ul class="navbar-nav">
         <li class="nav-item">
            <a class="nav-link <?= ($page == 'index.php') ? 'active' : ''; ?>" href="<?= base_url('/') ?>">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?= ($page == 'about') ? 'active' : ''; ?>" href="<?= base_url('/about') ?>">About</a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?= ($page == 'contact') ? 'active' : ''; ?>" href="<?= base_url('/contact') ?>">Contact</a>
         </li>
         <li class="nav-item">
            <a class="nav-link <?= ($page == 'students') ? 'active' : ''; ?>" href="<?= base_url('/student') ?>">Student List</a>
         </li>
         <div class="dropdown d-flex">
            <span class="text-white dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
               Student
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
               <li class="nav-item">
                  <a class="dropdown-item <?= ($page == 'students') ? 'active' : ''; ?>" href="/student">Student List</a>
               </li>
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
         </div>
      </ul>
   </div>
</nav>