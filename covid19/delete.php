<?php
   $con = mysqli_connect("localhost","root","","c19-loginpage");
   $name = $_GET['name'];
   mysqli_query($con,"DELETE FROM `entry` WHERE firstname = '$name'"); 
 ?>
  <script type="text/javascript">   
     window.location = "list.php";
  </script>