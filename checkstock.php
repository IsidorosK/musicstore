<?php
	session_start();
	//echo $_SESSION['admin']."<br>";
	if(empty($_SESSION['admin'])){
		header('Location:main.php');
	}
?>
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
	font-family: 'Fredericka the Great', cursive;
	font-size:25;
    background:black; 
    border:2 none;
	-webkit-box-shadow: 1px 1px 1px 1px #000;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	
 }
 
 table{
	margin-top:60px;
	margin-left:auto;
	margin-right:auto;
	background-color:#404040;
	font-size:25;
	text-align:center;
	font-weight:bold;
	font-family: 'Fredericka the Great', cursive;
	}

input[type=text]{
	display:table-cell;
	font-family: 'Fredericka the Great', cursive;
	
	padding:5px 20px;
	border:2 groove;
	border-color:black;
	border-radius:5px;
	background-color:#FAFAD2;
	color:black;
	border-style:solid;
	border-radius:5px;
	border-color:black;
	-webkit-box-shadow: 1px 1px 1px 1px #000;
}
b
	{
		font-size:35;
		font-family: 'Fredericka the Great', cursive;
		font-weight:bold;
		border:5px dove gray;
	}
h2{
	margin-top:0px;
	margin-left:20px;
	font-size:25;
	font-family: 'Fredericka the Great', cursive;
	color:#7F00FF;
	
}

pro{
		font-size:35;
		font-family: 'Fredericka the Great', cursive;
		font-weight:bold;
		border:5px dove gray;
	
}
input[type=submit]{
	margin-left:100px;
	padding:10px 25px; 
	color:#7F00FF;
	font-family: 'Fredericka the Great', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;

}
</style>
<body>
<table>
<button type="button" onclick="location.href='admin.php'">BACK</button><br>
	<tr>
		<th>Title</th>
		<th>Stock</th>
	</tr>
<?php

	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect:'.mysql_error());
	}
	$query="SELECT Title,Stock FROM cd";
	$result=mysqli_query($con,$query);
	$checkStock=mysqli_num_rows($result);
	$i=1;
	while($i<=$checkStock){
		$apotelesma=mysqli_fetch_array($result);
		?>
		<tr>
			<td><?php echo $apotelesma['Title'] ?></td>
			<td><?php echo $apotelesma['Stock']?> </td>
		<?php //echo $apotelesma['Title']."=".$apotelesma['Stock']."<br>";
		$i++;
	}
	
?>
<br />
<b>Please insert the exact name of the album which you want to add!</b><br>
<h2><form method="get" action="">
Type album name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="albumname" value="" size=20><br>
Type quantity for stock:<input type="text" name="insertstock" value="" size=20></h2><br>
<input type="submit" value="Insert quantities">

<?php 
	if(isset($_GET['insertstock'])&&($_GET['albumname'])){
		$albumname=$_GET['albumname'];
		$insertstock=$_GET['insertstock'];
		
		if(is_numeric($_GET['insertstock'])){
		?>
			<b><?php echo "Product added";?></b>
		<?php
		}else{
			echo "Invalid number";
			require_once("checkstock.php");
			exit();
		
		}	
		$query="SELECT Stock FROM cd WHERE Title='$albumname'";
		$result=mysqli_query($con,$query);
		$row=mysqli_num_rows($result);
		$i=1;
		while($i<=$row){
			$updatestock=mysqli_fetch_array($result);
			$query="UPDATE cd SET Stock='$insertstock' WHERE Title='$albumname'";
			$result=mysqli_query($con,$query);
			$i++;
		}
	}
	
	mysqli_close($con);
	
?>
<table>
</form>
</body>
</html>

