<link rel="icon" type="image/x-icon" href="img/logo.jpg">
<title>TechAdvise </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />
<style>
  /* .logout_btn {
    background-color: #474f56f5;
    border-radius: 19px;
    margin: 4px;
  } */
  /* welcome.php */
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">
        <img src="img/logo.jpg" alt="" width="30px" height="34px" style="border-radius:10px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="user-list.php">UserList</a></li>
      <li><a href="view-list.php">ViewList</a></li>
      <li><a href="sign-up.php">SignUp</a></li>
      <li><a href="sign-in.php">SignIn</a></li>
      <?php
      $image = '';
      // $row = $user;
      // $src1 = $row['image'];
      $user = [];
      if (empty($src1)) {

        $src1 = "default.png";
      }
      session_start();

      if (!empty($_SESSION) && isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        // echo "<pre>";
        // print_r($user);
        // die;
        $user = $_SESSION['user'];

        echo  "<li>" . print ("<img src='img/$src1' alt='photo'   width=30px height=30px style=margin-left:55px;border-radius:10px>") . "</li>";
        echo "<li style=margin-left:750px;color:white;> " . "HI" . " " . $_SESSION['name'] . "</li>";
        echo "</ul>";
        echo '<p style=text-align:right;color:white;border:1px solid red>
                <a href="sign-out.php" style=color:white;text-decoration:none>SignOut</a>
              </p>';
        //<i class='fa fa-sign-out' style='color: white'></i>
      }
      ?>

  </div>
</nav>
<?php

?>