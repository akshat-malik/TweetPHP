<?php
 session_start();
 if(isset($_SESSION['twitid']))
 {
	 header("location:index.php");
 }
 else
 {
	 if(isset($_POST['button']))	
	 {
		 $twitid=$_POST['twitid'];
		 $upass=$_POST['upass'];
		 mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
			$query="select * from `loginfo`";
			$res=mysql_query($query);
	while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		$names[]=$row['twitid'];
		$passed[]=$row['password'];
		$uunames[]=$row['username'];
	
	}
	$count=count(@$names);
	//print_r($names);
	//print_r($passed);
	for($i=0;$i<$count;$i++)
		{
		if($names[$i]==$twitid && $passed[$i]==$upass)
		{	$_SESSION['twitid']=$twitid;
			$_SESSION['upass']=$upass;
			$_SESSION['uuname']=$uunames[$i];
			//echo $_SESSION['uuname'];
			$resu= "Login Success";
			header("refresh:1;index.php");
			
			
			
			break;
		}
	
		}
	if($i>=$count)
	{
	$resu=" Invalid login try again";
	}
	
	
	
	
	 }
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
<body>
<div class="first">
<div class="container">
<div class="jumbotron">
<a href="register.php" class="btn btn-primary btn-lg">New User? Click Here <span class="glyphicon glyphicon-forward"></span></a>
</div>
<h3><?php echo @$resu;?></h3>
<form method="post" name="f">
<div class="input-group input-group-lg">
<span class="input-group-addon">TwitterID</span>
<input type="text" class="form-control" placeholder="Enter TwitterID" name="twitid"/>
</div>
<div class="input-group input-group-lg">
<span class="input-group-addon">Password</span>
<input type="password" class="form-control" placeholder="Enter Password" name="upass"/><span class="input-group-addon btn btn-primary" onmousedown="f.upass.type='text'"onmouseup="f.upass.type='password'"><!--<span onmousedown="f.upass.type='text'"onmouseup="f.upass.type='password'">--><span class="glyphicon glyphicon-eye-open"></span></span>
</div>
<input type="submit" name="button" class="btn btn-primary btn-lg" value="Login"/>

</form>



</div>
</div>
</body>
</html>