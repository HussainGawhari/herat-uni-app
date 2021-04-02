<?php include('sidebartemp.php'); ?>

<!DOCTYPE html>
    <!--main container start-->
    <div class="main-container">

    <!-- </div> -->
    <!--start form-->
    <h2 class="formheading"> Add Teacher</h2>
<form name="myForm" method="POST" action="./php/InsertionTeacher.php">  
  <div class="first_part">
     <label>   
    Select your Department
    </label> <br> 
    <select class="select_course" name="department_name">  
    <option value="Computer Application"  style="color: #4ccee8;">Computer Application</option>  
    <option value="Information System" style="color: #4ccee8;">Information System</option>  
    <option value="Information Technology" style="color: #4ccee8;">Information Technology</option>  
    <option value="Software Engineering" style="color: #4ccee8;">Software Engineering</option>   
    </select><br><br>
  <label> Firstname </label> <br>        
  <input type="text" name="firstname" size="15"placeholder="Firstname" required> <br> <br>  

  <label> Lastname </label><br>        
  <input type="text" name="lastname" size="15" placeholder="Last Name" required> <br> <br>  
  Date Of Birth  <br> 
  <input type="date" id="dateofbirth" name="dateofbirth" placeholder="Enter the date of Birth" required> <br><br>
  <!-- About <br>
  <input type="text" id="about" name="about" placeholder="About professor" required> <br><br> -->

  Blood Group <br> 
  <input type="text" id="ploodGroup" name="blood_group" placeholder="Enter the blood group" > <br>
 
    
  <br>  
  <br>  
  <br>

  <label>   
  Gender:  
  </label> 
  <input type="radio" name="gender" value="Male"> Male
  <input type="radio" name="gender" value="Female" > Female  
  <input type="radio" name="gender" value="Other" > Other  
  <br>  <br>
  <input class="fileupload" type="file" id="myFile" name="filename"><br>
  
  
</div>

  <div class="second_part">
   
    <label> Education </label><br>     
    <input type="text" name="degree" size="15" placeholder="Enter his/her Education"> <br> <br>  
    <label>
  <label>   
  Phone <br>  
  </label>  
  <input type="text" name="self_phone"  value="+91" size="2" placeholder="Enter phone number"/>   
  <input type="text" name="phone" size="10" placeholder="Enter emergincy Phone number" /> <br> <br>  
    
  Email <br> 
  <input type="email" id="email" name="email" placeholder="Enter email address" required> <br>    
  <br> <br>  
   Salary <br> 
  <input type="number" id="#" name="salary" placeholder="Enter salary" required> <br>    
  <br> <br>  
  About  
  <br>  
  <textarea cols="80" rows="5" name="about"  placeholder="Enter address"  style="border-color: #4ccee8;" required>  
  </textarea>  
  <br> <br>
  <button class="submit_key" type="submit" value="submit">Submit</button><br>
</div>
   
  </form> 
<!--end form-->
    <!--main container end-->
  </div>

</body>
</html>