<?php
	session_start();
	//echo $_SESSION['email'];
	if(isset( $_SESSION['email']))
		header('Location: profile.php') && exit() && die();
//	if(isset( $_SESSION['pass']))
//		echo  '<h1>' . $_SESSION['pass'] . '</h1>';
			
?>

<html>
	
<style>

td{text-align: center;
//background: #ffffff;
//border-style: solid;
//border-color:#000000;
color: #ffffff;
}

h1{//text-align: center;
//background: #ffffff;
//border-style: solid;
//border-color:#000000;
padding-top: 17px;
//padding-right: 50px;
//padding-bottom: 25px;
padding-left: 20px;
color: #ffffff;
font-size: 80px;}

body{text-align: left;
background: url("http://i.imgur.com/G9umvu3.png");
font-family: "Century Gothic", Century Gothic, sans-serif;
padding-top: 305px;
//padding-right: 50px;
//padding-bottom: 25px;
padding-left: 90px;}		
		
</style>

<head>
	
<title>Fantasy Football 2015</title>

</head>

<body>

<br>
<table align='left' >
<tr>
<td>
<h3>  Sign In / Sign Up  </h3>
</td>
<!--<td>
<h3>  Or Enter your login details  </h3>
</td>-->

<div id="boxTool_2" objtype="5" style="width: 375px; height: 321px; border: 1px solid rgb(51, 51, 51);
position: absolute; top: 305px; left: 48px; z-index: -1; background-color: rgb(189, 150, 71); box-shadow: rgb(0, 0, 0) 2px 2px 15px 0px; border-radius: 20px;"
class=""></div>

<img id="image_3" border="0" src="http://i.imgur.com/qbz1N4p.png" objtype="0"
style="width: 396px; height: 348px; position: absolute; top: 33px; left: 890px; z-index: 3;" />

<div id="txtBox_4" objtype="2" style="width: 951px; height: 230px; position: absolute; padding: 10px; top: 16px; left: 12px; z-index: 4; " class="">
  <span style="font-weight: bold;">
    <span style="font-family: 'Century Gothic';">
      <span style="font-size: 48pt;">
        <span style="color: rgb(189, 150, 71);">Are you ready for <br> the new 
          <span style="color: rgb(255, 255, 255);">fantasy <br> football</span> season?</span></span></span></span></div>

		    
<img id="image_5" border="0" src="http://i.imgur.com/5F5PIrd.png" objtype="0"
style="width: 821px; height: 211px; position: absolute; top: 416px; left: 459px;
border-radius: 14px; box-shadow: rgb(0, 0, 0) 4px 3px 7px 0px;" />
	  
		  

<tr>
<td>
<h3>Please enter your credentials:</h3>
<form action="login.php" method='POST'>
 Username: <br><input type='text' name = 's_username'> <br>
 Password : <br><input type='password' name='s_password'> <br>
<br>
<!--<br> <input type="hidden" name ="firstTime" value="second">-->
<input type='submit' value='Enter Fantasy Football!'>
</form>

</td>

<!--<td>
<h3>Student Registration:</h3>
<form action="stu_login.php" method="post">
 Username: <br><input type='text' name = 's_username'> <br>
 Password : <br><input type='password' name='s_password'> <br>
<br>
 <input type='submit' value='Login'>
</form>

<h3>Teacher Login:</h3>
<form action="tea_login.php" method="post">
 Username: <br><input type='text' name = 't_username'> <br>
 Password : <br> <input type='password' name='t_password'> <br>
<br>
 <input type='submit' value="Login">
</td>
</form>-->
</table>

<!--
<?php// $_SERVER['PHP_SELF']?>
<?php

//require 'login.php';

?>
-->

		
</body>

</html>
