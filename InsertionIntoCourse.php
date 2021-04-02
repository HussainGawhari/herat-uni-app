<!-- php starts -->
<?php 
include("php/connection.php");

  if(isset($_POST['course_name']))
  {
      $course_name = $_POST['course_name'];
      $start_date = $_POST['start_date'];
      $course_credit =$_POST['course_credit'];
      $professor_name =$_POST['prof_name'];
      $details = $_POST['details'];
      $course_code = $_POST['course_code'];
      $department_name = "Computer Application";
    
echo "inside 1";


      // if(!empty($stu_fname) && !empty($stu_lname ))
    

          //save to database

        $prof_id= "select prof_id from professor where prof_name ='$professor_name'";

        $dep_id= "select dep_id from department where dep_name ='$department_name'";

        $result = $con->query($prof_id);

        $res = $con->query($dep_id);
         
      if (($result->num_rows > 0) &&($res->num_rows>0)) {
      // output data of each row
        echo " <br> inside 2";
          $row = $result->fetch_assoc();
          $low = $res->fetch_assoc();
          $prof_id= $row['prof_id'];
          $dep_id= $low['dep_id'];
        
          $sql = "insert into course (course_name , course_credit , start_date , course_code , dep_id , prof_id)values
                                     ('$course_name','$course_credit','$start_date','$course_code', '$dep_id','$prof_id')";

              if($con->query($sql)){

                              echo "Inserted succefully";

              }
              else{
                echo "Error: 2" . "<br>" . $con->error;
              }
          }
          else 
            echo "second";

      
             
  }
  else{
    echo "first";
  }
  $con->close();

 ?>