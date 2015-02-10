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
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>
<body>
<div style="text-align:center">
<a class="style3" href='index.php'><img src="Home.png" height='24'; width='24'></br>HOME</a>
</div>
</div>
<div style="text-align:center">
<center>
<img src="dislike.jpg" width="579" height="206">
</center>
</div> 
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>