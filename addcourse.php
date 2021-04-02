
<?php include('sidebartemp.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <head></head>

    <!--main container start-->
    <div class="main-container">

    <!-- </div> -->
    <!--start form-->
    <h2 class="formheading"> Add Course</h2>
<form method="Post" action="./php/InsertionIntoCourse.php" name="myForm" onsubmit="sub(); return false">  
  <div class="first_part">
  <label> Course Name </label> <br>        
  <input type="text" name="course_name" size="15"placeholder="Enter The Course Name" required> <br> <br>  

  <label> Course code </label><br>        
  <input type="text" name="course_code" size="15" placeholder="Enter The Course code" required> <br> <br>  
   <label> Start Date </label><br>        
  <input type="date" name="start_date" size="15" placeholder="Enter The Start Date" required> <br> <br>  
  Course credit  <br> 
  <input type="Number" id="course_credit" name="course_credit" placeholder="Enter The Course credit" <br><br>

   
 
</div>

  <div class="second_part">
   
   
  
    
  <label>   
    Professor Name
    </label> <br> 
    <select class="select_course" name="prof_name">   
    <option value="Rahmatullah Rooein"  style="color: #4ccee8;">Rahmatullah Rooein</option>  
    <option value=">Esmail Rahmani" style="color: #4ccee8;">Esmail Rahmani</option>  
    <option value="Hussain Gowhari" style="color: #4ccee8;">Hussain Gawhari</option>  
    <option value="Kirti" style="color: #4ccee8;">Kirti</option>  
    <option value="Rajish Tanksali" style="color: #4ccee8;">Rajish Tanksali</option> 
     <option value="Ali" style="color: #4ccee8;">Ali</option>  
    <option value="Ahmad" style="color: #4ccee8;">Ahmad</option>  
 
    
     
    </select><br> <br>

 <!--  Email <br> 
  <input type="email" id="email" name="email" placeholder="Enter email address" required> <br>    
  <br> <br>  
  Contact Number  <br> 
  <input type="text" id="contactNo" name="contactNo" placeholder="Enter The Contact Number" required> <br>
  <label>   
   <br>   -->
      <label>   
    Select your Department
    </label> <br> 
    <select class="select_course" name="dep_name">  
    <option value="Computer Application"  style="color: #4ccee8;">Computer Application</option>  
    <option value="Information System" style="color: #4ccee8;">Information System</option>  
    <option value="Information Technology" style="color: #4ccee8;">Information Technology</option>  
    <option value="Software Engineering" style="color: #4ccee8;">Software Engineering</option>   
    </select><br><br>
   
  Course Details  
  <br>  
  <textarea  name = "details" cols="80" rows="10" value="details" placeholder="Enter The Course Details"  style="border-color: #4ccee8;" >  
  </textarea>  
  <br> <br>
   <button  type="submit" class="submit_key" value="submit">Submit</button><br>
</div>
   
  </form> 
<!--end form-->
    <!--main container end-->
  </div>

  <!--wrapper end-->

</body>
</html>