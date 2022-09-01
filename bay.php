<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title> Bay </title>
        <link rel="stylesheet" href="css/cs.css">
    </head>
    <body background="img/rr.jpg">
      <header>
        <h1> MO group_store </h1>
      </header>
<div class="oo">
  <a href="index.php"> home</a>
</div>


          <div class="con">
              <div class="j h">
                </div>
                <div class="f-right">
<form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
if(isset($_REQUEST['account']) & isset($_REQUEST['password']) ){
	if($_REQUEST['account'] == ''){
		echo 'الرجاء إدخال اسم الحساب';
		exit();
	}else if($_REQUEST['password'] == ''){
		echo 'الرجاء كتابة كلمة مرور';
		exit();
	}	
	include("connect.php");
	$account = $_REQUEST['account'];
	$sql ="select * from login WHERE account = '$account' LIMIT 1";
	$result = $con->query($sql);
	
	if($result->num_rows > 0 ){
		while($row = $result->fetch_assoc()) {
			if($row['password'] == $_REQUEST['password']){
			echo  " تم الشراء بنجاح";	
			}else{
				echo 'كلمة سر غير صحيحة';
			}
		}
	}else{
		echo 'حساب غير صحيح';
	}
	exit();
mysqli_close($con);
	}
?>
      <lable for="account">Accuont</lable>
      <input type="text" name="account" placeholder="Account">
      <br>
      <lable for="password">Password</lable>
      <input type="password" name="password" placeholder="Password">

<br> <br>
<div class="a-btn">
          <input type="submit" value= "Bay">
          <br> <br>
          <a href="index.php" > <input type="button" value= "HOME"> </a>
        </div>
</form>
  </div>
    </div>
      </div>

  </body>
  </html>
