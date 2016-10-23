<?php
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not Connect:'.mysql_error());
	}
	$email=$_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		header('Location:register.php');
	}
	if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['email'])){
	?> <b>Email is required
	<?php
		
		header('Location:register.php');
	}elseif($_POST['username']=="admin"&&$_POST['password']=="admin"){
		echo "Wrong username and password input";
		header('Location:register.php');
	}else{
			$username=mysqli_real_escape_string($con,$_POST['username']);
			$password=mysqli_real_escape_string($con,$_POST['password']);
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$surname=mysqli_real_escape_string($con,$_POST['surname']);
			$email=mysqli_real_escape_string($con,$_POST['email']);
			$creditcardnumber=mysqli_real_escape_string($con,$_POST['creditcard']);
			$address=mysqli_real_escape_string($con,$_POST['address']);
			$phonenumber=mysqli_real_escape_string($con,$_POST['cellphone']);
		
			$insert_query="INSERT INTO users(Username,Password,Name,Surname,email,Phone,CreditCardNumber,Address) VALUES ('$username','$password','$name','$surname','$email','$phonenumber','$creditcardnumber','$address')";
			$result=mysqli_query($con,$insert_query);
		
			if(mysqli_affected_rows($con)>0){
			echo "user added";
			}else{
				echo "user not added";
				echo mysqli_error($con);
			}
	
		}
	mysqli_close($con);
	include("register.php");
?>