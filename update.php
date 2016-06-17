<?php

session_start();
$resu="";
if(isset($_SESSION['twitid']))
{$twitid=$_SESSION['twitid'];
	mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
	$query="select * from `loginfo` where `twitid`='$twitid'";
$res=mysql_query($query);
	while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		$names=$row['twitid'];
		$passed=$row['password'];
		$uunames=$row['username'];
	
	}
	 
    if(isset($_POST['button3']))
	{
		
		$uname=$_POST['uname'];
		$passwd=$_POST['pass'];
		$query="update `loginfo` set `username`='$uname',`password`='$passwd' where `twitid`='$twitid'";
		mysql_query($query);
		if(mysql_affected_rows()>0)
		{
			$resu="Updated Successfully";
			header("refresh:1");
		}
		else
			$resu="Please make some change before clicking save";
	}
	
	

?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<style>
	.well{
		background-color:#0000ff;
		color:white;
	}
	.well:hover{
		background-color:#00bfff;
	}
	.jumbotron{
		 background-color:#2E2D88;
	 color:white;
	}
		.first{
		min-height:768px;
		height:auto;
		background-image:url('freebg5.jpg');
	}
	h3{
		color:white;
	}
	</style>


</head>
<div class="first">
<div class="container">
 <div class="jumbotron">
 <a class="btn btn-success btn-md" href="index.php"><span class="glyphicon glyphicon-home"></span> Back To Home</a>
   <br>
  <h3>Your Details are as follows</h3>
 
 </div>
 <h3>Make changes and Click Submit to save them !</h3>
 <h3><?php echo $resu;?><br>
 <form method="post" name="g">
 <div class="input-group input-group-lg">
 <span class="input-group-addon">YourNAme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
 <input type="text" class="form-control" name="uname" value="<?php echo $uunames;?>" />
 </div>

 <div class="input-group input-group-lg">
 <span class="input-group-addon">YourPassword</span>
 <input type="password" class="form-control" name="pass" value="<?php echo $passed;?>" /><span class="input-group-addon btn btn-primary" onmousedown="g.pass.type='text'"onmouseup="g.pass.type='password'"><!--<span onmousedown="g.pass.type='text'"onmouseup="g.pass.type='password'">--><span class="glyphicon glyphicon-eye-open"></span></span>
 </div>
 <input type="submit" class="btn btn-primary btn-lg" name="button3" value="SaveDetails" />
 </form>
 
  </div>
 
 
 </div>
 


















<?php
}
else
	header("location:login.php");
?>