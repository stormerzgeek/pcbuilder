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

$name = "";
$cpu = "";
$gpu = "";
$ram = "";
$desc = "";
$cost = "";
$bdate = "";


if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"images/".$file_name);
 }

 if($_POST){
    $name =$_POST['name'];
    $cpu = $_POST['cpu'];
    $gpu = $_POST['gpu'];
    $ram = $_POST['ram'];
    $desc = $_POST['desc'];
    $cost = $_POST['cost'];
    $bdate = $_POST['bdate'];

    $insertbuild = "insert into ubuilds (name,user,cpu,gpu,ram,description,price,build_date,image) values('".$name."','".$uname_db."','".$cpu."','".$gpu."','".$ram."','".$desc."','".$cost."','".$bdate."','".$file_name."')";
    mysqli_query($con,$insertbuild);
    header("location: profile.php?uid=".$user."");
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
      <form action="" method="POST" enctype="multipart/form-data">
            <?php
                if(isset($uname_db)){
                echo '  
                <h1 class="headingmain" style="text-align:center;">Enter your Build Details</h1>
                <div style="text-align:center;">
                    <input name="name" placeholder="PC Build Name" required="required" type="text" value="'.$name.'"><br><br>
                    <input name="cpu" placeholder="CPU Model" required="required" type="text" value="'.$cpu.'"><br><br>
                    <input name="gpu" placeholder="GPU Model" required="required" type="text" value="'.$gpu.'"><br><br>
                    <input name="ram" placeholder="RAM Size" required="required" type="text" value="'.$ram.'"><br><br>
                    <input name="desc" placeholder="Description of the PC" required="required" type="text" value="'.$desc.'"><br><br>
                    <input name="cost" placeholder="Cost of the build" required="required" type="text" value="'.$cost.'"><br><br>
                    <input name="bdate" placeholder="Build Date" required="required" type="text" value="'.$bdate.'"><br><br>
                    <input type="file" name="image" required="required">
                    <input name="Submit" class="uisignupbutton signupbutton" type="submit" value="Submit">
                    </div>';
                }
                else{
                    echo '<h1 class="headingmain" style="text-align:center;">Please login to add your personal build</h1>';
                }
                ?>
      </form>
   </body>
</html>