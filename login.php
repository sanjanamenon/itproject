<?php
	include('connect.php');
	session_start();
   	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select password from login where idnum=\"$username\"";
	$result=mysqli_query($conn,$query) or die('Error executing query'.mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	if($row['password']==$password)
	{
		echo('Successfully logged in'); 
        	$_SESSION['user_sess']=$username;  
		header('Location:main.php');
	}
	else
	{	
		echo "Invalid username or password!";		
		header('Location:index.php');	
	}
}
?>
        
   
