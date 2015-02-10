<html>
<head>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>
<body>
<font class="style3">
<div align="right">
<a class="style3" href='index.php'><img src="Home.png" height='24'; width='24'></br>HOME</a>
</div>
<?PHP

session_start();
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");




function sqllogin(){

   $username = mysql_real_escape_string($_POST["login_user"]);
   $password = mysql_real_escape_string($_POST["login_password"]);
   $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
//$sql = "SELECT COUNT(*) FROM users WHERE username='$username' and password='$password'";
   $res = mysql_query($sql) or die('You tried to be real smart, Try harder!!!! :( ');
   $row = mysql_fetch_row($res);
	//print_r($row) ;
   if ($row[1]) {
			return $row[1];
   } else {
      		return 0;
   }

}






$login = sqllogin();
if (!$login== 0) 
{
	$_SESSION["username"] = $login;
	setcookie("Auth", 1, time()+3600);  /* expire in 15 Minutes */
	header('Location: logged-in.php');
} 
else
{
?>
<tr><td colspan="2" style="text-align:center;"><br/><p style="color:#FF0000;">
<center>
<img src="dislike.jpg" width="579" height="206">
</center>
</p></td></tr>
<?PHP
} 
?>
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>