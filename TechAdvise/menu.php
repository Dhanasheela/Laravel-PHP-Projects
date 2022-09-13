  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
          <h1 class="logo me-auto"><a href="index.php"><span><?php echo $data['name'] ?></span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
          <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                  <li><a href="index.php" class="active">Home</a></li>
                  <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="about.php">About Us</a></li>
                          <li><a href="team.php">Team</a></li>
                          <li><a href="testimonials.php">Testimonials</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="#">Deep Drop Down 1</a></li>
                                  <li><a href="#">Deep Drop Down 2</a></li>
                                  <li><a href="#">Deep Drop Down 3</a></li>
                                  <li><a href="#">Deep Drop Down 4</a></li>
                                  <li><a href="#">Deep Drop Down 5</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="portfolio.php">Portfolio</a></li>
                  <li><a href="pricing.php">Pricing</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="contact.php">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <div class="header-social-links d-flex">
              <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
          </div>
      </div>
  </header><!-- End Header -->