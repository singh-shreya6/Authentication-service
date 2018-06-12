<html>
    <head>
        <title>User Details</title>
		<link rel="stylesheet" type="text/css" href="newuser.css">
    </head>
    <body>
		<div class="maindiv">
		
			<div class="form_div">
				<div class="title"><h2>Registration form</h2><a href="Login.php">Return to Login Page</a></div>
				    
                    <form action="newuser.php" method="post"> 
					<h2><?php echo str_repeat("&nbsp;", 24);?>Enter details</h2>
					
					<label><strong>Username:</strong></label>
					<input type = "text" name = "userid" value="<?php if(isset($_POST['userid'])){ echo $_POST['userid']; } ?>"/>
					<input class="submit" type = "submit" value = "Check Availability" name="avail"></br>
					<?php	
	$servername = "localhost";
$username = "root";
$password = "";



$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE IF NOT EXISTS final";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating database: " . $conn->error;
}
					
	?>				
					
					
					<?php
					$servername = "localhost";
$username = "root";
$password = "";
$dbname="final";


$conn = new mysqli($servername, $username, $password,$dbname);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['userid'])) 
    {
        $userid = mysqli_real_escape_string($conn,$_POST['userid']);

        if (!empty($userid)) 
    {
            $username_query = mysqli_query($conn,"SELECT *
                                           FROM user
                                           WHERE userid = '$userid'");
             $count=mysqli_num_rows($username_query);
             if($count==0)
             {
               echo "</br><b><center>Username available</b></center>";
             }
            else
            {
              echo "</br><b><center>Username already exists.Check another</b></center>";
              exit;
            }
    }
}

	
?>
					
					
					<h4>Select the most appropriate 6 questions of your choice and answer in the box given</br></h4>
				    <div class="col1">
					<p><strong>1)What was the 1st movie you saw in the cinema hall?</strong></br>
					<input class="input" type="text" name="cinema" value="<?php if(isset($_POST['cinema'])){ echo $_POST['cinema']; } ?>"></br></p>
					<p><strong>2)Who was your 1st childhood friend?</strong></br>
					<input class="input" type="text" name="friend" value="<?php if(isset($_POST['friend'])){ echo $_POST['friend']; } ?>" /><br/></p>
					<p><strong>3)What was your birth time(closest one)?</strong></br>
					<select name="btime">
					<option value=""></option>
					<option value="A">MORNING</option> <option value="B">AFTERNOON</option><option value="C">EVENING</option> <option value="D">NIGHT</option> </select>
				    <p><strong>4)What is the name of the doctor you visited often in childhood?</strong></br>
					<input class="input" type="text" name="doctor" value="<?php if(isset($_POST['doctor'])){ echo $_POST['doctor']; } ?>" /><br/></p>
					<p><strong>5)Name of your Parent's friend you find(or found) your close too?</strong></br>
					<input class="input" type="text" name="pfriend" value="<?php if(isset($_POST['pfriend'])){ echo $_POST['pfriend']; } ?>" /></br></p></div>
					<div class="col2">
					<p><strong>6)What are the last two digits of the phone number you call often?</strong></br>
					<input class="input" type="text" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" /><br/></p>
					<p><strong>7)Name of the person (except parents) from whom you got your 1st special gift in childhood?</strong></br>
					<input class="input" type="text" name="gift" value="<?php if(isset($_POST['gift'])){ echo $_POST['gift']; } ?>" /><br/></p>
					<p><strong>8)What was your rank(or roll number) in your high school?</strong></br>
					<input class="input" type="text" name="roll" value="<?php if(isset($_POST['roll'])){ echo $_POST['roll']; } ?>" /><br/></p>
					<p><strong>9)Who is your favourite teacher?</strong></br>
					<input class="input" type="text" name="teacher" value="<?php if(isset($_POST['teacher'])){ echo $_POST['teacher']; } ?>" /><br/></p>
					<p><strong>10)Marriage anniversary of your parents(or closest) falls in which time span? Select an option.</strong></br>
					<select name="marriage">
					<option value=""></option>
					<option value="A">JAN-MARCH</option> <option value="B">APRIL-JUNE</option><option value="C">JULY-SEPT</option> <option value="D">OCT-DEC</option> </select>
					</div>
					
					<input class="submit" type="submit" name="submit" value="Submit" />	</br>
	


	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="final";


