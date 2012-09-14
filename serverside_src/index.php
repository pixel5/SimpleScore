<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to SimpleScore!</title>
<?php include("header.php"); ?>
<? 
session_start();
if(session_is_registered(myusername)){
header("location:start.php");
}
?>
</head>

<body>
<center><img src="images/logo.png" width="100%" /></center><br />
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" style="background-color: rgba(200,200,200,0.6);">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" style="background-color: rgba(255,255,255,0.4);">
<tr>
<td colspan="3"><strong>Member Login</strong></td>
</tr>
<tr>
<td width="78"></td>
<td width="6"></td></tr><tr>
<td width="100%" colspan="3" align="center"><input name="myusername" placeholder="Username" type="text" id="myusername" style="border: 1px solid black; height:25px;font-size:20px;"></td>
</tr>
<tr>
<td></td>
<td></td></tr><tr>
<td width="100%" colspan="3" align="center"><input name="mypassword" type="password" placeholder="Password" id="mypassword" style="border: 1px solid black;height:25px;font-size:20px;"></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Login" style="font-size:20px;"></td>
</tr>
</table>
</td>
</form>
</tr>
<tr>
<td style="text-align:right;">
New? <a href="register.php">Register Here</a>
</td>
</tr>
</table>
v0.3.1 Beta &copy; 2012 Aaron Baxter pixel5.co
</body>
</html>
