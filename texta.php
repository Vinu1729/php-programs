<?php 
  if (isset($_GET['t1'])) {
      echo "Welcome <br>" . htmlspecialchars($_GET['t1']) . "<br><br/>";
  }

  if (isset($_GET['gender'])) {
      echo "Gender: " . $_GET['gender'] . "<br>";
  } else {
      echo "No gender selected.<br>";
  }
?>
