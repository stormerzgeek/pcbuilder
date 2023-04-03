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
        <h1 class="titles">Page with recommended builds</h1>
        <table> 
            <tr>
                <th>Build Details</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            <tr>
                <th>12900ks<br>
                    3080ti<br>
                    z690
                </th>
                <th>Rs. 295,000<br><a href="sheets/12900ks.xlsx">Detailed Breakdown</a></th>
                <th>One of the most high end systems</th>
            </tr>
            <tr>
                <th>12700k<br>
                    3070ti<br>
                    z690
                </th>
                <th>Rs. 155,000<br><a href="sheets/12700k.xlsx">Detailed Breakdown</a></th>
                <th>Mid Range System</th>
            </tr>
            <tr>
                <th>5600x<br>
                    3060ti<br>
                    b550
                </th>
                <th>Rs. 95,000<br><a href="sheets/5600.xlsx">Detailed Breakdown</a></th>
                <th>Budget VFM Gaming System</th>
            </tr>
        </div>
    </table>
    </body>
</html>