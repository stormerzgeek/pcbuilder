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
        <link rel="icon" type="image/x-icon" href="images/icon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php
            $con = mysqli_connect("localhost","root","") or die("Error ".mysqli_error($con));
            mysqli_select_db($con,'pcbuilder') or die("cannot select DB"); ?>
    </head>
    <body>
    <?php include ( "mainheader.php" ); ?>
      <form action="" method="POST" enctype="multipart/form-data">
            <?php
                if(isset($uname_db)){
                echo '  
                <h1 class="titles">Enter your Build Details</h1>
                <div style="text-align:center;">
                    <input name="name" placeholder="PC Build Name" required="required" type="text" value="'.$name.'"><br><br>
                    <input name="cpu" placeholder="CPU Model" required="required" type="text" value="'.$cpu.'"><br><br>
                    <input name="gpu" placeholder="GPU Model" required="required" type="text" value="'.$gpu.'"><br><br>
                    <input name="ram" placeholder="RAM Size" required="required" type="text" value="'.$ram.'"><br><br>
                    <input name="desc" placeholder="Description of the PC" required="required" type="text" value="'.$desc.'"><br><br>
                    <input name="cost" placeholder="Cost of the build" required="required" type="text" value="'.$cost.'"><br><br>
                    <input name="bdate" placeholder="Build Date" required="required" type="text" value="'.$bdate.'"><br><br>
                    <input type="file" name="image" required="required"><br><br>
                    <input name="Submit" class="submitcomp" type="submit" value="Submit">
                    </div>';
                }
                else{
                    echo '<h1 class="headingmain" style="text-align:center;">Please login to add your personal build</h1>';
                }
                ?>
      </form>
   </body>
</html>