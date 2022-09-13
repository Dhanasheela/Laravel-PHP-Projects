 <?php
  include_once('DBconection.php');
  include_once('navbar.php');
  ?>
 <title>TechAdvise-ViewList</title>
 <div class="container">
   <div class="row-md-3">
     <div class="col-sm-2">
       <a href="sign-up.php" class="btn btn-success" style="width:150px; text-align:center ;background-color:black;border-radius:10px;" id="daa"><i class="fa fa-plus"></i> Add New User</a><br>
     </div>
   </div>
   <div class="row">

     <div class="col">

       <div>
         <form method="post">
           <input type="text" name="search">
           <button name="submit" value="Search" style="width:30px; text-align:center ;background-color:black;border-radius:10px;"><i class="fa fa-search"></i></button>
         </form>
         <div class="container-fluid">
           <table class="table">
             <tr align="center" style="font-weight:bold">
               <td>ID</td>
               <td>Image</td>
               <td>Name</td>
               <td>Password</td>
               <td>Email</td>
               <td>Gender</td>
               <td>Language</td>
               <td>City</td>
               <td>Address</td>
               <td>Action</td>
             </tr>
             <?php
              if (!empty($_POST) && (isset($_POST["search"]))) {
                $search_value = $_POST["search"];
                if ($con->connect_error) {
                  echo 'Connection Failed: ' . $con->connect_error;
                } else {
                  $sql = "select * from emptb where name like '%$search_value%'";
                  $res = $con->query($sql);
                  while ($row = $res->fetch_assoc()) {
                    // echo '<b>Name:</b>  '.$row["name"];
                  }
                }
              }
              ?>
             <?php

              $count = 1;
              $sql_query = "select * from emptb ";
              if (!empty($_POST) && isset($_POST['search'])) {
                $search = $_POST['search'];
                if (!empty($search)) {
                  $sql_query .= " where name like '%$search%' OR email like '%$search%'";
                }
              }
              $sql_query .= " order by id desc";
              $result = mysqli_query($con, $sql_query);
              while ($row = mysqli_fetch_assoc($result)) {
                $src1 = $row['image'];
                if (empty($src1)) {

                  $src1 = "default.png";
                }
                //print_r($src1);
              ?>
               <tr>
                 <td align="center"><?php echo $count; ?></td>
                 <td align="center"><?php print("<img src='img/$src1' alt='photo' width=30px height=34px width=40px height=44px style=border-radius:10px>"); ?> </td>
                 <td align="center"><?php echo $row["name"]; ?></td>
                 <td align="center"><?php echo $row["password"]; ?></td>
                 <td align="center"><?php echo $row["email"]; ?></td>
                 <td align="center"><?php echo $row["gender"]; ?></td>
                 <td align="center"><?php echo $row["language"]; ?></td>
                 <td align="center"><?php echo $row["city"]; ?></td>
                 <td align="center"><?php echo $row["address"]; ?></td>
                 <td align="center">
                   <a href="user-list.php?id=<?php echo $row["id"]; ?>" title="View user"><i class="fa fa-eye" style="font-size:15px; color:black"></i></a>
                   &nbsp;
                   <a href="update.php?id=<?php echo $row["id"]; ?>" title="edit user"><i class="fas fa-edit"></i></a>
                   &nbsp;
                   <a href="delete.php?id=<?php echo $row["id"]; ?>" title="Delete user"><i class="fa" style="font-size:22px; color:red">&#xf00d;</i></a>
                 </td>
               </tr>
             <?php $count++;
              } ?>
           </table>
         </div>

       </div>
     </div>