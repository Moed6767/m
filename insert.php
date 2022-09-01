<?php
include("connect.php");

$sql ="insert into login values ('$_REQUEST[name]','$_REQUEST[address]','$_REQUEST[phone]','$_REQUEST[account]','$_REQUEST[password]')";

mysqli_query($con,$sql);
echo "تم التسجيل ";
mysqli_close($con);
?>
