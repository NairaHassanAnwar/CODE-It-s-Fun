<?php
include 'dbconnection.php';
  $sql = "DELETE FROM users WHERE userid='{$_GET['userid']}'"  ;
  $stmt = $conn->query($sql);
  $stmt->execute();
  header('Location:admin.php');
?>
