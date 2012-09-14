<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Score Submitted!</title>
<?php include("header.php"); ?>
</head>

<body>
<?php session_start();
$h1score = $_POST['score1'].','.$_POST['drive1'].','.$_POST['putt1'];
$h2score = $_POST['score2'].','.$_POST['drive2'].','.$_POST['putt2'];
$h3score = $_POST['score3'].','.$_POST['drive3'].','.$_POST['putt3'];
$h4score = $_POST['score4'].','.$_POST['drive4'].','.$_POST['putt4'];
$h5score = $_POST['score5'].','.$_POST['drive5'].','.$_POST['putt5'];
$h6score = $_POST['score6'].','.$_POST['drive6'].','.$_POST['putt6'];
$h7score = $_POST['score7'].','.$_POST['drive7'].','.$_POST['putt7'];
$h8score = $_POST['score8'].','.$_POST['drive8'].','.$_POST['putt8'];
$h9score = $_POST['score9'].','.$_POST['drive9'].','.$_POST['putt9'];
$h10score = $_POST['score10'].','.$_POST['drive10'].','.$_POST['putt10'];
$h11score = $_POST['score11'].','.$_POST['drive11'].','.$_POST['putt11'];
$h12score = $_POST['score12'].','.$_POST['drive12'].','.$_POST['putt12'];
$h13score = $_POST['score13'].','.$_POST['drive13'].','.$_POST['putt13'];
$h14score = $_POST['score14'].','.$_POST['drive14'].','.$_POST['putt14'];
$h15score = $_POST['score15'].','.$_POST['drive15'].','.$_POST['putt15'];
$h16score = $_POST['score16'].','.$_POST['drive16'].','.$_POST['putt16'];
$h17score = $_POST['score17'].','.$_POST['drive17'].','.$_POST['putt17'];
$h18score = $_POST['score18'].','.$_POST['drive18'].','.$_POST['putt18'];

echo $_SESSION["coursename"]."<br />";
$course_id = (int) $_SESSION["courseid"];
$player_id = (int) $_SESSION["userid"];

$sql = "INSERT INTO rounds (player_key,course_key,h1,h2,h3,h4,h5,h6,h7,h8,h9,h10,h11,h12,h13,h14,h15,h16,h17,h18,saved) VALUES ($player_id,$course_id,'$h1score','$h2score','$h3score','$h4score','$h5score','$h6score','$h7score','$h8score','$h9score','$h10score','$h11score','$h12score','$h13score','$h14score','$h15score','$h16score','$h17score','$h18score',0)";

mysql_query($sql) or die(mysql_error());
echo "Score Submitted!<br />";
echo "Stats:";


session_destroy();
?>
</body>
</html>
