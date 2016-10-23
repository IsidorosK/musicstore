
<?php
	session_start();

	if(empty($_REQUEST['username'])||empty($_REQUEST['password'])){
		echo "invalid username or password";
		header('Location:main.php');
	}
	if($_POST['username']=="admin"&& $_POST['password']=="admin"){
			$admin=$_POST['username'];
			$adminpass=$_POST['password'];
			$username="";
			$password="";
	}else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$admin="";
		$adminpass="";
	}
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect:'.mysql_error());
	}
	
	$query="SELECT * FROM users ";
	$result=mysqli_query($con,$query);
	$checkUsername=mysqli_num_rows($result);
	
	$i=1;
	while($i<=$checkUsername){
		$apotelesma=mysqli_fetch_array($result);
		if(($username==$apotelesma['Username']&&$password==$apotelesma['Password'])||($username==$apotelesma['email']&&$password==$apotelesma['Password'])){
			$_SESSION['username']=$_POST['username'];
			$_SESSION['userid']=$apotelesma['IDUser'];
			header('Location:mainpage.php');
		}elseif($admin==$apotelesma['Username']&&$adminpass==$apotelesma['Password']){
			$_SESSION['admin']=$admin;
			header('Location:admin.php');
		}else{
			
			//require_once('main.htm');
		}
		$i++;
	}
	
	require_once('main.php');
	//require('main.php');
	mysqli_close($con);
	
?>

	