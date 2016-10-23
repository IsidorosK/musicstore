<html>
<img src="http://mixhdwallpapers.com/wp-content/uploads/2014/04/1110.jpg" id="bg" alt="">
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
	
	border 5px solid black;
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

}
button[type=button] {
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
<Title>MusicStore Register</Title>
<h1>REGISTER NOW!</h1>
<body>
<form style="background-color:#262626" action="user.php" method="post">
Username:<br>
<input type="text" name="username" value="" size=20>
<br>
Password:<br>
<input type="password" name="password" value="" size=20>
<br>
Name:<br>
<input type="text" name="name" value="" size=20>
<br>
Surname:<br>
<input type="text" name="surname" value="" size=20>
<br>
email:<br>
<input type="email" name="email" value="" size=20>
<br>
Credit card number:<br>
<input type="text" name="creditcard" value="" size=20>
<br>
Address:<br>
<input type="text" name="address" value="" size=20>
<br>
PhoneNumber:<br>
<input type="text" name="cellphone" value="" size=20>
<br>
<br>

<input type="submit">
<input type="reset">
<button type="button" onclick="location.href='main.php'">Sign-In</button><br> 
<?php if(isset($_GET['username'])){
	echo "No username entry";
}
?>
</form>
</body>
</html>
