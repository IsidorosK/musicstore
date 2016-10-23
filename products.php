<?php
	session_start();
	if(empty($_SESSION['username'])){
		header('Location:main.php');
	}
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect:'.mysql_error());
	}
?>

<h1>Products List</h1>

<?php
	if(isset($message)){
		echo "<h2>$message</h2>";
	}
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
	
table{
	margin-top:-40px;
	margin-left:auto;
	margin-right:auto;
	background-color:#404040;
	font-size:25;
	text-align:center;
	font-weight:bold;
	font-family: 'Audiowide',cursive;

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
a{
	padding:6px 21px; 
	color:#7F00FF;
	font-family:'Audiowide', cursive;
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;



}
a.c{
	font-size:30;
	margin-left:610px;
	


}
</style>
</head>
<a href="mainpage.php" class="c">Go back to homepage</a>
<br>
<br>
<br>
<br>
<table cellpadding="9">

	<tr>
	
		<th>Title</th>
		<th>Artist</th>
		<th>Price</th>
		<th>Action</th>
	</tr>
	<?php
		$sql="SELECT * FROM cd ORDER BY Title ASC";
		$query=mysqli_query($con,$sql);
		while($result=mysqli_fetch_array($query)){	
	?>
		<tr>
			<td><?php echo $result['Title']?></td>
			<td><?php echo $result['Artist']?></td>
			<td><?php echo $result['Price']?> &#8364 </td>
			<td><a href="cart.php?page=cart&action=add&id=<?php echo $result['ID']?>">&nbsp; Add to cart&nbsp;</a></td>
		</tr>
		
		<?php
		}
		mysqli_close($con);
		?>
		
</table>
<br>
<br>
<a href="mainpage.php" class="c">Go back to homepage</a>
</html>
