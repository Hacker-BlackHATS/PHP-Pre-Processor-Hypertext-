<html>
<head><title>QUESTION-5</title></head>
<body>
<?php
$color = array("white", "red", "green");
foreach($color as $colour ){
	print("$colour, ");
}
sort($color);
print("<ul>");
foreach($color as $colour ){
	print("<li> $colour </li>");
}
print("</ul>");
?>
</body>
</html>
