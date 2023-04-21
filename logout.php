<?php

//Dari tombol logout diarahkan ke halaman ini dan menjalankan session_destroy()
//$_SESSION = [] dan session_unset() hanya untuk berjaga-jaga apabila session_destroy() tidak berjalan sempurna
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: index.php");