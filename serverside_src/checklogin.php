<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Checking Login...</title>
<?php include("header.php"); ?>
</head>

<body>
<?php
ob_start();

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM players WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword");
$sql = mysql_query("SELECT * FROM players WHERE username='$myusername' and password='$mypassword'") or die(mysql_error());
$result = mysql_fetch_array($sql);
$result = $result[0]; 
$_SESSION["playerid"] = $result;
$sql = mysql_query("SELECT * FROM players WHERE username='$myusername' and password='$mypassword'") or die(mysql_error());
$result = mysql_fetch_array($sql);
$result = $result[3];
$_SESSION["playerFirstName"] = $result; 
header("location:start.php");
}
else {
echo "Wrong Username or Password";
}

ob_end_flush();
?>
</body>
</html>
