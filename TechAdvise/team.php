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
  $teams = getDatabyrole('user', 'roles', 1);
  ?>
  <title>Team - Company Bootstrap Template</title>
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
          <h2>Team</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Team</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
          <?php
          foreach ($teams as $key => $team) {
          ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="assets/img/team/<?php echo $team['image'] ?>" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?php echo $team['name'] ?></h4>
                  <span><?php echo $team['role_name'] ?></span>
                </div>
              </div>
            </div>
          <?php  } ?>
        </div>
      </div>
    </section><!-- End Our Team Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>
</body>

</html>