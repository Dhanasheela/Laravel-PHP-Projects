<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php
  include_once('header.php');
  include_once('DBCon.php');
  include_once('actions.php');
  $id = 1;
  if (!empty($_GET) && isset($_GET['id']) && $_GET['id'] >= 1) {
    $id = $_GET['id'];
  }
  $data = getDatabyId('index_info', 1);
  $portfolioData = getDatabyId('portfolio_details', $id);
  $image = getDatabyTable('portfolio_image', $id);
  ?>
  <title>Portfolio Details - <?php echo $data['name']; ?></title>
</head>

<body>
  <!-- ======= Header ======= -->
  <?php include_once('menu.php') ?>
  <!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <?php $src1 = $portfolioData['image']; ?>
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="col-lg-8">
                  <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                      <div class="swiper-slide">
                        <img src="assets/img/portfolio/<?php echo $src1 ?>" alt="">
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?php print_r($portfolioData['title']); ?></h3>
              <ul>
                <li><strong>Category</strong>: <?php print_r($portfolioData['category']); ?></li>
                <li><strong>Client</strong>: <?php print_r($portfolioData['client']); ?></li>
                <li><strong>Project date</strong>: <?php print_r(date('d-M Y', strtotime($portfolioData['date']))); ?></li>
                <li><strong>Project URL</strong>: <a href="#"><?php print_r($portfolioData['project_url']);  ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?php echo $portfolioData['project_detail'] ?></h2>
              <p>
                <?php echo $portfolioData['content'] ?> </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section -->
    <!-- End Portfolio Details Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>
</body>

</html>