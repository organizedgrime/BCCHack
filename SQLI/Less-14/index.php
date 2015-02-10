<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Less-14 ::HINT::- NO hint for this lesson</title>
    <link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>

<body>
<div style="text-align:center"><h1>Welcome&nbsp;&nbsp;<font color="#FF0000">to SQL injection Master Course</font></h1></div>

<div align="center" style="margin:0 auto; background-color:#E8E8E8; border:1px solid #666; text-align:center; width:400px; height:150px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">

<div style="padding-top:10px; font-size:15px;">
 

<!--Form to post the data for sql injections Error based SQL Injection-->
<form action="" name="form1" method="post">
	<div style="margin-top:15px; height:30px;">Username : &nbsp;&nbsp;&nbsp;
	    <input type="text"  name="uname" value=""/>
	</div>  
	<div> Password  : &nbsp;&nbsp;&nbsp;
		<input type="text" name="passwd" value=""/>
	</div></br>
	<div style=" margin-top:9px;margin-left:90px;">
		<input type="submit" name="submit" value="Submit" />
	</div>
</form>

</div></div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font class="style3">





<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");


// take the variables
if(isset($_POST['uname']) && isset($_POST['passwd']))
{
	$uname=$_POST['uname'];
	$passwd=$_POST['passwd'];

	// connectivity 
	@$sql="SELECT username, password FROM users WHERE username='$uname' and password='$passwd' LIMIT 0,1";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($row)
	{
  		//echo '<font color= "#0000ff">';	
  		
  		echo "<br>";
		echo '<font color= "#900" font size = 4>';
		//echo " You Have successfully logged in\n\n " ;
		echo '<font size="3" color="#0000ff">';	
		echo "<br>";
		//echo 'Your Login name:'. $row['username'];
		echo "<br>";
		//echo 'Your Password:' .$row['password'];
		echo "<br>";
		echo "</font>";
		echo "<br>";
		echo "<br>";
		echo '<img src="like.jpg"  />';	
		
  		echo "</font>";
  	}
	else  
	{
		echo '<font color= "#0000ff" font size="3">';
		//echo "Try again looser";
		//print_r(mysql_error());
		echo "</br>";
		echo "</br>";
		echo "</br>";
		echo '<img src="dislike.jpg"   />';	
		echo "</font>";  
	}
}

?>


</font>
</div>
</div></br></br></br><center>
<img border="0" src="img1.gif" alt="funny" width="200" height="200">
</div>
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>
