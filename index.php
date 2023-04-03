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
        <link rel="icon" type="image/x-icon" href="images/icon.ico">
        <?php
            $con = mysqli_connect("localhost","root","") or die("Error ".mysqli_error($con));
            mysqli_select_db($con,'pcbuilder') or die("cannot select DB"); ?>
    </head>
    <body>
        <?php include ( "mainheader.php" ); ?>
        <div class="imagepos">
            <div class="homebodyimage"><img src="images/homeback.png"></a><div>
            <div class="hometext">The final site for everything in building a <font color="#8F78FF">custom PC</font></div>
            <div class="compbutton"><a href="compcheck.php" style="color:rgba(241, 238, 255, 0.95)">Check Compatibility</a></div>
            <div class="viewbutton"><a href="ubuilds.php">View Builds</a></div>
        </div>
        <div class="secondbod">
            <div class="featured">FEATURED BUILDS</div>
            <div class="footer">
                <nav class="menufoot">
                <a href="index.php" class="titlefoot">PC BUILDING HELPER</a>
                <a href="links.php" class="allfoot"> Links</a>
                <a href="ubuilds.php" class="allfoot">Builds</a>
                <a href="compcheck.php" class="allfoot">Compatibility Checker</a>
                </nav>
            </div>
        </div>
    </body>

</html>

