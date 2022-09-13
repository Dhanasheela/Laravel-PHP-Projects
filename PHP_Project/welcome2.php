<link rel="stylesheet" href="style.css" />
<?php
include_once('DBconection.php');
include_once('navbar.php');
include_once('action.php');
$user = [];

if (isset($_SESSION['user'])) {
    // $name = $_SESSION['name'];
    $user = $_SESSION['user'];
    //  header("Location: sign-in.php"); //redirect to the login page to secure the welcome page without login access.  
} else {
    $user = $_SESSION['user'];
}

$id = '';
$name = '';
$email = '';
$password = '';
$gender = '';
$language = [];
$city = '';
$address = '';
$image = '';
$lan     = ['C++', 'C#', 'JAVA', 'PHP'];
$status = "";


$row = $user;
$src1 = $row['image'];
if (empty($src1)) {

    $src1 = "default.png";
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <!--image-->
            <div class="image" style="margin:50% 30px 80px 90px;">
                <?php print("<img src='img/$src1' alt='photo'   width=100px height=100px style=border-radius:10px>"); ?>
                <div class="row" style="margin-left:30px; font-weight:bold;">
                    <?php echo $row["name"]; ?>
                    <i class="far fa-edit mb-5"></i>
                </div>

            </div>
        </div>
        <div class="col-sm-9">

            <!-- details -->
            <h3>Information</h3>
            <hr style="height:1px;border-width:1px;width:300px;margin-right:700px;color:black;background-color:black">
            <div class="row">
                <div class="col-sm-3">
                    <h3>Email</h3>
                    <p> <?php echo $row["email"]; ?></p>
                </div>
                <div class="col-sm-1">
                    <h3>Gender</h3>
                    <p> <?php echo $row["gender"]; ?></p>
                </div>
            </div>
            <hr style="height:1px;border-width:1px;width:300px;margin-right:700px;color:black;background-color:black;">
            <div class="row">
                <div class="col-sm-3">
                    <h3>Languages</h3>
                    <p><?php echo $row["language"]; ?></p>
                    <h3>Address</h3>
                    <p> <?php echo $row["city"]; ?></p>
                    <p> <?php echo $row["address"]; ?></p>
                </div>
            </div>
            <div class="row d-flex justify-content-start" style="margin-left:4px;">
                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
        </div>


    </div>
</div>
</div>