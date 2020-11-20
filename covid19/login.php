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
      <li class="nav-item">
        <a class="nav-link active"  href="#">Admin</a>
      </li>
   
    </ul>
   
  </div>
</nav>


<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
        <h1></h1>
    </div>

    <div class="contaier">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12">
            <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon 
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div> -->

    <!-- Login Form -->
    <form action="admin.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="uname" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" autocomplete="off">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    

    

  </div>
</div>

            </div>
        </div>

    </div>

</div> 


</body>
</html>