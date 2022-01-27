<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Index Page - Gallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes the page scale so that nothing goes off the side -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- Link to bootstrap (Api) -->
        <link rel="stylesheet" type="text/css" href="Css/styleSheet.css"> <!-- Link to style sheet (local) -->
	</head>

	<body>
    <nav class="navbar navbar-expand-md"> <!-- Navbar -->
    	<a class="navbar-brand" href="IndexM.php"><img class="img-responsive2" src='css/images/logo.png' style="width:40px;"></a>  <!-- Logo within the navbar -->
    	<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="main-navigation"> <!-- Makes the navbar collapse when the screen of the device is too small to contain it -->
    		<ul class="navbar-nav">
    			<li class="nav-item">
    				<a class="nav-link" href="IndexM.php">Home</a>
    			</li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li class='nav-item'>
                  <a class='nav-link' href='gallery.php'>Gallery</a>
                </li>";
              echo "<li class='nav-item'>
                  <a class='nav-link' href='inc/logout-inc.php'>Log out</a>
                </li>";
              }
              else {
              echo "<li class='nav-item'>
                  <a class='nav-link' href='signup.php'>Sign up</a>
                </li>";
              echo "<li class='nav-item'>
                  <a class='nav-link' href='login.php'>Log in</a>
                </li>";
              }
           ?>
    		</ul>
    	</div>
    </nav>
