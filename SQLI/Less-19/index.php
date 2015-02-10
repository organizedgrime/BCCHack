<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Less-19 Cookie Injection- for practice</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>

<body>
<?php
//including the Mysql connect parameters.
	include("../sql-connections/sql-connect.php");
if(!isset($_COOKIE['uname']))
	{
	//including the Mysql connect parameters.
	include("../sql-connections/sql-connect.php");

	echo "<div style='text-align:center'><h1>Welcome<font color='#FF0000'>to SQL Injection Master Course</font><h1><br></div>";
	echo "<div  align='center' style='margin:0 auto; background-color:#E8E8E8; border:1px solid #666; text-align:center; width:400px; height:150px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;'>";
	echo "<div style='padding-top:10px; font-size:15px;'>";
 

	echo "<!--Form to post the contents -->";
	echo '<form action=" " name="form1" method="post">';

	echo ' <div style="margin-top:15px; height:30px;">Username : &nbsp;&nbsp;&nbsp;';
	echo '   <input type="text"  name="uname" value=""/>  </div>';
  
	echo ' <div> Password : &nbsp; &nbsp; &nbsp;';
	echo '   <input type="text" name="passwd" value=""/></div></br>';	
	echo '   <div style=" margin-top:9px;margin-left:90px;"><input type="submit" name="submit" value="Submit" /></div>';

	echo '</form>';
	echo '</div>';
	echo '</div>';
	

	
function check_input($value)
	{
	if(!empty($value))
		{
		$value = substr($value,0,20); // truncation (see comments)
		}
		if (get_magic_quotes_gpc())  // Stripslashes if magic quotes enabled
			{
			$value = stripslashes($value);
			}
		if (!ctype_digit($value))   	// Quote if not a number
			{
			$value = "'" . mysql_real_escape_string($value) . "'";
			}
	else
		{
		$value = intval($value);
		}
	return $value;
	}


	
	echo "<br>";
	echo "<br>";
	
	if(isset($_POST['uname']) && isset($_POST['passwd']))
		{
	
		$uname = check_input($_POST['uname']);
		$passwd = check_input($_POST['passwd']);
		
	

		
		$sql="SELECT  users.username, users.password FROM users WHERE users.username=$uname and users.password=$passwd ORDER BY users.id DESC LIMIT 0,1";
		$result1 = mysql_query($sql);
		$row1 = mysql_fetch_array($result1);
			if($row1)
				{
				echo '<font class="style3">';
				setcookie('uname', base64_encode($row1['username']), time()+3600);	
				header ('Location: index.php');
				echo "I LOVE YOU COOKIES";
				echo "</font>";
				echo '<font class="style3">';			
				//echo 'Your Cookie is: ' .$cookee;
				echo "</font>";
				echo "<br>";
				print_r(mysql_error());			
				echo "<br><br>";
				echo '<img src="like.jpg" />';
				echo "<br>";
				}
			else
				{
				echo '<font class="style3">';
				//echo "Try again looser";
				print_r(mysql_error());
				echo "</br>";			
				echo "</br>";
				echo '<img src="dislike.jpg" />';	
				echo "</font>";  
				}
			}
		
			echo "</font>";  
	echo '</font>';
	echo '</div>';

}
else
{



	if(!isset($_POST['submit']))
		{
			$cookee = $_COOKIE['uname'];
			$format = 'D d M Y - H:i:s';
			$timestamp = time() + 3600;
			echo "<center>";
			echo "<br><br><br><b>";
			echo '<img src="Less-19.jpg" />';
			echo "<br><br><b>";
			echo '<br><font class="style3">';	
			echo "YOUR USER AGENT IS : ".$_SERVER['HTTP_USER_AGENT'];
			echo "</font><br>";	
			echo '<font class="style3">';	
			echo "YOUR IP ADDRESS IS : ".$_SERVER['REMOTE_ADDR'];			
			echo "</font><br>";			
			echo '<font class="style3">';
			echo "DELETE YOUR COOKIE OR WAIT FOR IT TO EXPIRE <br>";
			echo '<font class="style3">';			
			echo "YOUR COOKIE : uname = $cookee and expires: " . date($format, $timestamp);
			
			$cookee = base64_decode($cookee);
			$cookee1 = '"'. $cookee. '"';
			echo "<br></font>";
			$sql="SELECT * FROM users WHERE username=$cookee1 LIMIT 0,1";
			$result=mysql_query($sql);
			if (!$result)
  				{
  				die('Issue with your mysql: ' . mysql_error());
  				}
			$row = mysql_fetch_array($result);
			if($row)
				{
			  	echo '<font class="style3">';	
			  	echo 'Your Login name:'. $row['username'];
			  	echo "<br>";
				echo '<font class="style3">';  	
				echo 'Your Password:' .$row['password'];
			  	echo "</font></b>";
				echo "<br>";
				echo 'Your ID:' .$row['id'];
			  	}
			else	
				{
				echo "<center>";
				echo '<br><br><br>';
				echo '<img src="dislike.jpg" />';
				echo "<br><br><b>";
				//echo '<img src="Less-19.jpg" />';
				}
			echo '<center>';
			echo '<form action="" method="post">';
			echo '<input  type="submit" name="submit" value="Delete Your Cookie!" />';
			echo '</form>';
			echo '</center>';
		}	
	else
		{
		echo '<center>';
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo '<font class="style3">';
		echo " Your Cookie is deleted";
				setcookie('uname', base64_encode($row1['username']), time()-3600);
				header ('Location: index.php');
		echo '</font></center></br>';
		
		}		


			echo "<br>";
			echo "<br>";
			//header ('Location: main.php');
			echo "<br>";
			echo "<br>";
			
			//echo '<img src="dislike.jpg" /></center>';
			//logging the connection parameters to a file for analysis.	
		$fp=fopen('result.txt','a');
		fwrite($fp,'Cookie:'.$cookee."\n");
	
		fclose($fp);
	
}
?>

<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>
