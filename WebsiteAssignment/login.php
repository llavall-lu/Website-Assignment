<?php
  include_once 'header.php';
 ?>

<section>
  <div class="header container-fluid col-lg-2 col-md-2 col-sm-12 center box">
<h2 class="mt">Log in</h2>
  <form action="inc/login-inc.php" method="post">
  <input class="logS" type="text" name="uid" placeholder="Username/Email">
  <input class="logS" type="password" name="pwd" placeholder="Password...">
  <button type="submit" name="submit">Log in</button>
</form>

<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo "<p>Make sure all fields are filled in!</p>";
  }
  else if ($_GET["error"] == "wronglogin") {
    echo "<p>Incorrect login!</p>";
  }
}
?>
</div>
</section>

 <?php
   include_once 'footer.php';
  ?>
