<link rel="stylesheet" href="style.css" />
<?php
include_once('navbar.php');
include('DBconection.php');
include_once('action.php');
?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>TechAdvise=SignIn</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="name" name="name" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login">

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['login'])) {
    // _die($_POST);
    session_start(); //session starts here
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql_query = "select * from emptb WHERE name='$name' AND password='$password'";
    $run = mysqli_query($con, $sql_query);

    if (mysqli_num_rows($run)) {

        $_SESSION['user'] = mysqli_fetch_assoc($run);
        // echo "<pre>";
        // print_r($_SESSION);
        // die;
        echo "<script>window.open('welcome2.php','_self')</script>";
        $_SESSION['name'] = $name; //here session is used and value of $user_email store in $_SESSION.  
        // header("welcome2.php");
    } else {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}

?>