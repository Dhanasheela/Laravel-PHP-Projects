<link rel="stylesheet" href="style.css" />
<?php
include_once('navbar.php');
include_once('DBconection.php');
include_once('action.php');
?>
<title>TechAdvise-Update</title>
<div class="form">
  <?php
  //$con = mysqli_connect("localhost","root","","sampledb");
  $id = $_GET['id'];
  $query = "SELECT * from emptb where id='" . $id . "'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  _print($row);

  ?>
  <?php
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
  if (!empty($row)) {
    $language = explode(",", $row['language']);
  }
  $email_query = (mysqli_query($con, "select * from emptb where email='$email'"));
  if (mysqli_num_rows($email_query) > 0) {
    $email_error = "Email already Exits!..";
  } else if (isset($_POST['update']) && $_POST['update'] == 1) {
    $id = $_POST['id'];
    $name       = $_POST['name'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    $gender     = $_POST['gender'];
    $language   = $_POST['language'];
    $city       = $_POST['city'];
    $address    = $_POST['address'];
    $image      = $_POST['image'];

    $row = implode(",", $language);
    $update = "UPDATE emptb SET name='" . $name . "',password='" . $password . "',email='" . $email . "',gender='" . $gender . "',language='" . implode(',', $language) . "',city='" . $city . "',address='" . $address . "',image='" . $image . "' where id= '" . $id . "'";
    mysqli_query($con, $update);
    $status = "Record Updated Successfully. </br></br>
        <a href='view-list.php'>View Updated Record</a>";
    echo '<p style="color:#FF0000;">' . $status . '</p>';
  } else {
  ?>
</div>
<div>
  <form method="post">
    <div class="container">
      <!-- <form method="post"> -->
      <h2 class="h2">Registration form</h2>

      <div class=" row">
        <input type="hidden" name="update" value="1" />
        <input name="id" type="hidden" value="<?php echo $row['id']; ?>" /><br>
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" style="width:30%"><br>
        </div>
      </div>
      <div class="row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>" style="width:30%"><br>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" style="width:30%"><br>
        </div>
      </div>
      <div class=" row">
        <label for="image" class="col-sm-3 col-form-label">Image</label>
        <input type="file" name="image">
      </div>
      <div class="mb-3 row">
        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
        <div class="col-sm-10">
          <input type="radio" name="gender" checked=<?php if ($row['gender'] = "Female") {
                                                      echo "true";
                                                    } ?> value="Female">Female
          <input type="radio" name="gender" checked=<?php if ($row['gender'] = "Male") {
                                                      echo "true";
                                                    } ?> value="Male"> Male </p>
        </div>
        <div class="mb-3 row">
          <label for="city" class="col-sm-2 col-form-label">City</label>
          <div class="col-sm-10">
            <select name="city" class="form-control" style="width:30%">
              <option value="">--select city--</option>
              <option value="hyderbad" <?php if ($row['city'] == 'hyderbad') { ?> selected <?php } ?>>Hyderbad</option>
              <option value="delhi" <?php if ($row['city'] == 'delhi') { ?> selected <?php } ?>>Delhi</option>
              <option value="wgl" <?php if ($row['city'] == 'wgl') { ?> selected <?php } ?>>Warangal</option>
            </select><br>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="language" class="col-sm-2 col-form-label">Languages:</label>
          <div class="col-sm-10">
            <input type="checkbox" name="language[]" value="c" <?php if (in_array('c', $language)) { ?> checked <?php } ?>>C
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
            <textarea class="form-control" name="address" style="width:30%"><?php echo $row['address'];  ?></textarea><br>
          </div>
        </div>
        <button value="" class="button" name="submit" value="update">submit</button>
  </form>

  <!--  //update -->

<?php } ?>
</div>