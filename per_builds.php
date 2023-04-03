<?php include ( "db.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($con,"SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysqli_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}   
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="images/icon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            $con = mysqli_connect("localhost","root","") or die("Error ".mysqli_error($con));
            mysqli_select_db($con,'pcbuilder') or die("cannot select DB"); ?>
    </head>
	<body>
    <?php include ( "mainheader.php" ); ?>
        <div style="padding: 30px 120px; font-size: 25px; margin: 0 auto; display: table;">
		<div>
		<?php 
			$getposts = mysqli_query($con,"SELECT * FROM ubuilds where user='".$uname_db."'") or die(mysql_error());
					if (mysqli_num_rows($getposts)) {
					echo '<ul id="recs">';
					while ($row = mysqli_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['name'];
						$price = $row['price'];
						$picture = $row['image'];
						$owner=$row['user'];
						
						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;list-style-type: none;">
									<div class="home-prodlist-img"><a href="view_pc.php?pcid='.$id.'">
										<img src="images/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> 
										<span style="font-size: 25px;font-family: Poppins;font-style: normal;font-weight: 500;color: #7C63F7">Name: '.$pName.'</span><br>
										<span style="font-size: 20px;font-family: Poppins;font-style: normal;font-weight: 500;color: #7C63F7"> Cost: Rs. '.$price.'</span><br>
										<span style="font-size: 20px;font-family: Poppins;font-style: normal;font-weight: 500;color: #7C63F7"> By User: '.$owner.'</span>
										</div>
									</div>
									
								</li>
							</ul>
						';

						}
				}
		?>
			
		</div>
	</div>
    </body>
</html>