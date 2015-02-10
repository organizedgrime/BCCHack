
<?php
include '../sql-connections/sql-connect.php' ;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title><?php echo $feedback_title_ns; ?> </title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>

<body>
<div style="text-align:center;">
<a class="style3" href='index.php'><img src="Home.png" height='24'; width='24'></br>HOME</a>
</div>
<font class="style3">
<div style="text-align:center">

<form name="mylogin" method="POST" action="login_create.php">

<h2 style="text-align:center;background-image:url('Less-20.jpg');background-repeat:no-repeat;background-position:center center">
<div style="padding-top:300px;text-align:center;color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;"><?php echo $form_title_ns; ?></div>
</h2>

<div align="center">
<table style="margin-top:50px;">
<tr>
<td style="text-align:right">
<font class="style3">
<strong>Desired Username:</strong></font>
</td>
	<td style="text-align:left">
		<input name="username" id="username" type="text" value="" /> 
	</td>
</tr>
<tr>
<td style="text-align:right">
<font class="style3">
	<strong>Password:</strong>
</font>
</td>
<td style="text-align:left">
	<input name="password" id="password" type="password" value="" />
</td>
</tr>
<tr>
<td style="text-align:right">
<font class="style3">
<strong>Retype Password:</strong>
</font>
</td>
<td style="text-align:left">
	<input name="re_password" id="re_password" type="password" value="" />
</td>
</tr>
<tr>
<td colspan="2" class="style3">
<input name="submit" id="submit" type="submit" value="Register" /><br/><br/>
</td>
</tr>
</table>
</div>
</form>
</div>
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>