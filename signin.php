<?php 

session_start();

include('connection.php');

if(isset($_POST['loginbtn'])){

$unsername= $_POST['username'];
$password =$_POST['password'];

$check = "SELECT * FROM users WHERE username = '$unsername' AND pass = '$password'";

$result = $con->query($check);

// $row = $result->fetch_assoc();
if ( $result->num_rows > 0) {
	// $row =$result->fetch_assoc()
	echo "Login successfulled";
	header("location: ../sidebartemp.php");

}
else{
	echo(" username or password is invalid");
}


}

 ?>

