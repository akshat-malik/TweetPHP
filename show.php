<head>
<style>
	.well{
		background-color:#0033cc;
	}
	.well:hover{
		background-color:#ff3300;
	}

</style>

</head>
<body>

<?php

  if(isset($_SESSION['twitid']))
  { 
	  $uname=$_SESSION['twitid'];
	  mysql_connect("localhost","root","");
			mysql_select_db("twijjet")or die("error");
			$query="select * from `tweets` where `twitid` in (select `Follows` from `$uname`) order By `id` desc";
		
			$res=mysql_query($query);
			while($row=mysql_fetch_array($res))
	{
		//print_r($row);
		$names[]=$row['twitid'];
		$texts[]=$row['tweetext'];
		$uunames[]=$row['username'];
		echo "<div class='well'>";
		 echo "UserId: @".$row['twitid']."<br>"."Said: ".$row['tweetext'];
		 echo "<span class='pull-right'>";
		 echo "UserName:".$row['username'];
		 echo "</span>";
		 echo "</div>";
	}
	$count=count(@$names);
	  
	
  }
  else
	   header("location:login.php")
  ?>
  
 </body>