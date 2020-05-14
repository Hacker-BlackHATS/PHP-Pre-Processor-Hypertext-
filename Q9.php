<html>
<head><title>QUESTION-9</title></head>
<body>
	<form method="post" action="" >
		<table border="1" >
			<tr>
				<td><label for="Roll_no">Roll Number</label></td>
				<td><input type="text"
				name="rno" id="Roll_no"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"/><td><input type="reset" value="Reset"/>
			</tr>
		</table>
	</form>
<?php

if(isset($_POST["submit"]) == "submit")
{
	$id= trim($_POST["rno"]);
	$cn=mysqli_connect("localhost:3307","root","");
	
	// Select the database to use
	mysqli_select_db($cn,"students");
	$query = "SELECT * FROM `student` WHERE `Roll no` ='".$id."' ;";
	$result = mysqli_query($cn,$query) or die(mysqli_error($cn));
	
	//Execute the query
	While($row=mysqli_fetch_array($result)){
		echo "Roll No:<input type=\"text\" value=".$row['Roll no']."><br>";
		echo "Name:<input type=\"text\" value=".$row['Name']."><br>";
		echo "S1:<input type=\"text\" value=".$row['sub1']."><br>";
		echo "S2:<input type=\"text\" value=".$row['sub2']."><br>";
		echo "S3:<input type=\"text\" value=".$row['sub3']."><br>";
		$x=$row['sub1']+$row['sub2']+$row['sub3'];
		if($x>200){
			echo "Grade:<input type=\"text\" value=Good><br>";
		}
		else{
			echo "Grade:<input type=\"text\" value=Poor><br>";
		}
	}
}
?>
</body>
</html>
