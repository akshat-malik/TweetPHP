<?php
session_start();
header("refresh:10");
 if(isset($_SESSION['twitid']))
 {
	 $uname=$_SESSION['twitid'];
  mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
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
	.results{
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
 <h4><marquee> Welcome, <?php echo $_SESSION['uuname'];?> !!</marquee></h4>
 
 <center>
 <ul class="list-inline">
 <li> <a href="logout.php" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove"></span> Click here to logout</a></li>
  <li><a href="manage.php" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-asterisk"></span> Manage Friends</a></li>
 <li> <a href="update.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span>	 Update Profile</a></li>
 </ul>
  </center>
  <span class="pull-right">Logged In as: @<?php echo $_SESSION['twitid'] ?></span>
  </div>
  <div class="row">
  <div class="col-md-6 col-sm-8 col-xs-10">
	<form method="post" action="post.php">
	 <textarea class="form-control" name="tweettext" placeholder="Say something" required></textarea>
	<input type="submit" name="button1" class="btn btn-primary btn-lg" value="Post!"/>
	</form>
	<div class="results">
	<h3>Latest Posts!</h3>
	<?php
		include("show.php");
	
	?>
	</div>
   </div>
   <div class="col-md-2 col-sm-2 col-xs-0">
   </div>
   <div class="col-md-4 col-sm-2 col-xs-2">
   
   <div class="results">
   <h3>Suggestions</h3>
   <?php include("suggest.php");?>
   </div>
   </div>
   </div>
</div>
</body>
<?php
 }
 else
	 header("location:login.php");
 ?>
</html>