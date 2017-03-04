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
include("header.php");
include("database.php");
extract($_POST);
if(isset($submit))
	{
		$rs=mysql_query("select * from user where uname='$uname'");
	if (mysql_num_rows($rs)>0)
	{
		echo "<br><br><br><div class=head1>uname Already Exists</div>";
		exit;
	}
	else{
	$query="insert into user(user_id,uname,pass,name,email,phone) values('$uid','$uname','$pass','$name','$emailId','$phone')";
	$rs=mysql_query($query)or die("Could Not Perform the Query");
	echo "<br><br><br><div class=head1>Your Account  $uname Created Sucessfully</div>";
	//echo "<br><a href=index.php>Login</a>";
	$_SESSION['uname']=$uname;
	 echo "<h1  align=center>Incident Reporting</h1>";
			echo '<table border="0" align="center">
	  <tr>
		<td  height="65" ></td>
		<td bordercolor="#0000FF"> <a href="incident.php" class="">Report Incident</a></td>
	  </tr>
	</table>';
	}
	header('Location:home.php');
	}
?>

<h1>Incident Reporting </h1><div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Resporter SignUp Page</h2>
			<form action="" method="post">
				<div class="form-sub-w3">
					<input type="text" name="name" placeholder="Name " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="text" name="uname" placeholder="Username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				
				<div class="form-sub-w3">
					<input type="email" name="emailId" placeholder="Email Id" required="" />
				<div class="icon-w3">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="pass" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="tel" name="phone" placeholder="Phone Number" required="" />
				<div class="icon-w3">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Already have account?<a class="w3_play_icon1" href="index.php"> SignIn here</a></p>
				<div class="submit-w3l">
					<input type="submit" name="submit" value="Register">
					<p class="p-bottom-w3ls">Are you a Responder?<a	class="w3_play_icon1" href="respsignin.php"> Sign In here</a></p>
				
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>