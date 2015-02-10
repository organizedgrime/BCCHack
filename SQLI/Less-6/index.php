<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-6 Double Query- Double Quotes- String</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>

</head>

<body>
<div style=" margin-top:60px;color:#FFF; font-size:23px; text-align:center">
  <h1>Welcome to SQL injection Master Course</h1>
  <h2 class="style3">Lesson-6</h2>
  <h2><span class="style5">Hint: Double querry Double quotes</span>  </h2>
  <h3><span class="style4"><a href="http://www.HiteshChoudhary.com">www.HiteshChoudhary.com</a><br>
      <font class="style3">
      
      
      <?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");

// take the variables
if(isset($_GET['id']))
{
$id=$_GET['id'];


// connectivity 

$id = '"'.$id.'"';
$sql="SELECT * FROM users WHERE id=$id LIMIT 0,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);

	if($row)
	{
  	echo '<font size="5" color="#900">';	
  	echo 'You are in...........';
  	echo "<br>";
  	echo "</font>";
  	}
	else 
	{
	
	echo '<font size="3"  color= "#900">';
	print_r(mysql_error());
	echo "</br></font>";	
	echo '<font color= "#0000ff" font size= 3>';	
	
	}
}
	else { echo "Please input the ID as parameter with numeric value";}

?>
      </font> </h3>
</div>
<img border="0" src="img1.gif" alt="funny" width="200" height="200">
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>
