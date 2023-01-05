<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
   <?php
   //echo "<pre>";
   //print_r($products);
   // echo "<hr>";
   // print_r($pager);
   ?>

   <div class="container">
      <table class="table table-striped">
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
         </tr>
         <?php foreach ($products as $product) : ?>
            <tr>
               <td><?= $product['id']; ?></td>
               <td><?= $product['product_name']; ?></td>
               <td><?= $product['product_details']; ?></td>
               <td><?= $product['product_price']; ?></td>
            </tr>
         <?php endforeach; ?>
      </table>

      <div class="pagination justify-content-center">
         <?php if ($pager) : ?>
            <?php $pagi_path = 'index.php/list'; ?>
            <?php $pager->setPath($pagi_path); ?>
            <?= $pager->links(); ?>
         <?php endif; ?>
      </div>

   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>