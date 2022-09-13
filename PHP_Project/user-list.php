<link rel="stylesheet" href="style.css" />
<?php
include_once('DBconection.php');
include_once('action.php');
include_once('navbar.php');
// include_once('ViewList.php');
?>
<title>TechAdvise-UsersProfile</title>
<h2>User Profile</h2>
<div class="row">
   <div class="col">
      <div class="col-md-1"></div>
      <div class="col-md-5">
         <table class="table">
            <tr align="center" style="font-weight:bold">
               <td colspan="2"></td>
            </tr>
            <?php
            $count = 1;
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
            if (!empty($_GET)) {
               $id = $_GET['id'];
               $sql_query = "select * from emptb where id='" . $id . "';";
               // print_r($sql_query);
               $result = mysqli_query($con, $sql_query);
               while ($row = mysqli_fetch_assoc($result)) {
                  foreach ($row as $field => $value) {
            ?>
                     <tr>
                        <b>
                           <td style="font-weight:bold;text-transform:uppercase;"><?php echo $field; ?></td>
                        </b>
                        <td align="center"><?php echo $value ?></td>
                     </tr>
                  <?php
                  }
                  ?>
            <?php $count++;
               }
            } ?>
         </table>
      </div>
   </div>
</div>