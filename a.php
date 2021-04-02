<?php
include("php/connection.php");

$department_name ="Computer Application";
  $stu_fname= "sdkj";
  $stu_lname = "slkdfj";
  $stu_rollno ="134234uyi098";
  $stu_email = "dfkslj@kasj";
  $stu_degree = 'becholar';
  $stu_image = "kjdsf";
  $stu_phone = "wiof0903";
  $stu_username="32094uyg8iwdfj";
  $stu_password = "ewrq059ij";
  $stu_gender = "M";
  $stu_address = "ewiuts ";
  $blood_group = "O";
  $dep_id= " ";
  $stu_DOB="2000-10-10";
  $stu_about = 'Hello baby';
  
//   $parent_id = '';
//   $parent_name = $_POST['parent_name'];
//   $parent_phoneNo =$_POST['parent_phoneNo'];
//   $parent_email = $_POST['parent_email'];
//   $parent_username= $_POST['email'];
//   $parent_password = $_POST['email'];
  


      // if(!empty($stu_fname) && !empty($stu_lname ))
    

          //save to database

        $dep_id= "select dep_id from department where dep_name ='$department_name'";

        $result = $con->query($dep_id);

         
      if ($result->num_rows > 0) {
        echo " second";
      // output data of each row
          $row = $result->fetch_assoc();
          $dep_id= $row['dep_id'];
        
          $sql = "insert into student (stu_name,stu_lname,stu_rollno,stu_email,stu_image,stu_phone,
          stu_degree,stu_gender,stu_DOB, stu_about,blood_group,dep_id) values (
          '$stu_fname','$stu_lname' ,'$stu_rollno',
            '$stu_email','$stu_image','$stu_phone','$stu_degree',
         '$stu_gender','$stu_DOB','$stu_about','$blood_group','$dep_id')";

        
        if ($con->query($sql)==TRUE ) {
          echo "New record created successfully";
            echo $con->insert_id;
        }
    }
        
    ?>