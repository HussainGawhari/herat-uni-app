<!-- php starts -->
<?php 
session_start();
include("php/connection.php");

  if(isset($_POST['dept_name']) && isset($_POST['email']) )

  $dept_name =$_POST['dept_name'];
//  $dept_head= $_POST['deptHead'];
  $dept_phone = $_POST['phone'];
  $dept_email = $_POST['email'];
  $capacity = $_POST['stdCapacity'];
  $about = $_POST['about'];
 // $dep_id= $_POST['dep_id'];
  $faculty_id = '1';
 
  echo "first";

        
          $sql = "insert into department (dep_name,phone,email,capacity,about, faculty_id) values ( 
                    '$dept_name','$dept_phone','$dept_email','$capacity','$about','$faculty_id')";

      
        if ($con->query($sql)==TRUE ) {
          echo "New record created successfully";

     
     
      } else{
          echo $con->error;
      }

  $con->close();

 ?>