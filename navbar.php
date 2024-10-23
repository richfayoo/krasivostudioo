<?php
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html"><span>Krasivo Studio</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?php if($current_page == 'home.php') echo 'active'; ?>"><a href="index.php">Home</a></li>
          <li class="<?php if($current_page == 'about.php') echo 'active'; ?>"><a href="about.php">About Us</a></li>
          <li class="<?php if($current_page == 'portfolio.php') echo 'active'; ?>"><a href="portfolio.php">Portfolio</a></li>
          <li class="<?php if($current_page == 'team.php') echo 'active'; ?>"><a href="team.php">Team</a></li>
          <li class="<?php if($current_page == 'contact.php') echo 'active'; ?>"><a href="form.php">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->