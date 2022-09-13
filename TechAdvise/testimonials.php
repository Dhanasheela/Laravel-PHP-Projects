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
  $test = getDatabyTable('testimonials', 1);
  ?>
  <title>Testimonials - <?php echo $data['name'] ?></title>

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
          <h2>Testimonials</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Testimonials</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="row">
          <?php foreach ($test as $key => $tests) { ?>
            <div class="col-lg-6" data-aos="fade-up">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/<?php echo $tests['image'] ?>" class="testimonial-img" alt="">
                <h3><?php echo $tests['name'] ?></h3>
                <h4> <?php echo $tests['role'] ?> &amp;</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $tests['content'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>

</body>

</html>