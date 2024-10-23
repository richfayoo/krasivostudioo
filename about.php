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
        $strSQL = "SELECT * FROM about";
        $strSQL2 = "SELECT * FROM aboutdesc";
        $strSQL3 = "SELECT * FROM services";
        $execStrSQL = mysqli_query($conn, $strSQL);
        $execStrSQL2 = mysqli_query($conn, $strSQL2);
        $execStrSQL3 = mysqli_query($conn, $strSQL3);  
        $about = mysqli_fetch_assoc($execStrSQL); 

    ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container mt-5">
          
  
          <div class="row justify-content-between">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
              <img src="<?= $about["image"] ?>" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0">
              <h3 data-aos="fade-up"><?= $about["headline"] ?></h3>
              <p data-aos="fade-up" data-aos-delay="100">
              <?= $about["desc"] ?>
              </p>

              <div class="row">

              <?php  while($aboutdesc = mysqli_fetch_assoc($execStrSQL2)){?>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <i class="<?= $aboutdesc["icon"]?>"></i>
                  <h4><?= $aboutdesc["head"]?></h4>
                  <p><?= $aboutdesc["desc"]?></p>
                </div>
                <?php }?>

              </div>

            </div>
          </div>
  
        </div>
      </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container">
          
                  <div class="section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Check out the great services we offer</p>
                  </div>
          
                  <div class="row justify-content-center">
                    <?php while($services = mysqli_fetch_assoc($execStrSQL3)){?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                        <div class="icon"><i class="<?= $services["icon"] ?>"></i></div>
                        <h4 class="title"><a href=""><?= $services["head"] ?></a></h4>
                        <p class="description"><?= $services["desc"] ?></p>
                      </div>
                    </div>
                    <?php } ?>

          
                  </div>
          
                </div>
              </section><!-- End Services Section -->

              <?php include 'footer.php'; ?>
              <?php include 'vendor.php'; ?>
</body>
</html>