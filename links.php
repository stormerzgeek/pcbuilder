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
        <h1 class="titles">Links to different indian pages</h1> 
        <div class="names">
            <table> 
                    <tr>
                        <th>Website Name</th>
                        <th>Link</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <th>The IT Depot</th>
                        <th><a href="https://www.theitdepot.com/" style="color:#7C63F7;">TheITDEPOT</a></th>
                        <th>A store based in South India etc</th>
                    </tr>
                    <tr>
                        <th>Vedant Computers</th>
                        <th><a href="https://www.vedantcomputers.com/" style="color:#7C63F7;">Vedant Computers</a></th>
                        <th>A store based from mumbai, etc...</th>
                    </tr>
                    <tr>
                        <th>MD Computers</th>
                        <th><a href="https://mdcomputers.in/" style="color:#7C63F7;">MD Computers</a></th>
                        <th>A store from Kolkata, etc...</th>
                    </tr>
                    <tr>
                        <th>PrimeABGB</th>
                        <th><a href="https://www.primeabgb.com/" style="color:#7C63F7;">PrimeABGB</a></th>
                        <th>A store best for new stuff,etc....</th>
                    </tr>
                    <tr>
                        <th>TPS Tech</th>
                        <th><a href="https://www.tpstech.in/" style="color:#7C63F7;">TPS Tech</a></th>
                        <th>A store for unique stuff, etc...</th>
                    </tr>
                </div>
            </table>
        </div>
    </body>
</html>