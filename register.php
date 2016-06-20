<?php 
if(isset($_POST['button2']))
{
	

 mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");

$twitid=$_POST['twitid'];
$uuname=$_POST['uuname'];
$pass=$_POST['upass'];
$query="insert into `loginfo` values ('$twitid','$uuname','$pass')";
mysql_query($query);
if(mysql_affected_rows()>0)
{
	$resu="Succes.. Now login from Login page Redirecting you there";
	$query="create table `$twitid` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,`Follows` varchar(20))";
	mysql_query($query);
	$query="insert into `$twitid` values(NULL,'$twitid')";
	mysql_query($query);
	header("refresh:3;login.php");
}
else
	$resu="Please try again with a different twitterid ";
			
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
}
h3{
	color:#ffff66;
}
.first{
	height:100%;
	background-image:url('freebg5.jpg');
}

</style>
</head>
<body>
<div class="first">
<div class="container">
<div class="jumbotron">

<a href="login.php" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-backward"></span> Back To Login</a>
<br><br>
<h3><?php echo @$resu;?> </h3><br>
<form method="post" name="h">
<div class="input-group input-group-lg">
<span class="input-group-addon">YourName</span>
<input type="text" name="uuname" class="form-control" placeholder="Your Full Name" required/>
</div>
<div class="input-group input group-lg">
<span class="input-group-addon">ChooseTwitterId</span>
<input type="text" name="twitid" class="form-control" placeholder="ChooseTwitId" required onchange="checkuser(this.value)"/><span id="helper"></span>

</div>
<div class="input-group input-group-lg">
<span class="input-group-addon">Choose Password</span>
<input type="password" name="upass" class="form-control" placeholder="Enter Password" required/><span class="input-group-addon btn btn-primary" onmousedown="h.upass.type='text'"onmouseup="h.upass.type='password'"><!--<span onmousedown="h.upass.type='text'"onmouseup="h.upass.type='password'">--><span class="glyphicon glyphicon-eye-open"></span></span>
</div>
<center><input type="submit" class="btn btn-primary btn-lg" value="Register" name="button2" required id="sub"/> </center>
</form>
</div>
</div>
</div>
<script>
function checkuser(valu)
{
	if(valu.length==0)
	{
		document.getElementById('helper').innerHTML="";
		document.getElementById("helper").className="";
		return;
	}
	else
	{
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if(xmlhttp.responseText==1)
                {document.getElementById("helper").className="glyphicon glyphicon-ok btn btn-success";
					document.getElementById("helper").innerHTML =" Available!";
					document.getElementById('sub').disabled=false;
				}
				else
				{
					document.getElementById("helper").className="glyphicon glyphicon-remove btn btn-danger";
					document.getElementById("helper").innerHTML ="NotAvailable";
					document.getElementById('sub').disabled=true;
				}
            }
        };
        xmlhttp.open("GET", "chk.php?q=" + valu, true);
        xmlhttp.send();
	}
}

</script>
</body>
</html>