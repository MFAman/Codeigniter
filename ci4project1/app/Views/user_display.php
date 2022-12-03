<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php print_r($myusers);
   ?>
   <h1>User Data</h1>
   <table border="1px">
      <tr>
         <th>ID</th>
         <th>Name</th>
         <th>Emai</th>
      </tr>
      <?php foreach ($myusers as $user) : ?>
         <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
         </tr>
      <?php endforeach;
      ?>
   </table>

</body>

</html>