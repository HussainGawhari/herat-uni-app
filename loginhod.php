<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style> 
  
    /*set border to the form*/ 
      
    form { 
        border: 3px solid #f1f1f1; 
        width: 50%;
        margin: auto;
        margin-top: 100px;
    } 
    /*assign full width inputs*/ 
      
    input[type=text], 
    input[type=password] { 
        width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box; 
    } 
    /*set a style for the buttons*/ 
      
    button { 
        background-color: #082bf1; 
        color: white; 
        padding: 14px 20px; 
        margin: 8px 0; 
        border: none; 
        cursor: pointer; 
        width: 100%; 
    } 
    /* set a hover effect for the button*/ 
      
    button:hover { 
        opacity: 0.8; 
    } 
    /*set extra style for the cancel button*/ 
      
    .cancelbtn { 
        width: auto; 
        padding: 10px 18px; 
        background-color: #f44336; 
    } 
    /*centre the display image inside the container*/ 
      
    .imgcontainer { 
        text-align: center; 
        margin: 24px 0 12px 0; 
    } 
    /*set image properties*/ 
      
    img.avatar { 
        width: 40%; 
        border-radius: 50%; 
    } 
    /*set padding to the container*/ 
      
    .container { 
        padding: 16px; 
        
    } 
    /*set the forgot password text*/ 
      
    span.psw { 
        float: right; 
        padding-top: 16px; 
    } 
    /*set styles for span and cancel button on small screens*/ 
      
    @media screen and (max-width: 300px) { 
        span.psw { 
            display: block; 
            float: none; 
        } 
        .cancelbtn { 
            width: 100%; 
        } 
    } 

    .h2{
      /* margin-left:750px; */
      margin-top: 90px;
      text-align: center;
    }
</style> 
  
</head>
<body>

         <h2 class="h2"> Log In Form </h2>
  
    
  
  
    <!--Step 1 : Adding HTML-->
    <form method="POST"  action="./php/signin.php"> 
     
  
        <div class="container"> 
            <label><b>Username</b></label> 
            <input type="text" placeholder="Enter Username" name="username" required> 
  
            <label><b>Password</b></label> 
            <input type="password" placeholder="Enter Password" name="password" required> 
  
            <button type="submit" name="loginbtn" >Login</button> 
            <input type="checkbox" name="check_box" checked="checked"> Remember me 
        </div> 
  
        <div class="container" style="background-color:#f1f1f1"> 
            
            <span class="psw">Forgot <a href="#">password?</a></span> 
        </div> 
    
  


  </form>
</body>
</html>