<?php
  session_start();
  if ($_SESSION['user_type']!='3') header('Location: http://'. $_SERVER['HTTP_HOST'] . '/bbsqli/connexion.php');
?>
