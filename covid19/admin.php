<!DOCTYPE html>
<html>
  <head>
    <title>Login Action</title>
  </head>
  <body>
    <?php
       $username = $_POST["uname"];
       $password = $_POST["password"];
       $query = "SELECT * from admin where Username = '". $username ."' and Password = '". $password ."'";
       $con = mysqli_connect("localhost","root","","c19-loginpage");
       $result = mysqli_query($con,$query);
       
       if ($row = mysqli_fetch_array($result))
       {  
         if ($type == "user")
            echo "Welcome User";
         else   
            header('Location: adminpage.php'); 
        }
       else
       {  
         echo "Invalid Login";
        }
        mysqli_close($con);
        ?> 
  </body>
</html>