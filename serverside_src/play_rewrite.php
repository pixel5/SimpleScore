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

<?php session_start();
$_SESSION["courseid"] = $_POST["course_id"];
$courseid = $_SESSION["courseid"];
$sql_course = mysql_query("SELECT * FROM courses WHERE primary_key = $courseid") or die(mysql_error());
$result = mysql_fetch_row($sql_course);
$_SESSION["coursename"] = $result[1];

$i = 1; //i is the counter for hole number
$j = 2; //j is the counter to pull the par from the database

echo "<div id='coursename'>".$_SESSION["coursename"]."</div>";
echo "<div class='holeSlide'><ul>";
while ($i <= 18){
	
	echo "<li><div id='hole'>Hole ".$i." </div><div id='par'>Par ".$result[$j]."</div><br /><br /><div id='score'>Score<br />&nbsp;&nbsp;<select name='score'".$i.">
	<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='6'>6</option>
	<option value='7'>7</option>
	<option value='8'>8</option></select><Br /></div>
	<div id='drive'>Drive<br />";
	if ($result[$j] == 3) 
		echo "&nbsp;&nbsp;<span class='par3text'>Par 3</span>";
	else 
		echo "&nbsp;&nbsp;<select name='drive'".$i."> <option value='1'>Left</option><option value='2'>Fairway</option><option value='3'>Right</option></select>";
	echo "</div>
	<div id='putts'>Putts<br />&nbsp;&nbsp;<select name='putt'".$i.">
	<option value='0'>0</option>
	<option value='1'>1</option>
	<option value='2'>2</option>
	<option value='3'>3</option>
	<option value='4'>4</option>
	<option value='5'>5</option>
	<option value='6'>6</option>
	<option value='7'>7</option>
	<option value='8'>8</option></select></div></li>";
	$i++;
	$j++;
}
echo "<li>SUBMIT BUTTON <input type='submit' value='Submit Score!' /></li></ul></div>";

?>
<table id="holeNav"><tr><td><span class="prev"><img src="images/button_bck.png" /></span></td><td align="right">
<span class="next"><img src="images/button_fwd.png" /></span></td></tr></table>


</body>
</html>
