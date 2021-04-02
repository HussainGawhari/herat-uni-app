

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sidebar Dashboard Template whit Sub Menu</title>
  <link rel="stylesheet" href="css/addstd.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  
  </head>
<body>
  <!-- wrapper start-->
  <div class="wrapper">
    <!--header menu start-->
    <div class="header">
      <div class="header_menu">
        <div class="title">PRINCIPLE <span>ADMIN</span></div>
        <div class="sidebar-btn">
          <i class="fas fa-bars"></i>
        </div>
        <ul>
          <li> <a href="#"> <i class="fas fa-search"></i></a></li>
          <li> <a href="#"> <i class="fas fa-bell"></i></a></li>
          <li> <a href="#"> <i class="fas fa-power-off"></i></a></li>
        </ul>
      </div>
    </div>
    <!--header menu end-->

    <!-- sidebar start-->
     <div class="sidebar">
       <div class="sidebar_menu">
         <center class="profile">
           <img src="images/prof.jpg" alt="" width="90px">
           <p style="font-size: 15px; color: antiquewhite; margin-top:-5px;">Rahmatullah Rooein</p>
         </center>

         <li class="item">
           <a href="#" class="menu_btn">
           <i class="fas fa-desktop"></i> <span>Dashboard </span>
           </a>
         </li>
          
         <li class="item" id="student">
          <a href="#student" class="menu_btn">
            <i class="fas fa-book"></i><span>Students<i class="fas fa-chevron-down dropdown"></i></span>
          </a>
          <div class="sub_menu">
            <a href="addcourse.php"> <i class="fas fa-user-friends"></i><span>All Students</span></a>
            <a href="addstd.php"> <i class="fas fa-user-plus"></i><span>Add Students</span></a>
            <a href="#"> <i class="far fa-edit"></i><span>Edite Students</span></a>
            <a href="#"> <i class="fas fa-address-card"></i><span>About Students</span></a>
          </div>
        </li>

         <li class="item" id="teacher">
           <a href="#teacher" class="menu_btn">
             <i class="fas fa-user-circle"></i> <span> Teachers <i class="fas fa-chevron-down dropdown"></i> </span>
           </a>
           <div class="sub_menu">
            <a href="#"> <i class="fas fa-chalkboard-teacher"></i><span>All Teachers</span></a>
             <a href="addteacher.php"> <i class="fas fa-user-plus"></i><span>Add Teacher</span></a>
             <a href="addteacher.php"> <i class="far fa-edit"></i><span>Edite Teacher</span></a>
             <a href="#"> <i class="fas fa-address-card"></i><span>About Teacher</span></a>
            </div>
         </li>

           
         
         
        <li class="item" id="course">
          <a href="#course" class="menu_btn">
            <i class="fas fa-user-graduate"></i> <span>Courses<i class="fas fa-chevron-down dropdown"></i></span>
          </a>
          <div class="sub_menu">
            <a href="#"> <i class="fas fa-user-friends"></i><span>All Courses</span></a>
            <a href="addcourse.php"> <i class="fas fa-user-plus"></i><span>Add Courses</span></a>
            <a href="#"> <i class="far fa-edit"></i><span>Edite Courses</span></a>
          </div>
        </li>
        
        <li class="item" id="departments">
          <a href="#departments" class="menu_btn">
            <i class="fas fa-building"></i> <span>Departments<i class="fas fa-chevron-down dropdown"></i></span>
          </a>
          <div class="sub_menu">
            <a href="#"><i class="fas fa-plus-square"></i> <span>All Departments</span></a>
            <a href="adddepartment.php"> <span>Add Department</span></a>
            <a href="#"> <span>Edite Departments</span></a>
            <a href="#"> <span>Edite Departments</span></a>
          </div>
        </li>

        <li class="item" id="staff">
          <a href="#staff" class="menu_btn">
            <i class="fas fa-user-clock"></i> <span>Staff<i class="fas fa-chevron-down dropdown"></i></span>
          </a>
          <div class="sub_menu">
            <a href="#"> <i class="fas fa-share-all"></i><span>All Staff</span></a>
            <a href="#"> <i class="fas fa-plus-square"></i><span>Add Staff</span></a>
            <a href="#"> <i class="far fa-edit"></i><span>Edite Staff</span></a>
            <a href="#"> <i class="far fa-address-card"></i><span>About Staff</span></a>
          </div>
        </li>

         <li class="item" id="holiday">
          <a href="#holiday" class="menu_btn">
            <i class="fas fa-glass-cheers"></i><span>Holiday<i class="fas fa-chevron-down dropdown"></i></span>
          </a>
          <div class="sub_menu">
            <a href="#"> <i class="fas fa-user-friends"></i><span>All Holiday</span></a>
            <a href="#"> <i class="fas fa-user-plus"></i><span>Add Holiday</span></a>
            <a href="#"> <i class="far fa-edit"></i><span>Edite Holiday</span></a>
            
          </div>
        </li>

        <li class="item" id="task">
          <a href="#" class="menu_btn">
            <i class="fas fa-tasks"></i><span>Tasks</span>
          </a>
          
        </li>
        
        <li class="item" id="contact ">
          <a href="#" class="menu_btn">
            <i class="fas fa-address-book"></i><span>Contact</span>
          </a>
          
        </li>

       </div>
     </div>
    <!--sidebar end-->

  <script type="text/javascript">
  $(document).ready(function(){
    $(".sidebar-btn").click(function(){
      $(".wrapper").toggleClass("collapse")
    });
  });
  </script>
</body>
</html>



