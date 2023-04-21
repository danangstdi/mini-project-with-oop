<?php

session_start();

if(isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

require_once 'db.php';
require_once 'component/card.php';

$db = new CreateDb();

if( isset($_POST["btn"]) ) {

  if( $db->regist($_POST) > 0 ) {
    echo "<script>
            alert('Your registration has been successful');
            document.location.href = 'sign-in.php';
          </script>";
  }else {
    echo mysqli_error($db->con);
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop | Sign Up</title>
  <link rel="stylesheet" href="css/sign-up.css">
</head>
<body>
  
  <?php signUp() ?>

</body>
</html>