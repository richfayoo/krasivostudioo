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
    $strSQL = "SELECT * FROM portfolio";
    $execStrSQL = mysqli_query($conn, $strSQL);
    // $portfolio = mysqli_fetch_assoc($execStrSQL);
    ?>
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container mt-5">
      
              <div class="section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Check out our beautifull portfolio</p>
              </div>
      
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-logo">Logo</li>
                    <li data-filter=".filter-web">Web</li>
                    <li data-filter=".filter-photo">Photo Product</li>
                  </ul>
                </div>
              </div>
      
              <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      
              <?php while($portfolio = mysqli_fetch_assoc($execStrSQL)){ ?>
                <div class="col-lg-4 col-md-6 portfolio-item <?= $portfolio["filtertype"] ?>">
                  <div class="portfolio-wrap">
                    <img src="<?= $portfolio["img"] ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4><?= $portfolio["product"] ?></h4>
                      <p><?= $portfolio["desc"] ?></p>
                    </div>
                  </div>
                </div>
                <?php } ?>
      
                </div>
      
              </div>
      
            </div>
          </section><!-- End Portfolio Section -->

    <?php include 'footer.php'; ?>
    <?php include 'vendor.php'; ?>

      


</body>
</html>