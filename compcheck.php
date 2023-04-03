<!DOCTYPE html>
<?php
            $con = mysqli_connect("localhost","root","") or die("Error ".mysqli_error($con));
            mysqli_select_db($con,'pcbuilder') or die("cannot select DB"); 
            $cpusql = "select name from cpu";
            $resultcpubrand = mysqli_query($con, $cpusql) or die("Error ".mysqli_error($con));
            $gpusql = "select name from gpu";
            $resultgpubrand = mysqli_query($con, $gpusql) or die("Error ".mysqli_error($con));
            $mbsql = "select name from motherboard";
            $resultmbchip = mysqli_query($con, $mbsql) or die("Error ".mysqli_error($con));
            $mbffsql = "select name from mbformfactor";
            $resultmbff = mysqli_query($con, $mbffsql) or die("Error ".mysqli_error($con));
            $ramsssql = "select name from ramsizespeed";
            $resultramss = mysqli_query($con, $ramsssql) or die("Error ".mysqli_error($con));
            $ramcsql = "select name from ramcount";
            $resultramc = mysqli_query($con, $ramcsql) or die("Error ".mysqli_error($con));
        ?>
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
        <h1 class="titles">Compatibilty checking page</h1><br>
        <!-- <div style="text-align:center;"><img src="images/parts.jpg" alt="Custom PC"></div> -->
        <form method="POST">
        <table class="names">
            <tr>
                <th>CPU Brand: </th>
                <th>
                    <input name="cpubrandname" type="text" id="cpubrandname" autocomplete="off" list="cpubrandlist" class="newdata">
                    <datalist id="cpubrandlist" class="newdata">
                    <?php while($row = mysqli_fetch_array($resultcpubrand)) { ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </datalist>
                </th>
            </tr>
            <tr>
                <th>GPU Brand: </th>
                <th>
                    <form method="POST">
                    <input name="gpubrandname" type="text" id="gpubrandname" autocomplete="off" list="gpubrandlist">
                    <datalist id="gpubrandlist" class="newdata">
                    <?php while($row = mysqli_fetch_array($resultgpubrand)) { ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </datalist>
                    </form>
                </th>
            </tr>
            <tr>
                <th>Motherboard Chipset: </th>
                <th>
                    <input name="mbchipname" type="text" id="mbchipname" autocomplete="off" list="mbchiplist">
                    <datalist id="mbchiplist" class="newdata">
                    <?php while($row = mysqli_fetch_array($resultmbchip)) { ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </datalist>
                </th>
            </tr>
            <tr>
                <th>Motherboard Form Factor: </th>
                <th>
                    <input name="mbffname" type="text" id="mbffname" autocomplete="off" list="mbfflist">
                    <datalist id="mbfflist">
                    <?php while($row = mysqli_fetch_array($resultmbff)) { ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </datalist>
                </th>
            </tr>
            <tr>
                <th>RAM Size and Speed: </th>
                <th>
                    <input name="ramssname" type="text" id="ramssname" autocomplete="off" list="ramsslist">
                    <datalist id="ramsslist">
                    <?php while($row = mysqli_fetch_array($resultramss)) { ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </datalist>
                </th>
            </tr>
            <tr>
                <th>RAM Count: </th>
                <th>
                    <input name="ramcname" type="text" id="ramcname" autocomplete="off" list="ramclist">
                    <datalist id="ramclist">
                    <?php while($row = mysqli_fetch_array($resultramc)) { ?>
                    <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                    </datalist>
                </th>
            </tr>
            <tr><th colspan="2"><input type="submit" name="Submit" value="Check Compatibilty" class="submitcomp"/></th></tr>
        <table>
        
        </form>
        <?php
            error_reporting(0);
            if(isset($_POST['Submit'])) {
            $selectedcpu = $_POST['cpubrandname'];
            $selectedgpu = $_POST['gpubrandname'];
            $selectedmbchip = $_POST['mbchipname'];
            $selectedmbff = $_POST['mbffname'];
            $selectedramss = $_POST['ramssname'];
            $selectedramc = $_POST['ramcname'];
            }
            $searchquery1 = "select CASE WHEN EXISTS(select name from intel12thx4 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."') AND ((SELECT COUNT(*) FROM intel12thx4 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."'))=6)) THEN 'TRUE' ELSE 'FALSE' END as new";
            $resultsq1 = mysqli_query($con, $searchquery1) or die("Error ".mysqli_error($con));
            $row1 = mysqli_fetch_array($resultsq1);
            $searchquery2 = "select CASE WHEN EXISTS(select name from intel12thx2 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."') AND ((SELECT COUNT(*) FROM intel12thx2 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."'))=6)) THEN 'TRUE' ELSE 'FALSE' END as new";
            $resultsq2 = mysqli_query($con, $searchquery2) or die("Error ".mysqli_error($con));
            $row2 = mysqli_fetch_array($resultsq2);
            $searchquery3 = "select CASE WHEN EXISTS(select name from intel11thx4 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."') AND ((SELECT COUNT(*) FROM intel11thx4 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."'))=6)) THEN 'TRUE' ELSE 'FALSE' END as new";
            $resultsq3 = mysqli_query($con, $searchquery3) or die("Error ".mysqli_error($con));
            $row3 = mysqli_fetch_array($resultsq3);
            $searchquery4 = "select CASE WHEN EXISTS(select name from intel11thx2 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."') AND ((SELECT COUNT(*) FROM intel11thx2 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."'))=6)) THEN 'TRUE' ELSE 'FALSE' END as new";
            $resultsq4 = mysqli_query($con, $searchquery4) or die("Error ".mysqli_error($con));
            $row4 = mysqli_fetch_array($resultsq4);
            $searchquery5 = "select CASE WHEN EXISTS(select name from ryzen5thx4 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."') AND ((SELECT COUNT(*) FROM ryzen5thx4 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."'))=6)) THEN 'TRUE' ELSE 'FALSE' END as new";
            $resultsq5 = mysqli_query($con, $searchquery5) or die("Error ".mysqli_error($con));
            $row5 = mysqli_fetch_array($resultsq5);
            $searchquery6 = "select CASE WHEN EXISTS(select name from ryzen5thx2 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."') AND ((SELECT COUNT(*) FROM ryzen5thx2 WHERE name IN ('".$selectedcpu."','".$selectedgpu."','".$selectedmbchip."','".$selectedmbff."','".$selectedramss."','".$selectedramc."'))=6)) THEN 'TRUE' ELSE 'FALSE' END as new";
            $resultsq6 = mysqli_query($con, $searchquery6) or die("Error ".mysqli_error($con));
            $row6 = mysqli_fetch_array($resultsq6);
            if($selectedcpu!=NULL){
                if($row1['new']=='TRUE'){echo "<br><br><p class='outpu'>The selected parts are compatible</p>";}
                elseif($row2['new']=='TRUE'){echo "<br><br><p class='outpu'>The selected parts are compatible</p>";}
                elseif($row3['new']=='TRUE'){echo "<br><br><p class='outpu'>The selected parts are compatible</p>";}
                elseif($row4['new']=='TRUE'){echo "<br><br><p class='outpu'>The selected parts are compatible</p>";}
                elseif($row5['new']=='TRUE'){echo "<br><br><p class='outpu'>The selected parts are compatible</p>";}
                elseif($row6['new']=='TRUE'){echo "<br><br><p class='outpu'>The selected parts are compatible</p>";}
                else{
                    echo "<br><br><p class='outpu'>It is not compatible</p>";
                }       
            }
        ?>
        <?php mysqli_close($con); ?>
        </body>
</html>
