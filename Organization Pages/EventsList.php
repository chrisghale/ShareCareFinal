<?php
	include("config.php");
	include("orgLock.php");
	session_start();
	$myusername=$_SESSION['login_user'];
	
<<<<<<< HEAD
	$sql="SELECT * FROM Events WHERE Event_OrgID = '$org_id'";   //STILL NEEDS DATE LOGIC AND FEATURED LOGIC
=======
	$sql="SELECT * FROM Events WHERE Event_OrgID = '$org_id' AND Event_Date >= NOW()";   //STILL NEEDS DATE LOGIC AND FEATURED LOGIC
>>>>>>> parent of 21032d9... Added logo functionality
	$result=mysql_query($sql);
	
	$num=mysql_numrows($result);//GRABS NUMBER OF ROWS

	$i=0;
	while ($i < $num) //GETS CURRENT ROW IN TABLE AND MAKES SURE WE GO THROUGH ALL RECORDS
	{
		echo "<tr><td class='event'>";
		echo "<div hidden>".mysql_result($result,$i,"Event_ID")."</div>";
		echo "<p id='eventDate'>".mysql_result($result,$i,"Event_Date")."</p>";
<<<<<<< HEAD
		echo "<img src='images/defaultProf.png'></img>";
=======
		echo "<img src='".mysql_result($result,$i,"Event_TypePicture")."'></img>";
>>>>>>> parent of 21032d9... Added logo functionality
		echo "<p id='eventTD' style='font-size: 1.5em'>".mysql_result($result,$i,"Event_Name")."</p>";
		echo "<p id='eventTD'>".mysql_result($result,$i,"Event_Description")."</p>";
		echo "</td></tr><hr>";

		$i++; //GO TO NEXT ROW
	}

?>