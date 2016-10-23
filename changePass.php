<?php
	session_start();	
?>
<html>
<img src="http://wallpapersdesk.net/wp-content/uploads/2015/05/2901_vinyl.jpg" id="bg" alt="">
<head>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<style>

#bg {
	position: fixed; 
	top: 0; 
	left: 0;
	min-width: 100%;
	min-height: 100%;
	z-index:-1;
	}
h1{
	color:#7F00FF;
	text-align:center;
	font-family: 'Audiowide',cursive;
	font-size:60;
	background-color:black;
	border:solid;
	border-radius:5px;



}
form{
	
	color:#9B30FF;
	text-align:center;
	font-family:'Audiowide',cursive;
	margin:40%;
	margin-top:2%;
	margin-bottom:20;
	padding:40px;
	font-size:30;
	letter-spacing:3px;
	
	border 5px solid black;
}

input[type=submit]{
	padding:10px 35px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	

}

button[type=button] {
	
	padding:10px 37px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	margin-left:-7%;
}
input[type=reset]{
	padding:10px 40px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	

}
input[type=password]{
	display:table-cell;
	font-family:'Audiowide';
	padding:5px 20px;
	border:2 solid;
	border-color:black;
	border-radius:5px;
	background-color:#FAFAD2;
	color:black;

}
a{color:#2E0852;
	font-family:'Audiowide',cursive;
	margin-left:40px;
	font-size:20;
	}

</style>
</head>
<body>
<h1>Control Panel</h1>
<form class="a" style="background-color:#262626" action="" method="post">
Current Password:<input type="password" name="CurrentPassword" value="" size=20>
<br>
New Password:<input type="password" name="NewPassword" value="" size=20>
<br>

Repeat New Password:<input type="password" name="RepeatPassword" value="" size=20><br>
<br>
<input type="submit">
<input type="reset">
<button type="button" onclick="location.href='mainpage.php'">Cancel</button>
</form>
</body>
</html>
<?php
	if(empty($_SESSION['username'])){
		header('Location:main.php');
	}
	$user=$_SESSION['username'];
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect:'.mysql_error());
	}
	if(empty($_POST['CurrentPassword'])||empty($_POST['NewPassword'])||empty($_POST['RepeatPassword'])){
		echo "You can now change your password";
	}else{
		$oldPassword=$_POST['CurrentPassword'];
		$newPassword=$_POST['NewPassword'];
		$repeatPassword=$_POST['RepeatPassword'];
		$query="SELECT Username,Password FROM users";
		$result=mysqli_query($con,$query);
		$returnPass=mysqli_num_rows($result);
		$i=1;
			while($i<=$returnPass){
			$apotelesma=mysqli_fetch_array($result);
			if($oldPassword==$apotelesma['Password']){
				if($newPassword==$repeatPassword){
					$query="UPDATE users SET Password='$newPassword' WHERE Username='$user' AND Password='$oldPassword'";
					$result=mysqli_query($con,$query);
					echo "Your password has changed";
				}else{
					echo "Password not match";
				}
			}
			$i++;
			}
	}
	mysqli_close($con);
?>