<?php

session_start();

require_once 'db.php';
require_once 'component/card.php';

$db = new CreateDb();

//Fitur Logout
if( isset($_POST["btn"]) ) {
  
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($db->con, "SELECT * FROM user_tb WHERE username = '$username'");
  
  if( mysqli_num_rows($result) === 1 ) {
    $row = mysqli_fetch_assoc($result);
    
    //cek kesamaan password pada inputan dan database menggunakan built-in function password_verify()
    if( password_verify($password, $row["password"]) ) {
      $_SESSION["login"] = true;
      echo "<script>
              alert('Welcome $username');
              document.location.href = 'index.php';
            </script>";
      exit;
    }
  }
 $error = false ;
}

if( isset($error) ) {
  echo "<script>
          alert('username or password incorrect');
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop | Sign In</title>
  <link rel="stylesheet" href="css/sign-up.css">
</head>
<body>
  
  <?php signIn() ?>

</body>
</html>