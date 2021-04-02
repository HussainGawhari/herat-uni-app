<?php 
include('sidebartemp.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students List</title>
  <link rel="stylesheet" href="css/allstudents.css">
  <style>
     
  </style>
</head>
<body>

  <div class="container">
  <div class="main">
  <div class="row">
   
   <table class="table">
    <th > Name</th>
    <th>Last Name </th>
    <th>Phone Number</th>
    <th>Email</th>
    <th> Class</th>
    <th> Delete</th>
    <th>Edite</th>
    <th>More...</th>
    <br>
    <tr>
    <td>Rahmatullah </td>
    <td> Rooein</td>
    <td>+919373718473</td>
    <td>Rahmatullahrooein7@gmail.com</td>
    <td>TYBCA</td>
    <td> <input type="button" name="delete" value="Delete"></a></td>
    <td> <button style="font-size:larger; background-color:#4ccee8; color:blue; cursor:pointer"> Edite </button></td>
    <td> <button style="font-size:larger; background-color:#4ccee8; color:blue; text-decoration:none"><a href=""> more...</a> </button></td>
    
    </tr>
   </table>
  </div>
  </div>
  </div>
</body>
</html>