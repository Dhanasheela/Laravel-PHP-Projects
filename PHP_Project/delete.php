<?php
  include_once('DBconection.php');
 ?>
 <?php
 $id=$_GET['id'];
$query = "DELETE FROM emptb WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ;
//header("Location:ViewList.php");
 ?>