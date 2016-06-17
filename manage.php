<?php

session_start();
if(isset($_SESSION['twitid']))
{ $twitid=$_SESSION['twitid'];
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
	
	</style>
</head>
<body>
<div class="first">
<div class="container">
<div class="jumbotron">
<a href="index.php" class="btn btn-success btn-md pull-left"><span class="glyphicon glyphicon-home"></span> Back To Home</a><br><br>
<h3>You are Following</h3>
</div>
<?php
  mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
			$query="select * from `$twitid`";
			$res=mysql_query($query);
	while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		$names[]=$row['Follows'];
		if($row['Follows']!=$twitid)
		{
	   
	   echo "<div class='well'>";
	      echo "@".$row['Follows'];
           	?>
		<a href="remove.php?id=<?php echo $row['Follows'];?>" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-remove-sign"></span> Remove</a>
	
		</div>
		<?php
		}
		}
	
}
else
	header("location:login.php");
?>
</div>
</div>
