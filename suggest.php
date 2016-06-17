<?php

if(isset($_SESSION['twitid']))
{
	mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
			$twitid=$_SESSION['twitid'];
			$query="select `twitid`,`username` from `loginfo` where `twitid` NOT IN(select `follows` from `$twitid`)";
			$res=mysql_query($query);
			while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		$names[]=$row['twitid'];
		$uunames[]=$row['username'];
		echo"<div class='well'>";
		echo "Twitid:".$row['twitid']." <br>UserName: ".$row['username'];
		
		?>
		<br>
<a href="add.php?id=<?php echo $row['twitid']?>" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus"></span> Follow</a>
</div>
<?php
  } 
}
else
	header("location:login.php");
?>