<!DOCTYPE html>
<html>

<head>
    <title> dup Sample form</title>
 <?php 
  include_once('navbar.php');
 // include_once('DBconection.php');
  ?>
  
</head>

<body >
      <?php
      $name='';
      $email = '';
      $password = '';
      $gender = '';
      $language=[];
      $city = '';    
      $address = '';
      $lan     =['C++','C#','JAVA','PHP'];
    $con=mysqli_connect("localhost","root","","sampledb");
    if(isset($_POST['submit']))
    {
     $name       = $_POST['name'];
     $password   = $_POST['password'];
     $email      = $_POST['email'];
     $gender     = $_POST['gender'];
     $language   =$_POST['language'];
     $city       = $_POST['city'];
     $address    = $_POST['address'];
     $chk="";
     $lang=[];
     foreach($language as $chk1){  
       $lang[] =$lan[$chk1]; }
       $chk=implode(',',$lang);

       //insert query
$sql="INSERT INTO   emptb  (name,password,email,gender,language,city,address)
values('$name','$password','$email','$gender','$chk','$city','$address')";
$result=mysqli_query($con,$sql);

if($result){
            echo "success<br>";
        } 
        else{
            echo "not success";
        }
    }
    ?>
<form>
<div class="container">
    <form method="post">
   <h4 class="h4">Registration form</h4>
               <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>"style="width:30%">
                </div>
            </div>
            <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="password"  class="form-control" name="password" value="<?php echo $password; ?>"  style="width:30%">
        </div>
  </div>
           
            <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" style="width:30%">
                </div>
            </div>
          
            <div class="mb-3 row">
                    <label for="gender" class="col-sm-2 col-form-label">Gender</label><br>   
                    <div class="col-sm-10">                 
                    <input type="radio" name="gender" value="female" <?php if ($gender == 'female') {  ?> checked <?php } ?>>Female
                    <input type="radio" name="gender" value="male" <?php  if ($gender == 'male') { ?> checked <?php } ?>>Male
                </div>
            </div>
         
            <div class="mb-3 row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                    <select name="city" class="form-control"   style="width:30%">
                        <option  value="">--select city--</option>
                        <option value="hyderbad" <?php if ($city == 'hyderbad') { ?> selected <?php } ?>>Hyderbad</option>
                        <option value="delhi" <?php if ($city == 'delhi') { ?> selected <?php } ?>>Delhi</option>
                        <option value="wgl" <?php if ($city == 'wgl') { ?> selected <?php } ?>>Warangal</option>
                    </select>
                </div>
            </div>
        
            <div class="mb-3 row">
                    <label for="languages" class="col-sm-2 col-form-label">Languages:</label><br>
                    <div class="col-sm-10">
                    <?php foreach($lan as $k=>$lan)
                    {echo $lan; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 
                   <input type="checkbox" class="form-check-input" name="language[]" value="<?php echo $k?>">
                   <?php if(in_array($k,$language)){?> checked <?php }?>
            <?php } ?>
                    </div>
                </div>
           <div class="mb-3 row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="address" style="width:30%"><?php echo $address; ?></textarea>
                </div>
            </div>
         <button value="" class="button">submit</button>
   </form>
</div>
    <!-- <script>
          if (isset($_POST['submit'])) {
                echo "submitted";
            }
    </script> -->
</body>
</html>