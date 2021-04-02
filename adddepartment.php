<?php
include('sidebartemp.php');
?>

<!DOCTYPE html>
<html lang="en">


    <!--main container start-->
    <div class="main-container">

    <!-- </div> -->
    <!--start form-->
    <h2 class="formheading"> Add Department</h2>

<form class="addDept" name="myForm" method="POST" action="./php/InsertionDepartment.php">
   
  <label> Department Name </label> <br>        
    <input type="text" name="dept_name" size="15"placeholder="Enter The Department Name" required> <br> <br>  
<!--   
    <label> Department Head </label><br>        
    <input type="text" name="deptHead" size="15" placeholder="Department Head Name" required> <br> <br>  
    -->
  <label>   
  Phone <br>  
  </label>  
  <input type="text" name="phone" size="10" placeholder="Enter Department Head Phone number" required/> <br> <br>  
    
  Email <br> 
  <input type="email" id="email" name="email" placeholder="Enter Department Head email address" required> <br>    
  <br> 
  
  <!-- Department ID  <br> 
  <input type="text" id="id" name="dep_id" placeholder="Enter Department ID" required> <br> <br> -->
  Student Capacity <br> 
  <input type="text" id="stdCapacity" name="stdCapacity" placeholder="Enter student Capacity" > <br>
  
    About 
  <br> 
  <textarea cols="80" rows="5" value="about" name="about" placeholder="about facluty"  style="border-color: #4ccee8;" >  
  </textarea>  
  <br>
  <button class="submit_key" type="submit" value="submit" style="margin-bottom: 4%;">Submit</button><br>
</div>
   
  </form> 
<!--end form-->
    <!--main container end-->
  </div>

 
</body>
</html>