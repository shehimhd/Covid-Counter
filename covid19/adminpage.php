<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'links.php'; ?>
    <?php include 'style.php'; ?>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navstyle p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="list.php">List</a>
      </li>
   
   
    </ul>
   
  </div>
</nav>
<center><h1>Patients Entry</h1></center><br>

<div class="adminform">
<form action="" method="POST">
  <div class="form-group">
      
    <center><label for="exampleFormControlInput1">First Name</label><br>
    <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" placeholder="First Name" autocomplete="off">
  </div></center>
  <center><div class="form-group">
    <label for="exampleFormControlInput1">Last Name</label><br>
    <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" placeholder="Last Name" autocomplete="off">
  </div></center>
  <center><div class="form-group">
    <label for="exampleFormControlInput1">Age</label><br>
    <input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="Age" autocomplete="off">
  </div></center>
  <div class="form-group">
    <label for="exampleFormControlSelect1">State</label>
    <select class="form-control" name="state" id="exampleFormControlSelect1">
      <option value="Kerala">Kerala</option>
  
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">City</label>
    <select class="form-control" name="city" id="exampleFormControlSelect1">
      <option value="Malappuram">Malappuram</option>
      <option value="Kottakal">Kottakal</option>
      <option value="Manjeri">Manjeri</option>
      <option value="Perinthalmanna">Perinthalmanna</option>
    </select>
  </div> 
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label><br>
    <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="Date" autocomplete="off">
  </div><br><br>
  <button type="submit" class="btn btn-primary btn1" name="submit">Submit</button><br><br>
 
 

  
</form>

</div>

<?php

    
    if (isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $date = $_POST['date'];

        $insertquery = "INSERT INTO `entry`(firstname, lastname, age, state, city, date) VALUES ('$fname','$lname','$age','$state','$city','$date')";
        $con = mysqli_connect("localhost","root","","c19-loginpage");
        $query = mysqli_query($con, $insertquery);

        if($query){
            ?>
            <script>
                alert("Enterd Successfully");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Not Enterd!!");
            </script>
            <?php    
        }

    }
    ?>
</body>
</html>

