<!DOCTYPE html>
<html>
<head>
 <title>Log-in Form</title></head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>
<input type="text" name="username" placeholder="Enter the Email-Id"/> <br>
<input type="password" name="password" placeholder="password"/><br>
<input type="submit" name="subt" value="LOG_IN" class="btn-login"/>
</fieldset>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$host="localhost";
	$user="root";
	$password="";
	$db="LOG_IN";
	// Create connection
	$conn = mysqli_connect($host, $user, $password,$db);
	
	// Check connection
	if (!$conn) {
 		die("Connection failed: " . mysqli_connect_error());
	}/*
	if(isset($_POST['subt'])){
		$uname = $_POST['username'];
		$password = $_POST['password'];
        $sql_query = "select count(*) as cntUser from course where EMAIL_ID='".$uname."' and PASSWORD='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }
	}*/
	if(isset($_POST['subt']))
			{
				$uname = $_POST['username'];
				$password = $_POST['password'];
				$sql = "SELECT EMAIL_ID, PASSWORD FROM source";
				$result = $conn->query($sql);
				$B=false;
				if ($result->num_rows > 0)
				{
				    // output data of each row
				    while($row = $result->fetch_assoc())
				    {
				        if($row["EMAIL_ID"]==$uname&&$row["PASSWORD"]==$password)
				        {
				        	$B=true;
				        	break;
				        }
				    }
				}
				else
				{
				    echo "0 results";
				}
				if($B)
				{
					echo "Welcome!! Log-In Successfully....";
				}
				else
				{
					echo '<script type="text/javascript">alert("Incorrect Username or Password!")</script>';
				}
			}
	$conn->close();
}
?>
</body>
</html>

