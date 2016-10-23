<?php 
session_start();
if(empty($_SESSION['admin'])){
		header('Location:main.php');
	}
?>


<html>
<img src="http://wallpapersdesk.net/wp-content/uploads/2015/05/2901_vinyl.jpg" id="bg" alt="">
<head>
<div class="registercdform">
</div>



<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<meta charset="utf-8">



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
	
	font-size:45;
	font-family: 'Audiowide', cursive;
	font-weight:bold;
	color:#9B30FF;
	background-color:black;
	text-align:center;
	text-shadow:2px 2px dove gray;
}

	

a{
	
	position:fixed;
	text-align:center;
	font-size:35;
	font-family:'Audiowide', cursive;
	color:#7F00FF;
	background-color:#303030;
	letter-spacing:3px;
	
}	
input[type=submit] {
    padding:10px 25px; 
	color:#7F00FF;
	font-family: 'Audiowide';
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;}

input[type=reset] {
    padding:10px 25px; 
	color:#7F00FF;
	font-family: 'Audiowide';
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;}
	
button[type=button] {
	padding:10px 25px; 
	color:#7F00FF;
	font-family: 'Audiowide';
	font-size:20;
    background:black; 
    border:2 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;



}
select{
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
	







<fullscreen-bg>
</style>
<body>

<form action="registercd.php" method="POST">
<h1>Register new disks</h1>
<div style="width:400px; margin-right:auto;margin-left:auto;border:1px;">
<a>Title:<br><input type="text" name="title" value="" size=20><br>
Artist:<br><input type="text" name="artist" value="" size=20><br>
Company:<br><input type="text" name="company" value=""size=20><br>
Genre:<br><select name="genre">
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
Year:<br><input type="text" name="year" value="" size=20><br>
Price:<br><input type="text" name="price" value="" size=20><br>
Stock:<br><input type="text" name="stock" value="" size=20><br>
<input type="submit" name=Submit">
<input type="reset" name="Reset">
<button type="button" onclick="location.href='admin.php'">Back</button><br>
</a></div>

</body>
</html>