$conn = new mysqli($servername, $username, $password,$dbname);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

error_reporting(0);	
	
if(isset($_POST['submit']))
        {	

	$userid=$_POST['userid'];
    $cinema = $_POST['cinema'];
	$friend = $_POST['friend'];
	$btime = $_POST['btime'];
	$doctor = $_POST['doctor'];
	$pfriend = $_POST['pfriend'];
    $phone = $_POST['phone'];
    $gift= $_POST['gift'];
	$roll = $_POST['roll'];
	$teacher= $_POST['teacher'];
	$marriage = $_POST['marriage'];	
	
	
	$ques=array();
	if($cinema!=""){
	$cinema=strtoupper($cinema);
		array_push($ques,1);
	}
	if($friend!="")
	{
    $friend=strtoupper($friend);
		array_push($ques,2);
	}
	
	if($btime!="")
	{
    $btime=strtoupper($btime);
		array_push($ques,3);
	}
	if($doctor!="")
	{
     $doctor=strtoupper($doctor);
	array_push($ques,4);
	}
	if($pfriend!="")
	{
    $pfriend=strtoupper($pfriend);
		array_push($ques,5);
	}
	if($phone!="")
	{
    $phone=strtoupper($phone);
		array_push($ques,6);
	}
	if($gift!="")
	{
     $gift=strtoupper($gift);
	array_push($ques,7);
	}
	if($roll!="")
	{
    $roll=strtoupper($roll);
	array_push($ques,8);
	}
	if($teacher!="")
	{
   $teacher=strtoupper($teacher);
		array_push($ques,9);
	}
	if($marriage!="")
	{
    $marriage=strtoupper($marriage);
		array_push($ques,10);
	}
	
	
$sql1="CREATE TABLE IF NOT EXISTS user(
userid varchar(50) PRIMARY KEY,
ques varchar(25),
alt varchar(40)
)";
if ($conn->query($sql1) === TRUE) {
    echo " ";
} else {
    echo "Error creating table: " . $conn->error;
}


$l=count($ques);

$cinema=substr($cinema,-1);
$question=implode(" ",$ques);
$sql2 ="Insert into user(userid,ques,alt) values('$userid','$question',' ')";
   if($l==6)
   {	   
   if (($conn->query($sql2) === TRUE) ){
    echo "Value inserted successfully"."<br>";
   }
} else {
    echo "Error inserting values:You need to answer ".abs($l-6)." more question"."</br>";
}



$sql6="CREATE TABLE IF NOT EXISTS reg
(grp int(4),element varchar(10))";
if ($conn->query($sql6) === TRUE) {
    echo " ";
} else {
    echo "Error creating table: " . $conn->error;
}
$myarray=array("ABCD","EFGH","IJKL","MNOP","QRST","UVWX","WXYZ");
for($i=0;$i<count($myarray);$i++)
{
$myarray[$i]=str_shuffle($myarray[$i]);
}

$sql="Select * FROM reg";
$result=$conn->query($sql);
if ($result->num_rows == 0) {
$sql11="INSERT INTO reg(grp,element) values (1,'$myarray[0]')";
$sql12="INSERT INTO reg(grp,element) values (2,'$myarray[1]')";
$sql13="INSERT INTO reg(grp,element) values (3,'$myarray[2]')";
$sql14="INSERT INTO reg(grp,element) values (4,'$myarray[3]')";
$sql15="INSERT INTO reg(grp,element) values (5,'$myarray[4]')";
$sql16="INSERT INTO reg(grp,element) values (6,'$myarray[5]')";
$sql17="INSERT INTO reg(grp,element) values (7,'$myarray[6]')";
 if ($conn->query($sql11) === TRUE && $conn->query($sql12) === TRUE && $conn->query($sql13) === TRUE && $conn->query($sql14) === TRUE &&$conn->query($sql15) === TRUE && $conn->query($sql16) ===TRUE && $conn->query($sql17)===TRUE) {
    echo " ";
} else {
    echo "Error inserting values: " . $conn->error;
}
	
}


$sqls="SELECT * FROM reg";
	$result=mysqli_query($conn,$sqls);
	$elements = array();
