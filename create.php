<!DOCTYPE html>
<html>				
    <head>
        <meta charset="utf-8">
        <title> rigester </title>
        <link rel="stylesheet" href="css/cs.css">
    </head>
    <body>
      <header>
        <h1>Welcome to MO group_store</h1>
      </header>
<div class="oo">
  <a href="index.php"> home</a>
</div>

        <div class="con">

        <div class="j h">
            <div class="f-right">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<?php
				if(isset($_REQUEST['name'])){
				include("connect.php");
				$name = $_REQUEST['name'];
				$sql ="insert into login values ('','$name','$_REQUEST[address]','$_REQUEST[phone]','$_REQUEST[account]','$_REQUEST[password]')";
				mysqli_query($con,$sql);
				echo "تم التسجيل ";
				exit();
				mysqli_close($con);
				}
				?>
                    <label for="name"> Name </label>
                    <input type="text" name="name" placeholder="Name">
                    <br>
                    <label for="address"> Address </label>
                    <input type="text" name="address" placeholder="Address">
                    <br>
                    <label for="phone"> Phone  </label>
                    <input type="text" name="phone" placeholder="Phone Number">
                    <br>
                    <lable for="account">Accuont</lable>
                    <input type="text" name="account" placeholder="Account">
                    <br>
                    <lable for="password">Password</lable>
                    <input type="password" name="password" placeholder="Password">


                    <div class="a-btn">
                     <input type="submit" value= "rigester">
                    </div>
                </from>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
