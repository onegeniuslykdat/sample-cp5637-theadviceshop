<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
  <aside id="login">
    <a href="calc.php"><span class="glyphicon glyphicon-plus"></span>&nbsp;<span class="glyphicon glyphicon-asterisk"></span> Quick Calculator</a>
    <a href="index.php">
      <?php
      if (isset($_SESSION['username'])) {
        echo "<h3>Already Logged In</h3>";
      } else {
        echo "<a href='loginpage.php'>
    <h3>Go to Login</h3>
  </a>";
      }
      ?>
  </aside>
  <h1><span class="glyphicon glyphicon-ok"></span> The Advice Shop</h1>
  </a>
</header>