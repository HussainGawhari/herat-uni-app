<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
<!--Jquery cdn-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- popper js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- js-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--font awesome-->
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="./css/mainpage.css">
  <title>Herat University</title>
</head>
<body class="skin-blue sidebar-mini">
  
  <!-- Navigation bar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" width="80px" height="80px"> Herat University </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
     <span class="navbar-toggler-icon"></span>
    </button>
      

    <div class="collapse navbar-collapse" id="navbarResponsive"> 
       <ul class="navbar-nav ml-auto">
         <li > 
           <a href="#"> <i class="fas fa-home"></i> HOME</a>
         </li>

         <li > 
          <a href="sidebartemp.php"> <i class="fas fa-address-card"></i> ABOUT</a>
        </li>

        <li> 
          <a href="#"><i class="fas fa-graduation-cap"></i> FACULTIES</a>
        </li>

        <li> 
          <a href="#"><i class="fas fa-brain"></i> SCIETIFIC AFFAIRS</a>
        </li>

        <li > 
          <a href="#"> <i class="fab fa-servicestack"></i> SERVICES</a>
        </li>

        <li> 
          <a href="#"><i class="fas fa-briefcase"></i> JOBS</a>
        </li>

        <li class="dropdown1"> 
          <a href="#"> <i class="fas fa-sign-in-alt"></i> Log In As </a>
          <ul>
            <li style="color: blue;"> <a href="loginhod.php">HOD Login</a> </li>
            <li style="color: blue;"><a href="loginteac.php"> Teachers Login</a> </li>
            <li style="color: blue;"><a href="loginpar.php"> Parents Login </a></li>
            <li style="color: blue;"><a href="loginstd.php"> Student Login </a></li>

          </ul>
        </li>
       </ul>
    </div>

  </div>
</nav>
  
<!--Image slider-->

<div id="slids" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/p.jpg" alt="" width="100%">
      <div class="carousel-caption">

      </div>

    </div>
 
    <div class="carousel-item">
      <img src="images/p1.jpg" alt="" width="100%">
      <div class="carousel-caption">
      </div>

    </div>

    <div class="carousel-item">
      <img src="images/p2.jpg" alt="" width="100%">
      <div class="carousel-caption">
      </div>

    </div>

  </div>
</div>

<!-- Jumbotron-->

</body>
</html>