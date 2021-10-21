<?php 
    $con = new mysqli('localhost','root','','medical');
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/People-Health-Pharmacy-Project-main/People-Health-Pharmacy-Project/medical";
?>