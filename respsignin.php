<?php include("database.php");
?>
<!DOCTYPE html>
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
<?php
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from responder where Resp_Name='$Resp_Name' and Pass='$pass'");
	$row = mysql_fetch_array($rs, MYSQL_ASSOC);
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['Resp_Name']=$Resp_Name;
		$_SESSION['uname']=$Resp_Name;
	    $_SESSION['Category']=$row['Category'];
		header('Location:resphome1.php');
	}
}
?>

<h1>Incident Reporting </h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Responder Login Page</h2>
			<form action="" method="post">
				<div class="form-sub-w3">
					<input type="text" name="Resp_Name" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="pass" placeholder="Password" required="" />
				<?php
		  if(isset($found))
		  {
		  	echo "Invalid Responder Name or Password";
		  }
		  ?>
		
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<div class="submit-w3l">
					<input name="submit" type="submit" value="Login">
					<p class="p-bottom-w3ls">Are you a Reporter?<a	class="w3_play_icon1" href="index.php"> Sign In here</a></p>
				
				</div>
			</form>
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