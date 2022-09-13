<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include_once('DBCon.php');
  include_once('actions.php');
  include_once('header.php');
  $data = getDatabyId('index_info', 1);
  $id = 1;
  if (!empty($_GET) && isset($_GET['id']) && $_GET['id'] >= 1) {
    $id = $_GET['id'];
  }
  $categories = getDatabyTable('blog_categories', $id);
  $recent = getDatabyTable('blog_recentposts', $id);
  $tag = getDatabyTable('tags', $id);
  $blog =  getDatabyTable('blog', $id);
  $blogCategories = getBlogCategories();
  ?>
  <title>Blog - <?php echo $data['name'] ?></title>
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
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry">
              <?php foreach ($blog as $key => $blogs) { ?>
                <div class="entry-img">
                  <img src="assets/img/blog/<?php echo $blogs['image'] ?>" alt="" class="img-fluid">
                </div>
                <h2 class="entry-title">
                  <a href="blog-single.php?id=<?php echo $blogs['id'] ?>"><?php echo $blogs['title'] ?></a>
                </h2>
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php?id=<?php echo $blogs['id'] ?>"><?php echo $blogs['name'] ?></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php?id=<?php echo $blogs['id'] ?>"><time datetime="2020-01-01"><?php echo $blogs['date'] ?></time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php?id=<?php echo $blogs['id'] ?>">12 <?php echo $blogs['comments'] ?></a></li>
                  </ul>
                </div>
                <div class="entry-content">
                  <p> <?php echo $blogs['content'] ?> </p>
                  <div class="read-more">
                    <a href="blog-single.php?id=<?php echo $blogs['id'] ?>">Read More</a>
                  </div>
                </div>
              <?php } ?>
            </article>
            <!-- End blog entry -->
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>
              <!-- End sidebar search formn-->
              <h3 class="sidebar-title">Categories</h3>
              <?php // foreach ($categories as $key => $category) { 
              ?>
              <div class="sidebar-item categories">
                <ul>
                  <?php foreach ($blogCategories as $key => $category) {
                  ?>
                    <li><a href="3>">
                        <?php echo $category['name'] ?>
                        <span>(<?php echo (int)$category['count'] ?>)</span></a></li>
                  <?php }
                  ?>

                </ul>
              </div><!-- End sidebar categories-->
              <?php //} 
              ?>
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php foreach ($recent as $recents) { ?>
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
                  <?php foreach ($tag as $key => $tags) { ?>
                    <li><a href="#"><?php echo $tags['name'] ?></a></li>
                  <?php } ?>
                </ul>
              </div><!-- End sidebar tags-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include_once('footer.php'); ?>
</body>
<!-- 
select blog.*,blog_comment.image as image,blog_comment.name as name from blog left join blog_comment on blog_comment.id=blog.comment_id; -->

</html>