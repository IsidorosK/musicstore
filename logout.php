<html>
	<img src="http://wallpapersdesk.net/wp-content/uploads/2015/05/2901_vinyl.jpg" id="bg" alt="">
	<style>
		#bg {
		position: fixed; 
		top: 0; 
		left: 0;
		min-width: 100%;
		min-height: 100%;
		z-index:-1;}
		
		f{
		color:#2E0852;
		font-family:'Audiowide',cursive;
		margin-left:40px;
		font-size:20;
		}
	
	</style>
	
	<?php
		session_start();
		session_destroy();
	?>
	<h3 align="center"><f><?php echo "You have been logged out";?></f></h3><br>
	<h3 align="center"><f><?php echo "We are hoping to see you soon"?></f></h3>
		<?php
	header('Refresh:3;URL=http://localhost/main.php');
		?>
</html>