<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>User Edit Form</h1>
   <form action="<?= site_url('/users/update'); ?>" method="post">
      <label>Name</label>
      <input type="text" name="u_name" value="<?php echo $user['name']; ?>" placeholder="Enter your Name"> <br>
      <label>Email</label>
      <input type="text" name="u_email" value="<?php echo $user['email']; ?>" placeholder="Enter your Email">
      <br>
      <input type="submit" name="update" value="UPDATE">
      <input type="hidden" name="u_id" value="<?php echo $user['id']; ?>">
   </form>
</body>

</html>