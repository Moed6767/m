<?php

include("connect.php");
echo $_REQUEST['account'];
$sql ="select * from login where accuont AND password =" . $_REQUEST['account'] . ",'" . $_REQUEST['password'] . "'";

$result = mysqli_query($con,$sql);

  echo  " تم الشراء بنجاح";




mysqli_close($con);
?>
