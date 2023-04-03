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
if (isset($_REQUEST['pcid'])) {
	$pcid = mysqli_real_escape_string($con,$_REQUEST['pcid']);
}else {
	header('location: index.php');
}


$getposts = mysqli_query($con,"SELECT * FROM ubuilds WHERE id ='$pcid'") or die(mysql_error());
					if (mysqli_num_rows($getposts)) {
						$row = mysqli_fetch_assoc($getposts);
						$id = $row['id'];
						$pcName = $row['name'];
                        $cpu = $row['cpu'];
                        $gpu = $row['gpu'];
                        $ram = $row['ram'];
						$price = $row['price'];
                        $bdate = $row['build_date'];
						$description = $row['description'];
						$picture = $row['image'];
                        $owner=$row['user'];
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
	<div style="margin: 0 97px; padding: 10px">

		<?php 
			echo '
				<div style="float: left;">
				<div>
					<img src="images/'.$picture.'" style="height: 400px; width: 350px; padding: 2px; border: 2px solid #7C63F7;">
				</div>
				</div>
				<div style="float: right;width: 60%;color: rgba(241, 238, 255, 0.95);background-color: #361d61;padding: 10px;">
					<div class="names">
						<h3 style="font-size: 23px; font-weight: bold; ">'.$pcName.'<br><br> Built by: '.$owner.'</h3><hr>
                        <h3 style="font-size: 20px; font-weight: bold; ">Configuration: <br><br> 
                        CPU: '.$cpu.'<br>
                        GPU: '.$gpu.'<br>
                        RAM: '.$ram.'
                        </h3><hr>
						<h3 style="font-size: 20px;">Total Cost: <br> Rs. '.$price.'</h3><hr>
						<h3 style="font-size: 20px; ">Description:</h3>
						<p style="font-size:20px">
							'.$description.'
						</p>

					</div>
				</div>
			';
		?>

	</div>
	<div style="padding: 30px 95px; font-size: 25px;display: table;">
		<h3 style="padding-bottom: 20px;color: #7C63F7">Other PCs by the user:</h3>
		<div>
		<?php 
			$getposts = mysqli_query($con,"SELECT * FROM ubuilds WHERE id != '".$pcid."' AND user ='".$owner."' ORDER BY RAND() LIMIT 3") or die(mysql_error());
					if (mysqli_num_rows($getposts)) {
					echo '<ul id="recs">';
					while ($row = mysqli_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['name'];
						$price = $row['price'];
						$description = $row['description'];
						$picture = $row['image'];
						
						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;list-style-type: none;">
									<div class="home-prodlist-img"><a href="view_pc.php?pcid='.$id.'">
                                        <img src="images/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;font-family: Poppins;font-style: normal;font-weight: 500;color: #7C63F7;font-size:15px"> <span style="font-size: 25px;font-family: Poppins;font-style: normal;font-weight: 500;color: #7C63F7">'.$pName.'</span><br> Price: Rs.'.$price.'</div>
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
