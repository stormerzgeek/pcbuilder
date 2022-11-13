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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            $con = mysqli_connect("localhost","root","") or die("Error ".mysqli_error($con));
            mysqli_select_db($con,'pcbuilder') or die("cannot select DB"); ?>
    </head>
    <body style="min-width: 980px;">
    <div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signup.php">SIGN UP</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
			</div>
        <title>PC Building Helper</title>
        <link rel="icon" type="image/x-icon" href="images/icon.ico">
        <header>
            <div class="headingmain">PC Building Helper</div>
            <div class="headingsub">The final site for everything in building a custom PC</div>   
        </header>
        <nav class="menu">
            <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="compcheck.php"><i class="fa fa-fw fa-search"></i> Compatibilty Checker</a>
            <div class="dropdown"><div  class="selectedmenu">
                <button class="dropbtn"><i class="fa fa-fw fa-cogs"></i> Builds
                <i class="fa fa-caret-down"></i>
                </button></div>
                <div class="dropdown-content">
                    <a href="builds.php">Recommended Builds</a>
                    <a href="ubuilds.php">User Builds</a>
                    <?php if(isset($uname_db)){
                        echo"<a href='add_build.php'>Add a Build</a>";
                        echo"<a href='per_builds.php'>My Builds</a>";
                    } ?>
                </div>
            </div>
            <a href="links.php"><i class="fa fa-fw fa-link"></i> Links</a>
        </nav>
	<div style="margin: 0 97px; padding: 10px">

		<?php 
			echo '
				<div style="float: left;">
				<div>
					<img src="images/'.$picture.'" style="height: 400px; width: 350px; padding: 2px; border: 2px solid #000000;">
				</div>
				</div>
				<div style="float: right;width: 60%;color: #067165;background-color: #ddd;padding: 10px;">
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
	<div style="padding: 30px 95px; font-size: 25px; margin: 0 auto; display: table; width: 98%;">
		<h3 style="padding-bottom: 20px">Other PCs by the user:</h3>
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
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$pName.'</span><br> Price: Rs.'.$price.'</div>
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
