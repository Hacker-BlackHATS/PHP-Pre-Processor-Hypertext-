<html>
<head><title>QUESTION-8</title></head>
<body>
<form name="email" method="post" action="">      
EMAIL ID   <input type="text" name="EMAILID"><br/>
<input type="submit" name="submit" value="submit">
</form>

    <?php
        if(isset($_POST["submit"]) == "submit")
        {
            $EMAIL =$_POST["EMAILID"];
            //$email = "abc123@sdsd.com"; 
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
            if (preg_match($regex, $EMAIL))
            {
                echo $EMAIL . " is a valid email. We can accept it.";
                $a1 = explode("@",$EMAIL);
                $a2 = explode(".",$a1[1]);
                $servername = "localhost";
                $username = "root";
                $password = "12345";
                $dbname = "ques8";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error)
                {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $sql = "SELECT * FROM email where domain ='gmail.com' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0)
                {
                    echo " <br >domain is valid";
                }
                elseif ($result->num_rows > 1)
                {
                    echo "invalid domain";
                }
                $conn->close();
            }
            else 
            { 
                echo $EMAIL . " is an invalid email. Please try again.";
            } 
        }
    ?>
