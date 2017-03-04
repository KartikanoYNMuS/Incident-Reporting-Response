<!DOCTYPE html>
<?php
include("database.php");
include("header.php");
extract($_GET);
if($_SESSION['uname']==""){
	header('Location:index.php');
}
if(isset($IncidentId)){
	{$rs2=mysql_query("select * from incidentreport where IncidentId='$IncidentId'");
	mysql_query("update incidentreport set seen=1 where IncidentId='$IncidentId'");
	}
$row2= mysql_fetch_array($rs2, MYSQL_ASSOC);
}


?>

<html>
<head>
<title>Incident Reporting</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>Incident Reporting </h1>
<div class="main-agileits">
<!--form-stars-here-->
	
		<div class="form-w3-agile1">
			<h2>Reporter Details</h2>
		<br>
		<span style="color:white;font-family: 'Oswald', sans-serif;"><center>Reporter : <?php echo $row2['ReporterName'];?></center><br>		</span>
		<span style="color:white;font-family: 'Oswald', sans-serif;"><center>Incident : <?php echo $row2['I_Name'];?></center><br></span>
		<span style="color:white;font-family: 'Oswald', sans-serif;"><center>Location : <?php echo $row2['Location'];?></center><br></span>
		<span style="color:white;font-family: 'Oswald', sans-serif;"><center>Date: <?php echo $row2['Dated'];?></center><br></span>
		<span style="color:white;font-family: 'Oswald', sans-serif;"><center>Time: <?php echo $row2['Timer'];?></center><br></span>
		<span style="color:white;font-family: 'Oswald', sans-serif;"><center>Summary: <?php echo $row2['Summary'];?></textarea></center></span><br> 
         <span style="color:white;font-family: 'Oswald', sans-serif;"><center>Attachment:
		 <?php echo '<form name="form2" method="get" action="image.php">
	<button  id="hey" type="submit" name="upload" value='.$row2['Upload'].'>
	'.$row2['Upload'].'</button>
         </form>' ?></textarea></center></span><br>		 
		
		</div>	
<!--//form-ends-here-->
</div>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
</body>
</html>