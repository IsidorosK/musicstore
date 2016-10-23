<c><?php
	session_start();
	if(empty($_SESSION['username'])){
		header('Location:main.php');
	}
	
	$username=$_SESSION['username'];
	$userid=$_SESSION['userid'];
	$artist=$_SESSION['artist'];
	$price=$_SESSION['price'];
	$title=$_SESSION['title'];
	
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect:'.mysql_error());
	}
	
	$sql="SELECT IDUser,Username FROM users WHERE Username='$username' AND IDUser='$userid'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_num_rows($query);
	while($result=mysqli_fetch_array($query)){
		$sql_cd="SELECT ID FROM cd WHERE Title='$title' AND Artist='$artist'";
		$query_cd=mysqli_query($con,$sql_cd);
		$row=mysqli_num_rows($query_cd);
		while($result_cd=mysqli_fetch_array($query_cd)){
			$sql_s="INSERT INTO transactions(UserID,Title,Artist,Price) VALUES('$userid','$title','$artist','$price')";
			$query_s=mysqli_query($con,$sql_s);
		}
		
		}	
	
	if(mysqli_affected_rows($con)>0){
		echo  "Cd purchased";
	}else{
		echo "Something went wrong";
		echo mysql_error($con);
	}
	mysqli_close($con);
?></c>

<br>
<br>
<a href="mainpage.php">Home</a>
<a href="logout.php">Logout</a>
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

a{
	
	margin-left:40px;
	padding:10px 25px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
b{
	color:#7F00FF;
	text-align:center;
	font-family: 'Audiowide',cursive;
	font-size:30;
	background-color:black;
	border:solid;
	border-radius:5px;



}
c{
color:#2E0852;
	font-family:'Audiowide',cursive;
	margin-left:40px;
	font-size:30;
	
	
	
	}
<style>
</head>






</html>
