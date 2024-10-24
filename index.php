<?php 
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<?php 
include "head.php";
?>

<body>

<?php include 'navbar.php'; ?>
<?php 
        $strSQL = "SELECT * FROM home";
        $execStrSQL = mysqli_query($conn, $strSQL);
        $home = mysqli_fetch_assoc($execStrSQL); 
        ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1><?= $home["headline"] ?></h1>
          <h2><?= $home["desc"] ?></h2>
          <a href="form.php" class="btn-get-started scrollto">Get Started</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= $home["img"] ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  

  <main id="main">

    

  </main><!-- End #main -->

  <?php
  include "footer.php"
  include "vendor.php"
  ?>

</body>

</html> 
