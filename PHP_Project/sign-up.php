<!DOCTYPE html>
<html>

<head>
    <title>TechAdvise-SignUp</title>
    <link rel="stylesheet" href="style.css" />
    <?php
    include_once('navbar.php');
    include_once('DBconection.php');
    include_once('action.php');
    ?>
    <style>
        .warning {
            color: #c9172f;
        }
    </style>
</head>

<body>
    <?php
    $name = '';
    $email = '';
    $password = '';
    $gender = '';
    $language = [];
    $city = '';
    $address = '';
    $image = '';
    $email_error = "";
    // $lan     =['C++','C#','JAVA','PHP'];
    if (!empty($_POST)) {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $name       = $_POST['name'];
        $password   = $_POST['password'];
        $email      = $_POST['email'];
        $gender     = $_POST['gender'];
        $language   = $_POST['language'];
        $city       = $_POST['city'];
        $address    = $_POST['address'];
        $image      = $_POST['image'];
        $success     = '';
        //image
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if file was uploaded without errors
            if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["image"]["name"];
                $filetype = $_FILES["image"]["type"];
                $filesize = $_FILES["image"]["size"];

                // // Verify file extension
                // $ext = pathinfo($filename, PATHINFO_EXTENSION);
                // if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");


                // Verify MYME type of the file
                if (in_array($filetype, $allowed)) {
                    // Check whether file exists before uploading it
                    if (file_exists("img/" . $filename)) {
                        echo $filename . " is already exists.";
                    } else {
                        move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $filename);
                        echo "Your file was uploaded successfully.";
                    }
                } else {
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
            } else {
                echo "Error: " . $_FILES["image"]["error"];
            }
        }
        //image end
        $data = [
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'gender' => $gender,
            'language' => implode(',', $language),
            'city' => $city,
            'address' => $address,
            'image' => $image
        ];
        $email_query = (mysqli_query($con, "select * from emptb where email='$email'"));
        if (mysqli_num_rows($email_query) > 0) {
            $email_error = "Email already Exixts!..";
        } else {
            if (insert('emptb', $data)) {
                echo "<script>window.open('sign-in.php','_self')</script>";
            }
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign Up</h3>
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
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="text" value="">
                                </div>
                                <div class="form-group ">
                                    <input type="radio" name="gender" placeholder="Gender" value="female" <?php if ($gender == 'Female') { ?> checked <?php } ?>>Female
                                    <input type="radio" name="gender" value="male" <?php if ($gender == 'Male') { ?> checked <?php } ?>>Male
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="city" placeholder="City" class="form-control">
                                        <option value="">--select city--</option>
                                        <option value="hyderbad" <?php if ($city == 'hyderbad') { ?> selected <?php } ?>>Hyderbad</option>
                                        <option value="delhi" <?php if ($city == 'delhi') { ?> selected <?php } ?>>Delhi</option>
                                        <option value="wgl" <?php if ($city == 'wgl') { ?> selected <?php } ?>>Warangal</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-control">Language</label>
                                    <input type="checkbox" name="language[]" value="c" <?php if (in_array('c', $language)) { ?> checked <?php } ?>>C

                                    <input type="checkbox" name="language[]" value="java" <?php if (in_array('java', $language)) { ?> checked <?php } ?>>JAVA
                                    <input type="checkbox" name="language[]" value="python" <?php if (in_array('python', $language)) { ?> checked <?php } ?>>PYTHON
                                    <input type="checkbox" name="language[]" value=".net" <?php if (in_array('.net', $language)) { ?> checked <?php } ?>>.NET
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address" name="address" value=""></textarea>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="submit">

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- REGISTER -->
    <!-- <form method="post" action="#">
        <div class="container">
            <h2 class="h2">SignUp Form</h2>
            <div class=" row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" style="width:30%"><br>
                </div>
            </div>
            <div class="row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" style="width:30%"><br>

                </div>

            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" style="width:30%"><br>
                    <span class="warning"><?php if (!empty($email_error)) {
                                                echo $email_error;
                                            } ?></span>
                </div>
            </div>

            <div class=" row">
                <label for="image" class="col-sm-3 col-form-label">Image</label>
                <input type="file" name="image">
            </div>
            <div class="mb-3 row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <input type="radio" name="gender" value="female" <?php if ($gender == 'Female') { ?> checked <?php } ?>>Female
                    <input type="radio" name="gender" value="male" <?php if ($gender == 'Male') { ?> checked <?php } ?>>Male
                </div>
            </div>
            <div class="mb-3 row">
                <label for="city" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <select name="city" class="form-control" style="width:30%">
                        <option value="">--select city--</option>
                        <option value="hyderbad" <?php if ($city == 'hyderbad') { ?> selected <?php } ?>>Hyderbad</option>
                        <option value="delhi" <?php if ($city == 'delhi') { ?> selected <?php } ?>>Delhi</option>
                        <option value="wgl" <?php if ($city == 'wgl') { ?> selected <?php } ?>>Warangal</option>
                    </select><br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="language" class="col-sm-2 col-form-label">Languages:</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="language[]" value="c" <?php if (in_array('c', $language)) { ?> checked <?php } ?>>C

                    <input type="checkbox" name="language[]" value="java" <?php if (in_array('java', $language)) { ?> checked <?php } ?>>JAVA
                    <input type="checkbox" name="language[]" value="python" <?php if (in_array('python', $language)) { ?> checked <?php } ?>>PYTHON
                    <input type="checkbox" name="language[]" value=".net" <?php if (in_array('.net', $language)) { ?> checked <?php } ?>>.NET
                    <br>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="address" style="width:30%"><?php echo $address; ?></textarea><br>
                </div>
            </div>

            <button value="" name="submit" class="button">submit</button>
    </form> -->

</body>


<?php

?>

</html>