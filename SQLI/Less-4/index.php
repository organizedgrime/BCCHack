<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-4 Error Based- DoubleQuotes String</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>
<body>
<div style=" margin-top:60px;color:#FFF; font-size:23px; text-align:center">
  <h1>Welcome to SQL injection Master Course</h1>
  <h2 class="style3">Lesson 4</h2>
  <h2><span class="style5">Hint : Error based    Double quotes string</span></h2>
  <h2><span class="style4">www.HiteshChoudhary.com</span><br>
    <font class="style3">
      
      
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

$id = '"' . $id . '"';
$sql="SELECT * FROM users WHERE id=($id) LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo '<font color= "#0000ff">';	
  	echo 'Your Login name:'. $row['username'];
  	echo "<br>";
  	echo 'Your Password:' .$row['password'];
  	echo "</font>";
  	}
	else 
	{
	echo '<font color= "#900">';
	print_r(mysql_error());
	echo "</font>";  
	}
}
	else { echo "Please input the ID as parameter with numeric value";}

?>
                </font> </h2>
</div>
<img border="0" src="img1.gif" alt="funny" width="200" height="200">
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</br></br></br><center>
</center>
</body>
</html>
