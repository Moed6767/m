<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Home </title>
        <link rel="stylesheet" href="css/cs.css">
    </head>
    <body>
        <header>
<div class="oo">
<br>
      <a href="create.php">Create Accuont</a>
    </div>
	<div class="oo">
<br>
      <a href="cart.php">Cart</a>
	  
	  <?php
	include("connect.php");
	  $sql ="select * from cart";
	  $result = $con->query($sql);
	  if($result->num_rows > 0 ){
		  echo '<p>' . $result->num_rows . '</p>'; 
	   }else{echo '<p>0</p>';}
	  ?>
	  
    </div>
	

        <h1> MO group_store</h1>

        </header>
       

    </div>
	   <form class="f-form">

        <div class="photo">

            <a href="a.html"><img src="img/a.jpg" </a>
            <a href="c.html"><img src="img/c.jpg" </a>
            <a href="d.html"><img src="img/d.jpg" </a>
            <a href="f.html"><img src="img/f.jpg" </a>
			 <a href="mm.html"><img src="img/mm.jpg" </a>
			  <a href="aa.html"><img src="img/aa.jpg" </a>
			  <a href="dd.html"><img src="img/dd.jpg" </a>
			   <a href="ee.html"><img src="img/ee.jpg" </a>

        </div>
    </form>
    <div class="oo">
      <p>MO group_store<br>الخرطوم - جبره- شمال حمص للموبايلات </p>
      <br>
      <p>هاتف 0909000085 - 0900669788</p>
	  <br>
	 
	  
    </div>


 </body>
</html>
