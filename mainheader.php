<?php include ( "db.php" ); ?>
<?php 
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
<title>PC Building Helper</title>
        <link rel="icon" type="image/x-icon" href="images/icon.ico">
        <nav class="menu">
            <a href="index.php" class="title">PC BUILDING HELPER</a>
					<?php 
						if ($user!="") {
							echo '<a class="all" href="logout.php">LogOut</a>';
						}
						else {
							echo '<a class="all" href="signup.php">Signup</a>';
						}
					 ?>
					<?php 
						if ($user!="") {
							echo '<a class="all" href="profile.php?uid='.$user.'">'.$uname_db.'</a>';
						}
						else {
							echo '<a class="all" href="login.php">LogIn</a>';
						}
					 ?>
                     <a href="links.php" class="all"> Links</a>
            <div class="dropdown" class="all">
                <button class="dropbtn"> Build
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
            <a href="compcheck.php" class="all">Compatibility Checker</a>
        </nav>