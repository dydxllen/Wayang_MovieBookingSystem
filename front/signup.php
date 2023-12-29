<?php  
include "config.php";
global $conn;

$name = $email = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	if (empty($_POST["name"]))
    {
        $usernameError = "Please enter your username!";
        echo "<script>alert('$usernameError');</script>";
        echo"<script>window.location.href=\"signlog.php\";</script>";

    }
     // check if username is alphanumeric
    elseif(!preg_match('/^[a-zA-Z][0-9a-zA-Z]{2,23}$/',$_POST["name"])) 
    {

        $usernameError = "Only alphanumeric(letters & numbers) user allowed, re-enter please";
        echo "<script>alert('$usernameError');</script>";
        echo"<script>window.location.href=\"signlog.php\";</script>";
       
    }   
    elseif (empty($_POST["password"])) 
    {   
      $passError = "Plese enter your password";
      echo "<script>alert('$passError');</script>";
      echo"<script>window.location.href=\"signlog.php\";</script>";
      
    }
    // check if password is in correct format
    elseif(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_POST["password"]))
    {   
		$passError = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character, Try again";
		echo "<script>alert('$passError');</script>";
    echo"<script>window.location.href=\"signlog.php\";</script>";
    }
	else
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql ="INSERT INTO signup (name, email, password)
		VALUES ('$name', '$email','$password')";
		
		if(mysqli_query($conn,$sql)){
			echo '<script>alert("Your registration is succcessful")</script>';
		}else{
			echo "Error ". $sql. " ".mysqli_error($conn); 
		}
	}
  echo"<script>window.location.href=\"signlog.php\";</script>";
}
?>




















