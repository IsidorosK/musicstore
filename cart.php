<?php
	session_start();
	if(empty($_SESSION['username'])){
		header('Location:main.php');
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
	color:#7F00FF;
	text-align:center;
	font-family:'Audiowide',cursive;
	font-size:30;
	border 5px solid black;
	position:relative;
	z-index:999;

}
table.center{
	margin-top:-90px;
	margin-left:auto;
	margin-right:auto;
	background-color:#404040;
	font-size:25;
	text-align:center;
	font-weight:bold;
	

}
a{color:#2E0854;}

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

}




</style>

</head>






<h1>Your Shopping Cart</h1>
<form method="post" action="checkout.php">
	<table cellspacing="9" class="center">
		<tr>
			
			<th><b>Title</b></th>
			
			<br>
			
			<th><b>Artist</b><th>
			
			<br>
			<th><b>Quantity</b></th>
			
			<br>
			<th><b>Price</b></th>
			
		</tr>
<?php
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect:'.mysql_error());
	}
	
	if(isset($_GET['id']) && is_numeric($_GET['id'])){
			$pid=$_GET['id'];
			$_SESSION['cart']=$pid;
			$sql="SELECT * FROM cd WHERE ID='$pid'";
			$query=mysqli_query($con,$sql);
			$row=mysqli_num_rows($query);
			$totalprice=0;
			while($result=mysqli_fetch_array($query)){
			
				
	?>
		<tr>
			<td><?php echo $result['Title'] ?></td>
			<td><?php echo $result['Artist']?></td>
			<td><td><input type="text" name="quantity" size="3" ></td></td>
			<td><?php echo $result['Price']?></td>
		</tr>
	<?php
			$totalprice=$result['Price'];
			$_SESSION['title']=$result['Title'];
			$_SESSION['artist']=$result['Artist'];
			$_SESSION['price']=$result['Price'];
			}
	?>
		<tr>
			<td  colspan="4">Total Price:<?php echo $totalprice ?>&#8364 </td>
	<?php
			
			}
		
	mysqli_close($con);
?>
	
	
	</table>
	<br>
	<a href="mainpage.php">Go back to home</a>
	
	
	<br>
	<a href="products.php">Back to products</a><br />
	<br>
	<br>
	<input type="submit" name="cart" value="Proceed to checkout">
</form>
</html>