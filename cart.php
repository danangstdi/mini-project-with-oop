<?php

session_start();

if (!isset($_SESSION["login"])) {
  echo "<script>
          var confirm = confirm('You are not logged in, please login to continue');
          if (confirm == true) {
            document.location.href ='sign-in.php';
          }else {
            document.location.href = 'index.php';
          }
        </script>";
  exit;
}

require_once 'db.php';
require_once 'component/card.php';
require_once 'component/header.php';

$db = new CreateDb();
$rows = $db->getData($_POST);

//fitur delete
if (isset($_POST['delete'])){
  if ($_GET['action'] == 'delete'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>
                      alert('Product has been removed')
                      document.location.href = 'cart.php'
                    </script>";
          }
      }
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Project | Cart</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/cart.css">
</head>

<body>

  <?php cartHeader(); ?>

  <div class="container">
    
  <?php

  $price = 0;
  $percent = 0;
  $discount = 0;
  $total = 0;

      if (isset($_SESSION['cart'])){
          $productid = array_column($_SESSION['cart'], 'product_id');

          while ($row = mysqli_fetch_assoc($rows)){
              foreach ($productid as $id){
                  if ($row['id'] == $id){
                    cart($row['id'], $row['product_name'], $row['product_price'], $row['product_image']);
                    $price = $price + (int)$row['product_price'];
                    $discount = $price * ($percent / 100);
                    $total = $price - $discount;
                  }
                  if ( $price > 50 && $price < 100) {
                    $percent = 5;
                  }elseif ($price > 100 && $price < 300) {
                    $percent = 7;
                  }elseif ($price > 300 && $price < 600) {
                    $percent = 10;
                  }elseif ($price > 600 ) {
                    $percent = 15;
                  }else {
                    $percent = 0;
                  }
                  
              }
          }
      }else{
          echo "<h3>Cart is Empty</h3>";
      }

  ?>

  </div>
  <div class="result">
    <p>PRICE DETAILS</p>
    <hr><br>
    <div class="label">
      <label>Price</label>
      <div class="total">$<?=$price?></div>
    </div><br>
    <div class="label">
      <label>Discount</label>
      <div class="discount"><?= $percent ?>% (-$<?= $discount ?>)</div>
    </div><br>
    <div class="label">
      <label>Delivery Charges</label>
      <div class="delivery">Free</div>
    </div><br>
    <hr><br>
    <div class="label">
      <label>Amount Payable</label>
      <div class="amount">$<?= $total ?></div>
    </div><br>
    <button class="pay">Pay</button>
  </div>

  <div class="responsive"></div>

  <script src="script.js"></script>
</body>

</html>
