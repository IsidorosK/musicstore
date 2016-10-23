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
<html>
<img src="http://wallpapersdesk.net/wp-content/uploads/2015/05/2901_vinyl.jpg" id="bg" alt="">
<Title>MusicStore</Title>
<head>
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<meta charset="UTF-8"> 
<style>
#bg {
	position: fixed; 
	top: 0; 
	left: 0;
	min-width: 100%;
	min-height: 100%;
	z-index:-1;}

h1{
	color:#7F00FF;
	text-align:center;
	font-family: 'Audiowide',cursive;
	font-size:60;
	background-color:black;
	border:solid;
	border-radius:5px;
	transition:background .5s;

}

h1{
	-webkit-animation:background 5s ease-in-out infinite alternate;
	animation:background 5s ease-in-out infinite alternate 45dg;


}

@-webkit-keyframes background{
	0%{background-color:black;}
	33%{background-color:#2E0852;}
	67%{background-color:#551A8B;}
	100%{background-color:black;}


}

h2{
	text-align:right;
	font-family: 'Audiowide',cursive;
	color:#fff;
	




}

c{
	font-family: 'Audiowide',cursive;
	color:#2E0852;
	font-size:40;

}
d{
	color:#2E0852;
	font-size:16;
	font-weight:bold;
	font-family:Verdana;
	


}
e{
	color:#2E0852;
	font-size:20;
	font-family:'Audiowide',cursive;
	text-align:center;
	text-decoration:underline;
	margin-left:40px;

}
select{
	color:#2E0852;
	font-family:'Audiowide',cursive;
	font-size:20;
	text-align:center;
	margin-left:40px;
	-webkit-border-radius: 5px;
    border-radius: 5px;
	padding:1px 75px;
	

}

f{
	color:#2E0852;
	font-family:'Audiowide',cursive;
	margin-left:40px;
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
	margin-left:40px;

}

button[type=button] {
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

.bottomleft{
			position:absolute;
			font-size:18px;
			font-family: 'Audiowide',cursive;
			color:white;
			bottom:10px;
			left:500px;
			
			}


</style>
</head>

<form>

<h1>W&nbsp;E&nbsp;L&nbsp;C&nbsp;O&nbsp;M&nbsp;E <?php echo $_SESSION['username'];?></h1><br>
<h2>Our shop wishes to all users happy new year!</h2>

<c>Available Albums:</c>
<br>

<d>Για τα αλμπουμ που δεν ειναι διαθεσιμα ,μπορειτε να μας στειλετε email στο ergasiantoni@musicstore.com και στο τηλεφωνο επικοινωνιας +22310 27541</d><br>
<br><e>Search albums by Genre:</e><br><select name="genre">
	<option value=""></option>
	<option value="Rock">Rock</option>
	<option value="Greek">Greek</option>
	<option value="Metal">Metal</option>
	<option value="House">House</option>
	<option value="Pop">Pop</option>
	<option value="Jazz">Jazz</option>
	<option value="Classical">Classical</option>
	<option value="Hip Hop">Hip Hop</option>
	<option value="R&B and soul">RnB and soul</option>
	<option value="Country">Country</option>
	<option value="Hard Rock">Hard Rock</option>
	<option value="Soundtrack">Soundtrack</option>
	</select><br>
	<f>Album:</f><br>
	<table>
		<tr>
			<th><f>Title</f></th>
			<th><f>Artist</f></th>
		</tr>
<?php if(isset($_GET['Search'])){
		$search_val=$_GET['genre'];
		$sql="SELECT ID,Genre,Title,Artist FROM cd";
		$query=mysqli_query($con,$sql);
		$row=mysqli_num_rows($query);
		$i=1;
		while($i<=$row){
			$apotelesma=mysqli_fetch_array($query);
			if($search_val==$apotelesma['Genre']){
	?>
		<tr>
			<td><f><?php echo $apotelesma['Title']; ?></f></td>
			<td><f><?php echo $apotelesma['Artist']; ?></f></td>
			<td><f><a href="cart.php?page=cart&action=add&id=<?php echo $apotelesma['ID'] ?>">&nbsp;Add to Cart&nbsp;</a></f></td>
		</tr>
	<?php		
			}
			$i++;
		}
	}
		mysqli_close($con);
?>
	</table>
<input type="submit" name="Search" value="Search by Genre"><br>
</form>

<f>Your latest transactions:</f><br>
<form action="cart.php" method="post">
<input type="submit" value="Proceed to Cart"><br>
<button type="button" onclick="location.href='history.php'">Purchase history</button><br />
<button type="button" onclick="location.href='products.php'">Go to Products</button><br />
<button type="button" onclick="location.href='changePass.php'">Change Password</button><br>
<button type="button" onclick="location.href='logout.php'">Logout</button><br> 

</form>
</html>