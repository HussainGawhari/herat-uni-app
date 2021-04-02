<!-- php starts -->
<?php 
include("connection.php");

  if(isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['parent_name']))
  {

  $department_name =$_POST['department_name'];
  $stu_fname= $_POST['firstname'];
  $stu_lname = $_POST['lastname'];
  $stu_rollno = $_POST['roll_no'];
  $stu_email = $_POST['email'];
  $stu_degree = 'becholar';
  $stu_image = $_POST['photo'];
  $stu_phone = $_POST['phoneNumber'];
  $stu_username=$_POST['email'];
  $stu_password = $_POST['email'];
  $stu_gender = $_POST['gender'];
  $stu_address = $_POST['address'];
  $blood_group = $_POST['blood_group'];
  $dep_id= " ";
  $stu_DOB=$_POST['dateofbirth'];
  $stu_about = 'Hello baby';
  
  $parent_id = '';
  $parent_name = $_POST['parent_name'];
  $parent_phoneNo =$_POST['parent_phoneNo'];
  $parent_email = $_POST['parent_email'];
  $parent_username= $_POST['parent_email'];
  $parent_password = $_POST['parent_email'];
  


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

        $stu_id = $con->insert_id;
       
      
               // header("Location: loginstd.php");
            $sql2 = "insert into parent (parent_name, Email,parent_image,parent_phone,stu_id)
            values('$parent_name','$parent_email','$stu_image','$parent_phoneNo','$stu_id')";

            
           if($con->query($sql2)){
             echo "parent created ";
           }
          else{
            echo $con->error;
          }
            $p_id = $con->insert_id;
         
            

            $sql3 = "insert into users (username ,pass,user_type,user_id) values(
              '$stu_username','$stu_password','3','$stu_id')";

            $sql4 = "insert into users (username ,pass,user_type,user_id) values(
                        '$parent_username','$parent_password','4','$p_id')";

            if( $con->query($sql3) == TRUE  && $con->query($sql4)==TRUE )
            {
                 echo "New record created successfully IN PARENT TABLE";
            
          
           }else{
                       echo $con->error;
           }
     
      } else
           echo " no recorded2";

  }
  else{
        echo "Error: 2" . "<br>" . $con->error;
      }
        
  }
  $con->close();

 ?>