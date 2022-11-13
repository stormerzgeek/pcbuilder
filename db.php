<?php
    $con = mysqli_connect("localhost","root","") or die("Error ".mysqli_error($con));
    mysqli_select_db($con,'pcbuilder') or die("cannot select DB"); 
?>