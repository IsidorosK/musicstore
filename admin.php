<html>
	<?php
	session_start();
	?><c><?php echo "Hello"." ".$_SESSION['admin']."<br>";?></c>
	<?php
	if(empty($_SESSION['admin'])){
		header('Location:main.php');
	}

	?>

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
	
c{
	font-family: 'Audiowide',cursive;
	color:#2E0852;
	font-size:40;

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
a{color:#2E0852;
	font-family:'Audiowide',cursive;
	margin-left:40px;
	font-size:20;
	}
	
table{
	
	background-color:#404040;
	font-size:25;
	text-align:left;
	font-weight:bold;
	margin-left:40px;
	text-align:center;
	

}

a{color:#2E0854;

}

b{
	margin-top:-30px;
	margin-left:1250;
	




}


c{
	position:fixed;
	margin-left:250;
	margin-top:40;
	
	
	





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

	border-style:solid;
	border-radius:5px;
	border-color:black;
	-webkit-box-shadow: 1px 1px 1px 1px #000;




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
	overflow:scroll;
	
	

}
br{
	display:block;
	margin:8px 0;
	content:"";
	line-height:9px;

}



</style>
</head>
<body>

	
<b><button type="button" onclick="location.href='logout.php'">Logout</button></b><br>

<c><br><button type="button" onclick="location.href='registercdform.php'">New cd</button><br>
<br>
<button type="button" onclick="location.href='checkstock.php'">Stock</button><br>
<br>

<br>
<button type="button" onclick="location.href='admin2.php'">Update Price(Sales)</button><br />
<br>
<button type="button" onclick="location.href='admin3.php'">Delete User</button><br />
<br>
<!--<a>Album:</a><input type="text" name="albumname" value="" size=20 ><br />
<a>Set/Update price for album:</a><input type="text" name="setprice" value="" size=20><br />
<form method="GET" action="admin2.php">
<input type="submit" value="Update Price"><br /></c>
-->
<?php
	//$setprice=$_GET['setprice'];				
	//header('Refresh:4;URL=http://localhost/admin.php');				
?>
	</table>
</form>

</body>
</html>