<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php
  include_once('header.php');
  include_once('DBCon.php');
  include_once('actions.php');
  $data = getDatabyId('index_info', 1);
  $id = 1;
  if (!empty($_GET) && isset($_GET['id']) && $_GET['id'] >= 1) {
    $id = $_GET['id'];
  }
  $portfolio = getDatabyId('cards', $id);
  $cards = getCardName();
  ?>
  <title>Portfolio - <?php echo $data['name']; ?></title>
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
          <h2>Portfolio</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfolio</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach ($cards as $card) { ?>
                <li data-filter=".filter-<?php echo strtolower($card['name']) ?>"><?php echo $card['name'] ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
          <?php foreach ($cards as $card) {
            $cardData = getCardData($card['name']);
            foreach ($cardData as $key => $Card) { ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo strtolower($Card['name']); ?>">
                <img src="assets/img/portfolio/<?php echo $Card['image'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $Card['title'] ?></h4>
                  <p><?php echo $Card['name'] ?></p>
                  <a href="assets/img/portfolio/<?php echo $Card['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php?id=<?php echo $Card['id'] ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>
</body>

</html>