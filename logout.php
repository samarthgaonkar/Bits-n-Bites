<?php

session_start();


if($_SESSION['usr_nam']){
  session_destroy();

  echo "<script>window.location.href='login.php';</script>";
}
?>