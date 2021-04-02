<!-- php starts -->
<?php 
session_start();
include("php/connection.php");

  if(isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['gender']))
  {

  $department_name =$_POST['department_name'];
  $prof_fname= $_POST['firstname'];
  $prof_lname = $_POST['lastname'];
  $prof_email = $_POST['email'];
  $prof_degree = $_POST['degree'];
  $prof_image = $_POST['filename'];
  $prof_phone = $_POST['self_phone'];
  $prof_username=$_POST['email'];
  $prof_password = $_POST['email'];
  $prof_gender = $_POST['gender'];
 // $prof_address = $_POST['address'];
  $blood_group = $_POST['blood_group'];
  $prof_salary = $_POST['salary'];
  $dep_id= " ";
  $prof_DOB=$_POST['dateofbirth'];
  $about = $_POST['about'];

       $dep_id= "select dep_id from department where dep_name ='$department_name'";
    

        $result = $con->query($dep_id);

         
      if ($result->num_rows > 0) {
      // output data of each row
          $row = $result->fetch_assoc();
          $dep_id= $row['dep_id'];

        
          $sql = "insert into professor (prof_name,prof_lname,prof_email,prof_image,prof_phone,
          prof_degree,prof_gender,prof_DOB, about, blood_group, salary,dep_id) values ( '$prof_fname','$prof_lname',
          '$prof_email','$prof_image','$prof_phone','$prof_degree','$prof_gender','$prof_DOB','$about', '$blood_group',
          '$prof_salary','$dep_id')";

          if($con->query($sql)){
            $prof_id=$con->insert_id;

          }else{
            echo $con->error;
          }

          $sql3 = "insert into users (username ,pass,user_type,user_id) values(
            '$prof_username','$prof_password','2','$prof_id')";

      echo $con->error ,"Hellooooooooooooo";
        if (  $con->query($sql3)===TRUE ) {
          echo "New record created successfully";

     
     
      } else{
          echo $con->error ,'whattttttttttttttttttt';
      }

  }
  else{
        echo "Error: 2" . "<br>" . $con->error;
      }
        
  }
  $con->close();

 ?>