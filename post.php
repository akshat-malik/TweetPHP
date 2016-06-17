<?php
session_start();
if(isset($_SESSION['twitid']))
{
	$text= $_POST['tweettext'];
	$uname=$_SESSION['twitid'];
	$uuname=$_SESSION['uuname'];
	
	 mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
			$query="insert into `tweets` values(NULL,'$uname','$uuname','$text')";
			mysql_query($query);
			header("location:index.php");
}
else
{
	header("location:login.php");
}