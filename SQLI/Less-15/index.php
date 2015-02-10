<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-15 ::Hint::Update Query- Error based</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>

<body>

<div style="text-align:center"><h1>&nbsp;&nbsp;<font color="#FF0000"> Welcome to SQL Injection Master course </font><br><font color="#900"> [PASSWORD RESET] </br></font></h1></div>

<div align="center" style="margin:0 auto; background-color:#E8E8E8; border:1px solid #666; text-align:center; width:400px; height:150px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">


<div style="padding-top:10px; font-size:15px;">
 

<!--Form to post the contents -->
<form action="" name="form1" method="post" class="form">

  <div style="margin-top:15px; height:30px;">User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text"  name="uname" value=""/>  </div>
  
  <div> New Password : &nbsp; &nbsp;
    <input type="text" name="passwd" value=""/></div></br>
    <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div>
</form>
</div>
</div>
<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font class="style3">



<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");


function check_input($value)
	{
	if(!empty($value))
		{
		// truncation (see comments)
		$value = substr($value,0,15);
		}

		// Stripslashes if magic quotes enabled
		if (get_magic_quotes_gpc())
			{
			$value = stripslashes($value);
			}

		// Quote if not a number
		if (!ctype_digit($value))
			{
			$value = "'" . mysql_real_escape_string($value) . "'";
			}
		
	else
		{
		$value = intval($value);
		}
	return $value;
	}

// take the variables
if(isset($_POST['uname']) && isset($_POST['passwd']))

{
//making sure uname is not injectable
$uname=check_input($_POST['uname']);  

$passwd=$_POST['passwd'];


// connectivity 
@$sql="SELECT username, password FROM users WHERE username= $uname LIMIT 0,1";

$result=mysql_query($sql);
$row = mysql_fetch_array($result);
//echo $row;
	if($row)
	{
  		//echo '<font color= "#0000ff">';	
		$row1 = $row['username'];  	
		//echo 'Your Login name:'. $row1;
		$update="UPDATE users SET password = '$passwd' WHERE username='$row1'";
		mysql_query($update);
  		echo "<br>";
	
	
	
		if (mysql_error())
		{
			echo '<font color= "#900" font size = 3 >';
			print_r(mysql_error());
			echo "</br></br>";
			echo "</font>";
		}
		else
		{
			echo '<font color= "#900" font size = 3 >';
			//echo " You password has been successfully updated " ;		
			echo "<br>";
			echo "</font>";
		}
	
		echo '<img src="like.jpg"   />';	
		//echo 'Your Password:' .$row['password'];
  		echo "</font>";
	


  	}
	else  
	{
		echo '<font size="4.5" color="#900">';
		//echo "Bug off you Silly Dumb hacker";
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
