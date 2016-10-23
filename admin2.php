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
c{
	font-family: 'Audiowide',cursive;
	color:#2E0852;
	font-size:20;

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
	margin-left:95px;
	-webkit-box-shadow: 1px 1px 1px 1px #000;

	}
input[type=text]{
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

h2{
	margin-top:50px;
	margin-left:100px;
	font-size:25;
	font-family:'Audiowide';
	color:#7F00FF;
	
}

table{
	margin-top:0px;
	margin-left:auto;
	margin-right:auto;
	background-color:#404040;
	font-size:25;
	text-align:center;
	font-weight:bold;
	font-family: 'Audiowide',cursive;
	}
button[type=button] {
	margin-left:95px;
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

</style>
	<form method="get" action="">
	<h2>Album:<input type="text" name="albumname" value="" size=20 ></h2>
	<h2>Set/Update price for album:<input type="text" name="setprice" value="" size=20></h2><br />
	<input type="submit" value="Update Price">
	<br>
	<button type="button" onclick="location.href='admin.php'">Back</button>
	<br>
	</form>
	<table cellspacing="9" >
			<tr>
				<th>Title</th>
				<th>Artist</th>
				<th>Price</th>
			</tr>
	<?php
	$con=mysqli_connect("localhost","root","","eshop");
	if(!$con){
		die('Could not connect'.mysql_error());
	}
		
		$sql="SELECT * FROM cd";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
		while($result=mysqli_fetch_array($query)){
			?>
		<tr>
			<td><?php echo $result['Title']?></td>
			<td><?php echo $result['Artist']?></td>
			<td><?php echo $result['Price']?> &#8364</td>
		</tr>
		<?php
		}
		if(!is_numeric($_GET['setprice'])){
			?>
				<c><?php echo "Invalid price for album";?></c>
				<?php
				//require_once("admin.php");
				exit();
			}else{
				$setprice=$_GET['setprice'];
				$albumname=$_GET['albumname'];
				$query="SELECT Title,Price FROM cd WHERE Title='$albumname'";
				$result=mysqli_query($con,$query);
				$row=mysqli_num_rows($result);
				$i=1;
				while($i<=$row){
					$apotelesma=mysqli_fetch_array($result);
					$query="UPDATE cd SET Price='$setprice' WHERE Title='$albumname'";
					$result=mysqli_query($con,$query);
					?>
					<c><?php echo "Price has been set";?></c>
					<?php
					$i++;
				}
			}
			mysqli_close($con);
?>
</html>