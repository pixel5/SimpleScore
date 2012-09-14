<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<?php include("header.php"); ?>
<? 
session_start();
if(session_is_registered(myusername)){
header("location:start.php");
}
?>
</head>

<body>
Registration is not available at this time.<br />
If you would like to participate in the<br />
beta, shoot me an email: <br />
aaron[at]pixel5.co
</body>
</html>
