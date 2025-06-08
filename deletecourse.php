<?php
include ('dbconnection.php');
  $sql = "DELETE FROM course WHERE courseid='{$_GET['courseid']}'"  ;
  $stmt = $conn->query($sql);
  $stmt->execute();
  header('Location:admincourse.php');
?>
