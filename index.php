<?php

session_start();

require_once 'db.php';
require_once 'component/card.php';
require_once 'component/header.php';

$db = new CreateDb();
$rows = $db->getData($_POST);

//Fitur menambahkan produk kedalam keranjang belanja
if (isset($_POST['add'])){

  if(isset($_SESSION['cart'])) {

      $item_array_id = array_column($_SESSION['cart'], "product_id");

      //Cek apakah produk sudah ada didalam Cart
      if(in_array($_POST['product_id'], $item_array_id)){
          echo "<script>alert('Product is already added in the cart')</script>";
          echo "<script>window.location = 'index.php'</script>";
      }else{

          $count = count($_SESSION['cart']);
          $item_array = array(
              'product_id' => $_POST['product_id']
          );

          $_SESSION['cart'][$count] = $item_array;
      }

  }else{

      $item_array = array(
              'product_id' => $_POST['product_id']
      );

      $_SESSION['cart'][0] = $item_array;
      print_r($_SESSION['cart']);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Project</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
      
  <?php indexHeader(); ?>

  <div class="container">

  <?php
      while ($row = mysqli_fetch_assoc($rows)){
      card($row['id'], $row['product_name'], $row['product_price'], $row['product_image']);
     }
  ?>

</div>

  <script src="script.js"></script>
</body>
</html>
