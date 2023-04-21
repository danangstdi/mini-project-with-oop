<?php 

session_start();

require 'db.php';
require_once 'component/card.php';
require_once 'component/header.php';

$id = $_GET["id"];
$db = new CreateDb();
$row = $db->overview("SELECT * FROM product_tb WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Project | Iphone 14 Pro Max</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/overview.css">
</head>
<body>

  <?php overviewHeader() ?>

  <div class="container">
    <?php
      overview($row['id'], $row['product_name'], $row['product_price'], $row['product_image']);
    ?>
  </div>

  <script src="script.js"></script>
</body>
</html>