
<?php
  include_once 'header.php';
 ?>

 <header class="page-header header headerB container-fluid">
   <div class="overlay"></div>
   <div class="description">
     <?php
       if (isset($_SESSION["useruid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
         }
      ?>
     <h1>Welcome to the Svane Gallery!</h1>
     <p>Here you will find lots of photos and pieces of art</p>
     <button class="btn btn-outline-secondary btn-lg" onclick="window.location.href='login.php'">Log in to find out more!</button> <!-- Button on the main page that will take you to the gallery of images -->
   </div>
 </header>
    <div class="container features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"> <!-- This is the grid view form that divides the page into 12 segments, col-lg-4 and col-md-4 show the images as taking up 4/12 (33%) of the page, where as on a small device it will be col-sm-12 which makes the images take up 12/12 (100% of the screen)-->
                <h3 class="feature-title">  </h3>
                <img src="css/images/slide01.jpg" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title"></h3>
                <img src="css/images/slide02.jpg" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title"></h3>
                <img src="css/images/slide03.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <?php
      include_once 'footer.php';
     ?>
