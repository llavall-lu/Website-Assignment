<?php
  include_once 'header.php';
 ?>

<section>
  <div class="header container-fluid col-lg-2 col-md-2 col-sm-12 center box">
<h2 class="mt">Sign up</h2>
  <form action="inc/signup-inc.php" method="post">
  <input class="logS" type="text" name="name" placeholder="Full name...">
  <input class="logS"class="logS" type="text" name="email" placeholder="Email...">
  <input class="logS" type="text" name="uid" placeholder="Username...">
  <input class="logS" type="password" name="pwd" placeholder="Password...">
  <input class="logS" type="password" name="pwdrepeat" placeholder="Repeat Password...">
  <button class="logS" type="submit" name="submit">Sign up</button>
</form>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Make sure all fields are filled in!</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a valid username!</p>";
    }
    else if ($_GET["error"] == "invalidemail") {
      echo "<p>Choose a valid email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Password mismatch!</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
      echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p>Welcome, you have signed up!</p>";
    }
  }
 ?>
 </div>
</section>



 <?php
   include_once 'footer.php';
  ?>
