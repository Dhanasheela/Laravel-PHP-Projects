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
  $comments = getDatabyTable('blog_comment', $id);
  $blogData = getDatabyId('blog', $id);
  $blogCategories = getBlogCategories();
  $blogRecentposts = getBlogRecentposts();
  $blogTags = getBlogTags()
  ?>
  <title>Blog Single - <?php echo $data['name']; ?></title>

<body>
  <?php
  $name = '';
  $email = '';
  $website = '';
  $content = '';
  $date = '';
  $image = '';
  if (!empty($_POST)) {
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $website     = $_POST['website'];
    $content     = $_POST['content'];
    $date        =  $_POST['date'];
    $image      = $_POST['image'];
    $row = [
      'name' => $name,
      'email' => $email,
      'website' => $website,
      'content' => $content,
      'image'  => $image,
      'date'  => $date,
    ];
    insert('blog_comment', $row);
  }
  ?>
  <!-- ======= Header ======= -->
  <?php include_once('menu.php') ?>
  <!-- End Header -->
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Single</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li>Blog Single</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">
              <div class="entry-img">
                <br>
                <img src="assets/img/blog/<?php print_r($blogData['image']) ?>" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="blog-single.php?<?php echo $blogData['id'] ?>"><?php echo $blogData['title'] ?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php?<?php echo $blogData['id'] ?>"><?php echo $blogData['name'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php?<?php echo $blogData['id'] ?>"><time datetime="2020-01-01"><?php echo $blogData['date'] ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php?<?php echo $blogData['id'] ?>"> <?php echo $blogData['comments'] ?></a></li>
                </ul>
              </div>
              <div class="entry-content">
                <blockquote>
                  <p>
                    <?php echo $blogData['content'] ?>
                  </p>
              </div>
              </blockquote>
              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>
            </article>
            <!-- End blog entry -->
            <div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End blog author bio -->
            <div class="blog-comments">
              <h4 class="comments-count"><?php echo count($comments); ?> Comments</h4>
              <?php foreach ($comments as $comment) { ?>
                <div id="comment-1" class="comment">
                  <div class="d-flex">
                    <?php $src1 = $comment['image'];
                    if (empty($src1)) {
                      $src1 = "default.png";
                    } ?>
                    <div class="comment-img"><img src="assets/img/blog/<?php echo $src1 ?>" alt=""></div>
                    <div>
                      <h5><a href=""><?php echo $comment['name'] ?></a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01"><?php echo $comment['date'] ?></time>
                      <p>
                        <?php echo $comment['content'] ?> </p>
                    </div>
                  </div>
                </div><!-- End comment #1 -->
              <?php } ?>
              <div class="reply-form">
                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="content" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input type="file" name="image" class="form-control" placeholder="Your image*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input type="date" name="date" class="form-control" placeholder=date*">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </form>
              </div>
            </div><!-- End blog comments -->
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php foreach ($blogCategories as $key => $category) { ?>
                    <li><a href="#"><?php echo $category['name'] ?> <span>(<?php echo (int)$category['count'] ?>)</span></a></li>
                  <?php } ?>
                </ul>
              </div><!-- End sidebar categories-->
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php foreach ($blogRecentposts as $key => $recents) { ?>
                  <div class="post-item clearfix">
                    <img src="assets/img/blog/<?php echo $recents['image'] ?>" alt="">
                    <h4><a href="blog-single.php?id=<?php echo $recents['id'] ?>"><?php echo $recents['title'] ?></a></h4>
                    <time datetime="2020-01-01"><?php echo   $recents['date'] ?></time>
                  </div>
                <?php } ?>
              </div><!-- End sidebar recent posts-->
              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <?php foreach ($blogTags as $key => $tags) { ?>
                    <li><a href="#"><?php echo $tags['name'] ?></a></li>
                  <?php } ?>
                </ul>
              </div><!-- End sidebar tags-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Single Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>
</body>

</html>