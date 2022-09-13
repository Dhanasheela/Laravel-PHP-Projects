<!DOCTYPE html>
<html>

<head>
    <title>Sample form</title>
    <?php
    include_once('navbar.php');
    include_once('DBconection.php');
    //   include_once('ViewList.php');
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            $name = '';
            $email = '';
            $password = '';
            $gender = '';
            $language = [];
            $city = '';
            $address = '';
            $lan     = ['C++', 'C#', 'JAVA', 'PHP'];
            $con = mysqli_connect("localhost", "root", "", "sampledb");
            if (isset($_POST['submit'])) {
                // echo "<pre>";
                //     print_r($_POST);
                //     echo "</pre>";
                $name       = $_POST['name'];
                $password   = $_POST['password'];
                $email      = $_POST['email'];
                $gender     = $_POST['gender'];
                $language   = $_POST['language'];
                $city       = $_POST['city'];
                $address    = $_POST['address'];
                $chk = "";
                $lang = [];

                foreach ($language as $chk1) {
                    $lang[] = $lan[$chk1];
                }
                $chk = implode(',', $lang);
                $sql = "INSERT INTO   `emptb`  (`name`,`password`,`email`,`gender`,`language`,`city`,`address`)
        values('$name','$password','$email','$gender','$chk','$city','$address')";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    echo "success<br>";
                } else {
                    echo "not success";
                }
            }
            ?>
        </div>
        <form method="post">
            <h4>Registration form</h4>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <label for="name">name</label>

                        <input type="text" name="name" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="password">Password</label>

                        <input type="password" name="password" value="<?php echo $password; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="gender">Gender</label>
                        <input type="radio" name="gender" value="f" <?php
                                                                    if ($gender == 'f') {
                                                                    ?> checked <?php
                                                                            } ?>>Female
                        <input type="radio" name="gender" value="m" <?php
                                                                    if ($gender == 'm') {
                                                                    ?> checked <?php
                                                                            } ?>>Male

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="city">City</label>
                        <select name="city">
                            <option value="">--select city--</option>
                            <option value="hyderbad" <?php if ($city == 'hyderbad') { ?> selected <?php } ?>>Hyderbad</option>
                            <option value="delhi" <?php if ($city == 'delhi') { ?> selected <?php } ?>>Delhi</option>
                            <option value="wgl" <?php if ($city == 'wgl') { ?> selected <?php } ?>>Warangal</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="languages">Languages:</label>
                        <?php foreach ($lan as $k => $lan) {
                            echo $lan; ?>&nbsp;
                        <input type="checkbox" name="language[]" value="<?php echo $k ?>">
                        <?php if (in_array($k, $language)) { ?> checked <?php } ?>
                    <?php } ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <label for="address">Address</label>

                        <textarea name="address"><?php echo $address; ?></textarea>
                    </div>
                </div>
                <button value="submit" name="submit">submit</button>


            </div>

        </form>
    </div>

</body>

</html>