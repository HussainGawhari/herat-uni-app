<?php 
include('sidebartemp.php');
?>

<!DOCTYPE html>
<html lang="en">

    <!--sidebar end-->

    <!--main container start-->
    <div class="main-container">

    <!-- </div> -->
    <!--start form-->
    <h2 class="formheading"> Add Student</h2>

<form  method="POST" action="./php/InsertionStudent.php" >  
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
  <label> Middlename </label><br>     
  <input type="text" name="middlename" size="15" placeholder="Middle Name"> <br> <br>  
  <label> Lastname </label><br>        
  <input type="text" name="lastname" size="15" placeholder="Last Name" required> <br> <br>  
  
  Date Of Birth  <br> 
  <input type="date" id="dateofbirth" name="dateofbirth" placeholder="Enter the date of Birth" required> <br>
  Blood Group <br> 
  <input type="text" id="ploodGroup" name="blood_group" placeholder="Enter the blood group name" required> <br> 
    

  <label>   
  Gender:  
  </label> 
  <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female  
  <input type="radio" name="gender" value="others"> Other  
  <br>  <br>
  <input class="fileupload" type="file" id="myFile" name="photo"><br>

  Address  
  <br>  
  <textarea name="address" value="address"  cols="50" rows="10"  placeholder="Enter address"  style="border-color: #4ccee8;" required>  
  </textarea>  
 
  
</div>

  <div class="second_part">

     <label>   
  Roll No <br>  
  </label>  
  <input type="text" name="roll_no"  placeholder="Enter Roll number"/>   <br><br>
   
   
  <label>   
  Phone <br>  
  </label>  
  <input type="text" name="phoneNumber" value="+91" size="2" placeholder="Enter phone number"/>   <br><br>
<!--   <input type="text" name="phone" size="10" placeholder="Enter parents Phone number" required/> <br> <br>  
 -->    
  Email <br> 
  <input type="email" id="email" name="email" placeholder="Enter email address" required> <br>    
  <br> <br>  

  Parents Name  <br> 
  <input type="text" id="parents_name" name="parent_name" placeholder="Enter the Parents name" required> <br>
  <br>  
  <br>  
  <br>
  Parent's Phone Number <br> 
  <input type="text" id="parentPhoneNo" name="parent_phoneNo" placeholder="Enter Parent's Phone Number" required> <br>   
  <br> <br>  
  Parent's Email Address <br> 
  <input type="email" id="email" name="parent_email" placeholder="Enter Parent's Email Address" required> <br> <br>  
  

  <button class="submit_key" type="submit" value="submit">Submit</button><br>
</div>
   
  </form> 
<!--end form-->
    <!--main container end-->
  </div>

  <!--wrapper end-->

   <script>

var u_pass = document.myForm.pass;
var r_pass = document.myForm.repass;

function sub()
{
  if(u_pass.value==r_pass.value)
  {
    alert("The student is registered Successfully")
  }
  else
  alert("You did not re-enter the same password, Please try again");
}
   </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".sidebar-btn").click(function(){
      $(".wrapper").toggleClass("collapse")
    });
  });
  </script>
</body>
</html>