<?PHP
session_start();
if (!isset($_COOKIE["Auth"]))
{
	if (!isset($_SESSION["username"])) 
	{
   		header('Location: index.php');
	}
	header('Location: index.php');
}
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>
<body>
<div style="text-align:center;">
<a class="style3" href='index.php'><img src="Home.png" height='24'; width='24'></br>HOME</a></br></br></br>
</div>
<center>
<img src="Less-20.jpg" width="716" height="70"></br><font class="style3"></br></br>
YOU ARE LOGGED IN AS </br> 
<font size="7" color="#900"><strong>
<?php
echo $_SESSION["username"];
?>
</strong>
</br>
</br>
<font class="style3">
You can Change your password here.


<form name="mylogin" method="POST" action="pass_change.php">
<table style="margin-top:50px;">
<tr>
<td style="text-align:right">
<font class="style3">
<strong>Current Password:</strong></font>
</td>
	<td style="text-align:left">
		<input name="current_password" id="current_password" type="text" value="" /> 
	</td>
</tr>
<tr>
<td style="text-align:right">
<font class="style3">
	<strong>New Password:</strong>
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
<td colspan="2" style="text-align:right">
<input name="submit" id="submit" type="submit" value="Reset" />
</td>
</tr>
<tr>
<td colspan="2" style="text-align:right">
<input name="submit1" id="submit1" type="submit" value="Logout" /><br/><br/>
</td>
</tr>
</table>
</center>
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>