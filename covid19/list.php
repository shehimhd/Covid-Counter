<?php

if (isset($_POST['search'])) {
  $valueToSearch = $_POST['valueToSearch'];
  // search in all table columns
  // using concat mysql function
  $query = "SELECT * FROM `entry` WHERE CONCAT(`firstname`, `lastname`, `age`, `state`, `city`, `date`) LIKE '%" . $valueToSearch . "%'";
  $search_result = filterTable($query);
} else {
  $query = "SELECT * FROM `entry`";
  $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
  $connect = mysqli_connect("localhost", "root", "", "c19-loginpage");
  $filter_Result = mysqli_query($connect, $query) or die(mysqli_error($connect));
  return $filter_Result;
}

?>



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
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="list.php">List</a>
      </li>

      </ul>

    </div>
  </nav>
  <h1>Covid Positive List</h1><br>
  <div class=tablediv>

    <form action="index.php" method="post">
      <center><input type="text" name="valueToSearch" placeholder="Search"><br>
      <button type="submit" class="btn btn-primary btn2" value="Filter" name="search">Sort</button></center><br><br>
     


      <table class="table table-bordered">
        <tbody class="thead-light">
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>State</th>
            <th>City</th>
            <th>Date</th>
            <th>Delete</th>
          </tr>

         
          <?php while ($row = mysqli_fetch_array($search_result)) : ?>
            <tr>
              <td><?php echo $row['firstname'] ," ", $row['lastname'];?></td>
              
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['state']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo '<a href="delete.php?name='.$row['firstname'].'" style="color:red" >Delete</a>' ;  ?></td>
              
            </tr>
          <?php endwhile; ?>

          
        



      </table>
    </form>  
  </div>

</body>

</html>