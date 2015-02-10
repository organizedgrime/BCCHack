<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-1 SqL Injection master Course by Hitesh Choudhary</title>

<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
<style type="text/css">

body,td,th {
	color: #0000FF;
}
</style></head>

<body>
<div style="margin-top:60px; color:#000000; font-size:14px; text-align:center">
<h1><span class="style1">Welcome To SQL Injection Master Course </span></h1>
<h1><span class="style2">Lesson-2</span></h1>
<h4><span class="style5">Hint: Error based:integer</span><br>
<font class="style4">
       
    <?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");

// take the variables
if(isset($_GET['id']))
{
$id=$_GET['id'];
//logging the connection parameters to a file for analysis.
$fp=fopen('result.txt','a');
fwrite($fp,'ID:'.$id."\n");
fclose($fp);


// connectivity 
$sql="SELECT * FROM users WHERE id=$id LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo '<font color= "#000000">';	
  	echo 'Your Login name:'. $row['username'];
  	echo "<br>";
  	echo 'Your Password:' .$row['password'];
  	echo "</font>";
  	}
	else 
	{
	echo '<font color= "#000000">';
	print_r(mysql_error());
	echo "</font>";  
	}
}
	else
		{ 	
		echo "Please input the ID as parameter with numeric value";
		}

?>
  </font> </h4>
</div>
<img border="0" src="img1.gif" alt="funny" width="200" height="200">
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>
