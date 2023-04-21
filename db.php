<?php 

class CreateDb {
  public $con;
  public function __construct(
    $server = "localhost",
    $username = "root",
    $password = "",
    $dbName = "miniproject_db",
  ) {
    $this->con = mysqli_connect($server, $username, $password, $dbName);

    if (!$this->con) {
      die("Connection failed :" . mysqli_connect_error());
    }
  }

  public function getData($sql) {
    $sql = "SELECT * FROM product_tb";

    $result = mysqli_query($this->con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      return $result;
    }
  }

 public function regist($sql) {

  $yourName = stripcslashes($sql["your-name"]);
  $username = stripcslashes($sql["username"]);
  $password = mysqli_real_escape_string($this->con, $sql["password"]);
  $passwordConfirm = mysqli_real_escape_string($this->con, $sql["password-confirm"]);

  $query = "SELECT username FROM user_tb WHERE username = '$username'";

  $result = mysqli_query($this->con, $query);
  if ( mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('Username already taken!');
          </script>";
    return false;
  }

  if ( $password !== $passwordConfirm ) {  
    echo "<script>
            alert('Password not matching');
          </script>";
    return false;
  }

  $hash = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($this->con, "INSERT INTO user_tb 
              VALUES('', '$yourName', '$username', '$hash'
              )"
            );

  return mysqli_affected_rows($this->con);
  
  }

  
  public function overview($sql) {

    $result = mysqli_query($this->con, $sql);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result))
    {
      $rows[] = $row;
    }
    return $rows;
  }
}






