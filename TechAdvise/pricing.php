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
  $price = getDatabyTable('pricing');
  $faq = getDatabyTable('faq');
  ?>
  <title>Pricing - Company Bootstrap Template</title>
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
          <h2>Pricing</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <?php foreach ($price as $key => $prices) { ?>
            <div class="col-lg-3 col-md-6">
              <div class="box">
                <h3><?php echo $prices['title'] ?></h3>
                <h4><sup>$</sup><?php echo $prices['price'] ?><span> / <?php echo $prices['month'] ?></span></h4>
                <ul>
                  <li><?php echo $prices['name'] ?></li>
                  <li><?php echo $prices['name1'] ?></li>
                  <li><?php echo $prices['name2'] ?></li>
                  <li class="na"><?php echo $prices['name3'] ?></li>
                  <li class="na"><?php echo $prices['name4'] ?></li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Pricing Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="faq-list">
          <ul>
            <?php foreach ($faq as $key => $value) { ?>
              <li data-aos="fade-up" data-aos-delay="<?php print_r($value['delay']); ?>">
                <i class="bx <?php print_r($value['icon']); ?>"></i><a data-bs-toggle="collapse" class="<?php print_r($value['class']); ?>" data-bs-target="#<?php print_r($value['target']); ?>"><?php print_r($value['question']); ?>
                  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="<?php print_r($value['target']); ?>" class="<?php print_r($value['shown']); ?>" data-bs-parent=".faq-list">
                  <p><?php print_r($value['answer']); ?></p>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>
</body>

</html>