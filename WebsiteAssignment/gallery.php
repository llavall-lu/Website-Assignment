<?php
  include_once 'header.php';
 ?>
 <header class="page-header header headerB container-fluid">
<div class="description">
  <?php
    if (isset($_SESSION["useruid"])) {
     echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
      }
   ?>
   <h1>Upload your photos here for everyone to see</h1>
   <form action="inc/upload-inc.php" method="post" enctype="multipart/form-data">
          Upload a File:
          <input type="file" name="file">
          <input type="submit" name="submit" value="Upload">
      </form>

</div>
</header>
<body>
  <div class="row">
  <div class="column">
    <?php
    // Include the database configuration file
    include 'inc/dbConfig.php';

    // Get images from the database
    $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageURL = 'uploads/'.$row["file_name"];
    ?>
        <img src="<?php echo $imageURL; ?>" alt="" />
    <?php }
    }else{ ?>
        <p>No image(s) found...</p>
    <?php } ?>
  </div>
</div>
</body>

 <?php
   include_once 'footer.php';
  ?>
