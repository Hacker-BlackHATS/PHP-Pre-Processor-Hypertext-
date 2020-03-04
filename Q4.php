<html>
<head><title>QUESTION-4</title></head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<h5>ENTER YOUR BIRTH DAY ::</h5>
<br>
<input type="date", name="t">
<input type="submit", value="GO">

</fieldset>
</form>
<br>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	$year = date("Y");
	$T = $_POST['t'];
	$target_days = mktime(0,0,0,substr($T,5,2),substr($T,8,2),$year);// modify the birth day 12/31/2013
	$today = time();
	$diff_days = ($target_days - $today);
	$days = (double)($diff_days/86400);
	print "Days till next birthday: $days days!"."\n";
}
?>
</body>
</html>
