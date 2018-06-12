<html>
  <head>
    <title>Verification</title>
  </head>
  <body style="background-color:#FFD700;" align="center">
    <h1 align="center"><font color = "purple">Response Complete</h1>
	
    <?php
	
	session_start();
	$servername = "localhost";
$username = "root";
$password = "";
	$dbname="final";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$userid=$_POST['userid'];
$sql="Select * FROM user where userid='$userid'";
					$result=$conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc())
						{
						$userid=$row['userid'];
						$questions=$row['ques'];
						$questions=explode(" ",$questions);
							}
						}
	
	$sql="Select * FROM table2 where userid='$userid'";
					$result=$conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc())
						{
						$userid=$row['userid'];
						$index=$row['pos'];
							}
						}
	

$sql="Select * FROM user where userid='$userid'";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
	{
		$userid=$row['userid'];
		$alt=$row['alt'];
	}
	

				   
		$answer=  $_POST['answer'];
		$answer=strtoupper($answer);
	
	   $opt="option".$index;              		 
							
		 
	$sql="Select * FROM table1 where userid='$userid'";
					$result=$conn->query($sql);
					$answerset=array();
						while($row = $result->fetch_assoc())
						{
							$answerset=$row;
						}
						$flag=0;
							foreach($answerset as $y=>$val)
							{
								if(($val==$answer)&& $y==$opt){$flag=1;
								echo"Login Successful";break;}
								else if(($val==$answer)&& $y!=$opt){$flag=1;
								echo "Problem Detected";}
							    else
								{$flag=0;}
							}
							if($flag==0)
								echo "Unsuccessful Login";
	
		





	



$timepass = time() - $_SESSION["login"];
	 
	
	
	echo"<br>";
	echo"Time duration..."; echo $timepass; echo"seconds";

	?>
	
    
	
	
  </body>
</html>
	
	
	