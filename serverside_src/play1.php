<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Playing</title>
<?php include("header.php"); ?>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jcarousellite_1.0.1.js" type="text/javascript"></script>
<script type="text/javascript">
   $(function() {
    $(".holeSlide").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
		speed: 800
    });
});
</script>
</head>
<body>
<!--
Comments here. HAHAHA >comments >2012
-->
<?php session_start();
$_SESSION["courseid"] = $_POST["course_id"];
$courseid = $_SESSION["courseid"];
$sql_course = mysql_query("SELECT * FROM courses WHERE primary_key = $courseid") or die(mysql_error());
$result = mysql_fetch_row($sql_course);
$_SESSION["coursename"] = $result[1];
?>
<div class="holeSlide">
<form id="scoreKeeper" action="submit_score.php" method="post">
<? echo $_SESSION["coursename"]; ?><ul><li> Hole 1<br />
<? echo "Par ".$result[2]; ?><br />Score:<br /> <select name="score1">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[2] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive1'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt1">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 2<br />
<? echo "Par ".$result[3]; ?><br />Score:<br /> <select name="score2">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[3] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive2'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt2">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 3<br />
<? echo "Par ".$result[4]; ?><br />Score:<br /> <select name="score3">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[4] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive3'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt3">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 4<br />
<? echo "Par ".$result[5]; ?><br />Score:<br /> <select name="score4">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[5] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive4'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt4">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 5<br />
<? echo "Par ".$result[6]; ?><br />Score:<br /> <select name="score5">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[6] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive5'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt5">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 6<br />
<? echo "Par ".$result[7]; ?><br />Score:<br /> <select name="score6">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[7] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive6'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt6">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 7<br />
<? echo "Par ".$result[8]; ?><br />Score:<br /> <select name="score7">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[8] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive7'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt7">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 8<br />
<? echo "Par ".$result[9]; ?><br />Score:<br /> <select name="score8">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php 
if ($result[9] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive8'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt8">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 9<br />
<? echo "Par ".$result[10]; ?><br />Score:<br /> <select name="score9">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[10] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive9'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt9">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 10<br />
<? echo "Par ".$result[11]; ?><br />Score:<br /> <select name="score10">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[11] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive10'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt10">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 11<br />
<? echo "Par ".$result[12]; ?><br />Score:<br /> <select name="score11">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[12] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive11'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt11">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 12<br />
<? echo "Par ".$result[13]; ?><br />Score:<br /> <select name="score12">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[13] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive12'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt12">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 13<br />
<? echo "Par ".$result[14]; ?><br />Score:<br /> <select name="score13">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[14] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive13'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt13">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 14<br />
<? echo "Par ".$result[15]; ?><br />Score:<br /> <select name="score14">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[15] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive14'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt14">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 15<br />
<? echo "Par ".$result[16]; ?><br />Score:<br /> <select name="score15">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[16] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive15'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt15">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 16<br />
<? echo "Par ".$result[17]; ?><br />Score:<br /> <select name="score16">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[17] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive16'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt16">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 17<br />
<? echo "Par ".$result[18]; ?><br />Score:<br /> <select name="score17">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[18] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive17'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt17">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> Hole 18<br />
<? echo "Par ".$result[19]; ?><br />Score:<br /> <select name="score18">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select><Br />
Drive:<br /> <?php
if ($result[19] == 3) {
	echo "<span class='par3text'>Par 3</span>";
}
else{ echo "<select name='drive18'> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";}
?>
<br />
Putts:<br /> <select name="putt18">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option></select></li>

<li style="width:100%; height: 80%;"> SUBMIT BUTTON
<input type="submit" value="Submit Score!" /></li></ul>
</form></div>
<table id="holeNav"><tr><td><span class="prev"><img src="images/button_bck.png" /></span></td><td align="right">
<span class="next"><img src="images/button_fwd.png" /></span></td></tr></table>
</body>
</html>
