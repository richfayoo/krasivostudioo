<?php 
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php 
include "head.php";

$strSQL = "SELECT * FROM team";
$execStrSQL = mysqli_query($conn, $strSQL);
?>

<body>
    <?php include 'navbar.php'; ?>
        
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container mt-5">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our team is always here to help</p>
        </div>

        <div class="row justify-content-center">
        <?php while($team = mysqli_fetch_assoc($execStrSQL)){?>
          <div class="col-xl-3 col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="<?= $team["img"] ?>" style="width: 400px; height: 250px; object-fit: cover; object-position: center;" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?= $team["name"] ?></h4>
                  <span><?= $team["role"] ?></span>
                </div>
                <div class="social">
                  <a href="<?= $team["ig"] ?>"><i class="icofont-instagram"></i></a>
                  <a href="<?= $team["linkedIn"] ?>"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <?php }?>
          
        </div>
      </div>
    </section><!-- End Team Section -->

    
    <?php include 'footer.php'; ?>
    <?php include 'vendor.php'; ?>
</body>
</html>