while($row = mysqli_fetch_assoc($result))
{
    $elements[] = $row['element'];
}


$sql6="CREATE TABLE IF NOT EXISTS names
(grp int(4),element varchar(10))";
if ($conn->query($sql6) === TRUE) {
    echo " ";
} else {
    echo "Error creating table: " . $conn->error;
}
$myarray1=array("AMPR","APRS","BDJK","JKNV","CGHI","IGLT","EFOQ","UWXY","WXYZ");
for($i=0;$i<count($myarray1);$i++)
{
$myarray1[$i]=str_shuffle($myarray1[$i]);
}



$sql="Select * FROM names";
$result=$conn->query($sql);
if ($result->num_rows == 0) {
$sql11="INSERT INTO names(grp,element) values (1,'$myarray1[0]')";
$sql12="INSERT INTO names(grp,element) values (2,'$myarray1[1]')";
$sql13="INSERT INTO names(grp,element) values (3,'$myarray1[2]')";
$sql14="INSERT INTO names(grp,element) values (4,'$myarray1[3]')";
$sql15="INSERT INTO names(grp,element) values (5,'$myarray1[4]')";
$sql16="INSERT INTO names(grp,element) values (6,'$myarray1[5]')";
$sql17="INSERT INTO names(grp,element) values (7,'$myarray1[6]')";
$sql18="INSERT INTO names(grp,element) values (8,'$myarray1[7]')";
$sql19="INSERT INTO names(grp,element) values (9,'$myarray1[8]')";
 if ($conn->query($sql11) === TRUE && $conn->query($sql12) === TRUE && $conn->query($sql13) === TRUE && $conn->query($sql14) === TRUE && $conn->query($sql15) === TRUE && $conn->query($sql16) ===TRUE && $conn->query($sql17)===TRUE && $conn->query($sql18) === TRUE && $conn->query($sql19) === TRUE ) {
    echo " ";
} else {
    echo "Error inserting values: " . $conn->error;
}
	
}


$sqls="SELECT * FROM names";
	$result=mysqli_query($conn,$sqls);
	$elements1 = array();
while($row = mysqli_fetch_assoc($result))
{
    $elements1[] = $row['element'];
}


$sql6="CREATE TABLE IF NOT EXISTS movies
(grp int(4),element varchar(10))";
if ($conn->query($sql6) === TRUE) {
    echo " ";
} else {
    echo "Error creating table: " . $conn->error;
}

$myarray2=array("AENR","ANRS","DILM","MOTY","GHKP","HKPU","BCFJ","QVWX","BVWZ");
for($i=0;$i<count($myarray2);$i++)
{
$myarray2[$i]=str_shuffle($myarray2[$i]);
}


$sql="Select * FROM movies";
$result=$conn->query($sql);
if ($result->num_rows == 0) {
$sql11="INSERT INTO movies(grp,element) values (1,'$myarray2[0]')";
$sql12="INSERT INTO movies(grp,element) values (2,'$myarray2[1]')";
$sql13="INSERT INTO movies(grp,element) values (3,'$myarray2[2]')";
$sql14="INSERT INTO movies(grp,element) values (4,'$myarray2[3]')";
$sql15="INSERT INTO movies(grp,element) values (5,'$myarray2[4]')";
$sql16="INSERT INTO movies(grp,element) values (6,'$myarray2[5]')";
$sql17="INSERT INTO movies(grp,element) values (7,'$myarray2[6]')";
$sql18="INSERT INTO movies(grp,element) values (8,'$myarray2[7]')";
$sql19="INSERT INTO movies(grp,element) values (8,'$myarray2[8]')";
 if ($conn->query($sql11) === TRUE && $conn->query($sql12) === TRUE && $conn->query($sql13) === TRUE && $conn->query($sql14) === TRUE && $conn->query($sql15) === TRUE && $conn->query($sql16) ===TRUE && $conn->query($sql17)===TRUE && $conn->query($sql18) === TRUE && $conn->query($sql19) === TRUE ) {
    echo " ";
} else {
    echo "Error inserting values: " . $conn->error;
}
	
}


$sqls="SELECT * FROM movies";
	$result=mysqli_query($conn,$sqls);
	$elements2 = array();
