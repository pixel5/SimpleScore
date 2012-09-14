<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include("header.php"); ?>
<? 
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>
</head>

<body>
<div id="main_container"><form id="startPage" action="play_rewrite.php" method="post">
Golf App :: Welcome, <?php echo $_SESSION["playerFirstName"]; ?>!<br /><br />
Select Your Course: <select name="course_id">
<?php
$sql = "SELECT * FROM courses ".
"ORDER BY course_name";

$rs = mysql_query($sql) or die(mysql_error());

while($row = mysql_fetch_array($rs))
{
  echo "<option value=\"".$row['primary_key']."\">".$row['course_name']."</option>\n  ";
}
?>
</select><br />
<input type="submit" value="Start Round" /><Br /><br />
View Past Rounds<br />
<a href="logout.php">Logout</a>
</div>
</form>
</body>
</html>
