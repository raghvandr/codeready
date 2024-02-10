
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="img/logo.png" alt="img/logo">
        <!-- <h1>Coders</h1>
        <span>Ready</span> -->
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          
          <li><a href="index.php#home" class="active">Home</a></li>
          
          <!-- <li><a href="?r=index.phphttp://localhost:8080?r=site/blog">Blog</a></li> -->
          <li><a href="?r=site/blog">Blog</a></li>

          <li class="dropdown has-dropdown"><a href="index.php#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="?r=site/development" target="_blank" >Web Development</a></li>
              <li><a href="?r=site/dsai" target="_blank">Data Science & AI </a></li>
              <li><a href="?r=site/cloud" target="_blank">Cloud Services</a></li>
            </ul>
          </li>

          <li><a href="index.php#team">Our Team</a></li>
          <li><a href="index.php#faq">FAQ</a></li>
          <li><a href="index.php#about">About Us</a></li>
          <li><a href="index.php#contact">Contact Us</a></li>

          <li class="dropdown has-dropdown"><a href="<?php echo Yii::$app->homeUrl . 'site/courses#courses'; ?>"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="?r=site/development" target="_blank" >Web Development</a></li>
              <li><a href="?r=site/dsai" target="_blank">Data Science & AI </a></li>
              <li><a href="?r=site/cloud" target="_blank">Cloud Services</a></li>
            </ul>
          </li>

        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="#about">Login</a>
				

    </div>
  </header><!-- End Header -->