while($row = mysqli_fetch_assoc($result))
{
    $elements2[] = $row['element'];
}







function contains($v,$elements)
	{
		$flag=0;
	 foreach($elements as $val)
	 {
		     for($i=0;$i<strlen($val);$i++)
			 {
				 if($v==$val[$i]){
				  return $i;$flag=1;break;
				 }		 
			 } 
	  }
	  if($flag==0){return FALSE;}
	}
	$correct="";
	if(in_array(1,$ques))
	{
	$i=contains($cinema,$elements2);
    if(is_numeric($i))
    {
	if($i==0)
		$correct=$correct."A";
	if($i==1)
		$correct=$correct."B";
	if($i==2)
		$correct=$correct."C";
	if($i==3)
		$correct=$correct."D";
     }
	}
	if(in_array(2,$ques))
	{
	$i=contains($friend[0],$elements1);
    if(is_numeric($i))
    {
	if($i==0)
		$correct=$correct."A";
	if($i==1)
		$correct=$correct."B";
	if($i==2)
		$correct=$correct."C";
	if($i==3)
		$correct=$correct."D";
     }
	}
	if(in_array(3,$ques))
	{
	$correct=$correct.$btime;
	}
	if(in_array(4,$ques))
	{
	$i=contains($doctor[0],$elements1);
    if(is_numeric($i))
    {
	if($i==0)
		$correct=$correct."A";
	if($i==1)
		$correct=$correct."B";
	if($i==2)
		$correct=$correct."C";
	if($i==3)
		$correct=$correct."D";
     }
	}
	if(in_array(5,$ques))
	{
	$i=contains($pfriend[0],$elements1);
    if(is_numeric($i))
    {
	if($i==0)
		$correct=$correct."A";
	if($i==1)
		$correct=$correct."B";
	if($i==2)
		$correct=$correct."C";
	if($i==3)
		$correct=$correct."D";
     }
	}
	$pl=rand(0,3);
	if(in_array(6,$ques))
	{
	if($pl==0)
	$correct=$correct."A";
     else if($pl==1)
	$correct=$correct."B";
    else if($pl==2)
	$correct=$correct."C";
    else if($pl==3)
	$correct=$correct."D";
	}
	if(in_array(7,$ques))
	{
	$i=contains($gift[0],$elements1);
    if(is_numeric($i))
    {
	if($i==0)
		$correct=$correct."A";
	if($i==1)
		$correct=$correct."B";
	if($i==2)
		$correct=$correct."C";
	if($i==3)
		$correct=$correct."D";
     }
	}
	$kl=rand(0,3);
	if(in_array(8,$ques))
	{
		if($roll<=3)
		{
			if($roll==1)
	    $correct=$correct."A";
		else if($roll==2)
		$correct=$correct."B";
		else if($roll==3)
		$correct=$correct."C";
		else if($roll==4)
		$correct=$correct."D";
		}
		else{
		if($kl==0)
	    $correct=$correct."A";
		else if($kl==1)
		$correct=$correct."B";
		else if($kl==2)
		$correct=$correct."C";
		else if($kl==3)
		$correct=$correct."D";
	}
	}
	if(in_array(9,$ques))
	{
	$i=contains($teacher[0],$elements1);
    if(is_numeric($i))
    {
	if($i==0)
		$correct=$correct."A";
	if($i==1)
		$correct=$correct."B";
	if($i==2)
		$correct=$correct."C";
	if($i==3)
		$correct=$correct."D";
     }
	}
	if(in_array(10,$ques))
	{
	$correct=$correct.$marriage;
	}
	
	
	
	
    	$one=$cinema;
		$two=$friend[0];
		$three=$btime;
		$four=$doctor[0];
		$five=$pfriend[0];
		$six=$phone;
		$seven=$gift[0];
		$eight=$roll;
		$nine=$teacher[0];
		$ten=$marriage;

	function contain($v,$elements)
	{
		$i=0;
	 foreach($elements as $val)
	 {
		     if(strpos ($val,$v)!== FALSE)
			 {
				return $i; 
				break;
			 }
			 $i=$i+1;
	  }
	}
	
	
	$a="";
	if(in_array(1,$ques)){
	$p=contain($one,$elements2);
	$a=$a.$elements2[$p];
	}
    
    
	if(in_array(2,$ques)==TRUE)
	{
	$q=contain($two,$elements1);
	$a=$a.$elements1[$q];
	}
	
	
	 if(in_array(3,$ques)==TRUE)
	 {	
         $r="ABCD";
         $a=$a.$r;
	 }

    if(in_array(4,$ques)==TRUE)
	{
	$s=contain($four,$elements1);
	$a=$a.$elements1[$s];
	}

	if(in_array(5,$ques)==TRUE)
	{
	$t=contain($five,$elements1);
	$a=$a.$elements1[$t];
	}
	
	if(in_array(6,$ques)==TRUE)
	{
		$phone=((int)$phone-$pl);
	$x="(". ($phone) .")";
	$a=$a.$x;
	}

	if(in_array(7,$ques)==TRUE)
	{
	$u=contain($seven,$elements1);
	$a=$a.$elements1[$u];
	}
	
	if(in_array(8,$ques)==TRUE){
		
		if($eight<=3)
			$eight=1;
		else{
		$eight=((int)$eight)-$kl;}
		$y="(".($eight).")";
	    $a=$a.$y;
	}

	if(in_array(9,$ques)==TRUE)
	{
	$v=contain($nine,$elements1);
	$a=$a.$elements1[$v];
	}
	
	if(in_array(10,$ques)==TRUE)
	{
	$w="ABCD";
	$a=$a.$w;
	}
		
	
	$sql8="Update user set alt='$a' where userid='$userid'";
	
    if ($conn->query($sql8) === TRUE) {
    echo " ";
} else {
    echo "Error updating values: " . $conn->error;
}


