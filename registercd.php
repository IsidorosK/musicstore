<?php
$con=mysqli_connect("localhost","root","","eshop");
if(!$con){
	die('Could not connect:'.mysql_error());
}

$title=mysqli_real_escape_string($con,$_POST['title']);
$artist=mysqli_real_escape_string($con,$_POST['artist']);
$company=mysqli_real_escape_string($con,$_POST['company']);
$genre=mysqli_real_escape_string($con,$_POST['genre']);
$year=mysqli_real_escape_string($con,$_POST['year']);
$price=mysqli_real_escape_string($con,$_POST['price']);
$stock=mysqli_real_escape_string($con,$_POST['stock']);

if(empty($title)||empty($artist)||empty($company)||empty($genre)||empty($year)||empty($price)||empty($stock)){
	header('Location:registercdform.php');
}else{
		$insert_query="INSERT INTO cd(Title,Artist,Company,Genre,Year,Price,Stock) VALUES('$title','$artist','$company','$genre','$year','$price','$stock')";
		$result=mysqli_query($con,$insert_query);
		if(mysqli_affected_rows($con)>0){
			echo "cd added"."<br>";
			//require_once("registercdform.htm");
			}else{
				echo "cd not added"."<br";
				echo mysqli_error($con);
			}
	mysqli_close($con);
	
}
include("registercdform.php");
?>

