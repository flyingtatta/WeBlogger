<?php
  ob_start();
  //SAFER WAY TO DO IT
  $db['db_host'] = "localhost";
  $db['db_user'] = "root";
  $db['db_pass'] = "";
  $db['db_name'] = "weblogger";

  foreach($db as $key => $value){
    define(strtoupper($key), $value);
  }

  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if (!$connection) {
    die('Database Error: '.mysqli_error($connection));
  }
?>
