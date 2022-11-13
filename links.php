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
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-fw fa-cogs"></i> Builds
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="builds.php">Recommended Builds</a>
                    <a href="ubuilds.php">User Builds</a>
                    <?php if(isset($uname_db)){
                        echo"<a href='add_build.php'>Add a Build</a>";
                        echo"<a href='per_builds.php'>My Builds</a>";
                    } ?>
                </div>
            </div>
            <a href="links.php" class="selectedmenu"><i class="fa fa-fw fa-link"></i> Links</a>
        </nav>
        <h1 class="titles">Links to different indian pages</h1>
        <h1 class="titles">THIS IS TEMP LAYOUT</h1>
        <div class="names">
            <table> 
                    <tr>
                        <th>Website Name</th>
                        <th>Link</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <th>The IT Depot</th>
                        <th><a href="https://www.theitdepot.com/">TheITDEPOT</a></th>
                        <th>A store based in South India etc</th>
                    </tr>
                    <tr>
                        <th>Vedant Computers</th>
                        <th><a href="https://www.vedantcomputers.com/">Vedant Computers</a></th>
                        <th>A store based from mumbai, etc...</th>
                    </tr>
                    <tr>
                        <th>MD Computers</th>
                        <th><a href="https://mdcomputers.in/">MD Computers</a></th>
                        <th>A store from Kolkata, etc...</th>
                    </tr>
                    <tr>
                        <th>PrimeABGB</th>
                        <th><a href="https://www.primeabgb.com/">PrimeABGB</a></th>
                        <th>A store best for new stuff,etc....</th>
                    </tr>
                    <tr>
                        <th>TPS Tech</th>
                        <th><a href="https://www.tpstech.in/">TPS Tech</a></th>
                        <th>A store for unique stuff, etc...</th>
                    </tr>
                </div>
            </table>
        </div>
    </body>
</html>