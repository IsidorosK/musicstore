<html>
<img src="http://wallpapersdesk.net/wp-content/uploads/2015/05/2901_vinyl.jpg" id="bg" alt="">
<head>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
</head>
<style>

#bg {
	position: fixed; 
	top: 0; 
	left: 0;
	min-width: 100%;
	min-height: 100%;
	z-index:-1;
	}
	
	
button[type=button] {
	margin-left:40px;
	padding:10px 25px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
	-webkit-box-shadow: 1px 1px 1px 1px #000;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	}
	
input[type=text]{
	margin-left:20px;
	padding:1px 25px; 
	color:#7F00FF;
	font-family: 'Audiowide';
	font-size:20;
    background:white; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	}

input[type=submit]{
	padding:10px 25px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	margin-left:40px;
	-webkit-box-shadow: 1px 1px 1px 1px #000;

}

input[type=reset]{
	padding:10px 25px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	margin-left:40px;
	-webkit-box-shadow: 1px 1px 1px 1px #000;

}

h2{
	margin-top:50px;
	margin-left:20px;
	font-size:25;
	font-family:'Audiowide';
	color:#7F00FF;
	
}
c{
	font-family: 'Audiowide',cursive;
	color:#2E0852;
	font-size:20;

}

</style>

	<h2>Type Username of the user that you want to delete!</h2>
	<br>
	<form method="post" action="">
		<input type="text" name="deleteUser" value="" size=40><br>
		<br>
		<input type="submit">
		<input type="reset"><br>
	</form>
	<br>
	<br>
	<button type="button" onclick="location.href='admin.php'">Back</button><br><br>
	<?php
		$con=mysqli_connect("localhost","root","","eshop");
		if(!$con){
			die('Could not connect:'.mysql_error());
		}
		if(empty($_POST['deleteUser'])){
			?><c><?php echo "Enter the exact name";?></c>
			<?php
		}else{
			$name=$_POST['deleteUser'];
			$sql="DELETE FROM users WHERE Username='$name'";
			if(mysqli_query($con,$sql)){
			?>
				<c><?php echo "Record deleted successfully";?></c>
			<?php
			}else{
				echo "Error deleting record:".mysqli_error($con);
			}
		}
		mysqli_close($con);
		
	?>