<html>
  <head>
    <title>Verification</title>
	<link rel="stylesheet" type="text/css" href="existinguser.css">
  </head>
  <body style="background-color:#CD5C5C;" align="center">
	<div class="maindiv">
		
			<div class="form_div">
				<div class="title"><h2><font color = "black">Questions</h2></div>
				
				    <?php
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
		$alt=$row['alt'];
	}
}
session_start();
	$_SESSION["login"] = time();

	 
	?>
	
	
	
	
	

    

	
			
                    <form action="mypage10.php" method="post">
					<?php 
					$servername = "localhost";
$username = "root";
$password = "";
$dbname="final";

	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
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
					
				
				
					
					$p=0;$x=0;
						if(in_array(1,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#FFF8DC;height:55px;width:55%;margin-left:300px;'>".'<b><font color="brown">'.$p.")What is the last letter of the 1st movie you saw in Cinema Hall?".'</font></b>'."</br>";
							echo "A)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
		             		echo "B)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "C)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "D)$alt[$x]";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";$x++;
                        }
						if(in_array(2,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#FFDEAD;height:55px;width:55%;margin-left:300px;'>"."<b>".$p.")What is the 1st letter of your childhood's 1st friend's name?</b>"."</br>";
							echo "A)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
		             		echo "B)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "C)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "D)$alt[$x]";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";$x++;
                        }
				
					     if(in_array(3,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#F0E68C;height:55px;width:55%;margin-left:300px;'>".'<b><font color="blue">'.$p.")What was your birth time(closest to)?".'</font></b>'."</br>";
							echo "A)Morning";echo str_repeat("&nbsp;", 7);
		             		echo "B)Afternoon";echo str_repeat("&nbsp;", 7);
							echo "C)Evening";echo str_repeat("&nbsp;", 7);
							echo "D)Night";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";
							$x=$x+4;
                        }
						if(in_array(4,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#FFDAB9;height:55px;width:55%;margin-left:300px;'>".'<b><font color="#4A235A">'.$p.")What is the 1st letter of your doctor's name whom you visited often in childhood? ?</b></font>"."</br>";
							echo "A)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
		             		echo "B)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "C)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "D)$alt[$x]";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";$x++;
                        }
						if(in_array(5,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#FFC0CB;height:55px;width:55%;margin-left:300px;'>".$p."<b>)What is the 1st letter of the name of your Parent's friend you find(or found) your close too?</b>"."</br>";
							echo "A)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
		             		echo "B)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "C)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "D)$alt[$x]";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";$x++;
                        }
						if(in_array(6,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#B0E0E6;height:55px;width:55%;margin-left:300px;'>".'<b><font color="#641E16">'.$p.")What is the last 2 digits of the phone number you call often?</b></font>"."</br>";
							$x++;
				
							$n=(int)($alt[$x].$alt[$x+1]);
							echo "A)".($n);echo str_repeat("&nbsp;", 7);
		             		echo "B)".($n+1);echo str_repeat("&nbsp;", 7);
							echo "C)".($n+2);echo str_repeat("&nbsp;", 7);
							echo "D)".($n+3);echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";
							$x=$x+3;
	
                        }
						if(in_array(7,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#00FF7F;height:55px;width:55%;margin-left:300px;'>".'<b><font color="#AF601A">'.$p.")What is the 1st letter of the name of the person(except parents) who gave you your 1st special gift?</b></font>"."</br>";
							echo "A)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
		             		echo "B)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "C)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "D)$alt[$x]";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";$x++;
                        }
						if(in_array(8,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#FFA07A;height:55px;width:55%;margin-left:300px;'>".$p."<b>)What was your rank(or roll) in high school?</b>"."</br>";
							$x=$x+2;
							if($alt[$x]==')')
							{
								$x=$x-1;
								$m=(int)$alt[$x];
								$x=$x+2;
								
							}
							else
							{
								$x=$x-1;
								$m=(int)$alt[$x].$alt[$x+1];
								$x=$x+3;
							}
							echo "A)".($m);echo str_repeat("&nbsp;", 7);
		             		echo "B)".($m+1);echo str_repeat("&nbsp;", 7);
							echo "C)".($m+2);echo str_repeat("&nbsp;", 7);
							echo "D)".($m+3);echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";
                        }
						if(in_array(9,$questions))
						{
							 $p=$p+1;
							echo "<p style='background-color:#BC8F8F;height:55px;width:55%;margin-left:300px;'>".'<b><font color="#2E86C1">'.$p.")What is the 1st letter of your favourite teacher's name?</b></font>"."</br>";
							echo "A)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
		             		echo "B)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "C)$alt[$x]";echo str_repeat("&nbsp;", 7);$x++;
							echo "D)$alt[$x]";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";$x++;
							
                        }
						if(in_array(10,$questions))
						{
							$p=$p+1;
							echo "<p style='background-color:#DB7093;height:55px;width:55%;margin-left:300px;'>".'<b><font color="black">'.$p.")When does your parent's(or anyone closest's) marriage anniversary fall?</b></font>"."</br>";
							echo "A)Jan-March";echo str_repeat("&nbsp;", 7);
		             		echo "B)April-June";echo str_repeat("&nbsp;", 7);
							echo "C)July-Sept";echo str_repeat("&nbsp;", 7);
							echo "D)Oct-Dec";echo str_repeat("&nbsp;", 7);echo "</br>";echo "</br></p>";
							$x=$x+4;
                        }
						
						
						
						
						
					?>
	
	<form action="mypage10.php" method="post">
	     <input type="hidden" name="userid" value=<?php echo $userid?>>
		 <label><strong>Enter Password:</strong></label>
		<input type="password" id="password" name="answer" value " ">
<input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Show password
          
		 
		</br><input class="submit" type="submit" name="submit" value="Submit" />
		
	
	
	</form>
  </body>
</html>