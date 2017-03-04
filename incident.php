<?php
include("database.php");
include("header.php");

if($_SESSION['uname']==""){
	header('Location:index.php');
}
$uname=$_SESSION['uname'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['Submit'])){
	date_default_timezone_set('Asia/Kolkata');
    $upload=$_FILES["fileToUpload"]["name"];
	$I_Name=$_POST['I_Name'];
	$category=$_POST['I_category'];
	$loc=$_POST['Location'];
	$date=date('d/m/Y');
	$time=date('h:i:s a');
	$summary=$_POST['Summary'];	
	$sql="insert into incidentReport(ReporterName,I_Name,I_Category,Location,Upload,Dated,Timer,Summary) values('$uname','$I_Name','$category','loc','$upload','$date','$time','$summary')"; 
	$rs=mysql_query($sql)or die("Could Not Perform the Query");
    $file=$_FILES["fileToUpload"]["tmp_name"];
	
	$size = getimagesize($file);
    if(!$size) {
        $uploadOk=0;
    }
  $valid_types = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP);

    if(in_array($size[2],  $valid_types)) {
        $uploadOk=1;
    } else {
        $uploadOk=0;
    }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>alert('The file has been uploaded.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }
}	}

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
<h1>Report An Incident</h1><div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Reporter Window</h2>
			<form action="" method="post" action="" enctype="multipart/form-data">
				<div class="form-sub-w3">
					<input type="text" name="I_Name" placeholder="Incident Name" required="" />
				<div class="icon-w3">
					<i class="fa fa-bookmark" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
				<span id="ic" style="color:white">Incident Category</span>
				<select name="I_category">
					<option  value="Doctor">Medical Issues</option>
					<option value="Warden">Hostel Affairs</option>
					<option value="Police">Emergency Issues</option>
					<option value="Lawyer">Other</option>
				
				</select>
				
				</div>
				<div class="form-sub-w3">
					<input type="text" name="Location" placeholder="Location" required="" />
				<div class="icon-w3">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<textarea type="text-area" name="Summary" placeholder="Summary" required=""></textarea>
				<div class="icon-w3">
					<i class="fa fa-sticky-note" aria-hidden="true"></i>
				</div>
				
				</div>
				<input type="file" name="fileToUpload" id="fileToUpload">
				<div class="submit-w3l">
					<input type="submit" name="Submit" value="Post">					
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>