<?php
session_start();
if(isset($_SESSION['twitid']))
{ $twitid=$_SESSION['twitid'];
	if(isset($_GET['id']))
	{
		$toid=$_GET['id'];
		//echo $toid;
		//echo $twitid;
		 mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
		$query="insert into `$twitid` values(NULL,'$toid')";
		mysql_query($query);
		header("location:index.php");
	}
	else
		header("index.php");
}
else
	header("location:login.php");
?>