$question=implode(" ",$ques);

$sql="CREATE TABLE IF NOT EXISTS table2(userid varchar(20) PRIMARY KEY,pos int(3))";
		if ($conn->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error creating table: " . $conn->error;
}
$index=rand(1,20);
$sql1="Insert into table2(userid,pos) values ('$userid','$index')";
if ($conn->query($sql1) === TRUE) {
    echo " ";
} else {
    echo "Error inserting values: " . $conn->error;
}

$pqr=array("A","B","C","D");
$optn=array();
while(count($optn)!=20)
{
for($i=0;$i<6;$i++)
{
	$k=mt_rand(0,3);
	$abc=$abc.$pqr[$k];
	if(($i==5) && ($abc!=$correct)){
	array_push($optn,$abc);}
}
$abc="";
}








	$sql="CREATE TABLE IF NOT EXISTS table1(userid varchar(20) PRIMARY KEY,
	option1 varchar(10),
	option2 varchar(10),
	option3 varchar(10),
    option4 varchar(10),
    option5 varchar(10),
    option6 varchar(10),
	option7 varchar(10),
	option8 varchar(10),
	option9 varchar(10),
	option10 varchar(10),
	option11 varchar(10),
	option12 varchar(10),
	option13 varchar(10),
	option14 varchar(10),
	option15 varchar(10),
	option16 varchar(10),
	option17 varchar(10),
	option18 varchar(10),
	option19 varchar(10),
	option20 varchar(10))";
	if ($conn->query($sql) === TRUE) {
    echo " ";
} else {
    echo "Error creating table " . $conn->error;
}
$sql11="INSERT INTO table1(userid,option1,option2,option3,option4,option5,option6,option7,option8,option9,option10,option11,option12,option13,option14,option15,option16,option17,option18,option19,option20) values ('$userid','$optn[0]','$optn[1]','$optn[2]','$optn[3]','$optn[4]','$optn[5]','$optn[6]','$optn[7]','$optn[8]','$optn[9]','$optn[10]','$optn[11]','$optn[12]','$optn[13]','$optn[14]','$optn[15]','$optn[16]','$optn[17]','$optn[18]','$optn[19]')";
if ($conn->query($sql11) === TRUE) {
    echo " ";
} else {
    echo "Error inserting Values " . $conn->error;
}	
$opt="option".$index;
$sql8="Update table1 set $opt='$correct' where userid='$userid'";
	
    if ($conn->query($sql8) === TRUE) {
    echo " ";
} else {
    echo "Error updating values: " . $conn->error;
}

     		
	
	$conn->close();
}

?>	
</form>

			
		</div>
    </body>
</html>
