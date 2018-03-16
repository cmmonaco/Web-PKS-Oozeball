<?php

session_name("oozeball");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you!</h1><br/><h2>Your application has been accepted!</h2>';
	
	$css='<style type="text/css">#contact-form{display:none;} #warning{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Team Registration - Oozeball - Alpha Nu Chapter of Phi Kappa Sigma</title>
		<link rel="stylesheet" type="text/css" href="css/master.css" />	
		<link rel="stylesheet" type="text/css" href="css/jqtransform.css" />
		<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css" />
		
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
				
	</head>
	<body>
		<div id="content">
			<div id="header">
				<img src="images/oozeball_logo.png" alt="Oozeball" title="Oozeball" />
				<div id="logos">
					<a href="http://www.gtskulls.org" target="_blank"><img style="width: 234px;" src="images/pks_logo.png" alt="Alpha Nu Chapter of Phi Kappa Sigma" title="Alpha Nu Chapter of Phi Kappa Sigma" /></a>
					<br />
					<a href="http://www.lls.org" target="_blank"><img style="width: 234px; padding-top: 5px;" src="images/lls_logo.png" alt="Leukemia and Lymphoma Society" title="Leukemia and Lymphoma Society" /></a>
				</div>
			</div>
			<div id="navigation">
				<div class="topbar"></div>
				<ul class="claybricks">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.php">What is Oozeball?</a></li>
					<li><a href="photo.php">Photo Gallery</a></li>
					<li><a href="sponsor.php">Sponsors</a></li>
					<li><a href="eventinfo.php">This Years Event</a></li>
					<li><a href="teams.php" class="selected">Teams</a></li>
				</ul>
			</div>
			<div id="body">
				<div id="outerBox">
					<p style="font-size: 22px; margin: 10px 0 10px 20px">Team Registration</p>
					<form style="position: absolute; right: 20px; margin: 0; top: 12px;" action=""><input type="button" onclick="parent.location='teams.php'" value="Cancel" /></form>
					<div id="innerBox">
						<p>Choose number of players:</p>
						<select id="number" style="float: left; margin: 16px;" onchange="loadForm()">
							<option selected="selected">Choose</option>
							<option value="1">1</option>
							<option value="3">3</option>
						</select>
						<div id="regform"></div>				
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy; 2011 The Alpha Nu Chapter of Phi Kappa Sigma. All rights reserved.</p>
		</div>
		
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script type="text/javascript">
		<!--
		//Numbers for Captcha
		var n1 = Math.floor(Math.random() * 20);
		var n2 = Math.floor(Math.random() * 20);
		var capAns = n1 + n2;
		
		function validate1()
		{
			var fields =  ["name", "email", "phone", "size", "day", "time", "payment", "captcha"];
			var fTitles = ["Name", "Email", "Phone", "Shirt Size", "Day of Attendance", "Preferred Start Time", "Method of Payment", "Captcha"];
			var f;
			var err = new Array();
			var errStr = "";
			//alert(document.forms["registration"]["time"].value);
			for(x in fields)
			{
				f = document.forms["registration"][fields[x]].value;
				if((f == null) || (f == ""))
				{
					err.push(x);
				}
			}
			
			if(document.forms["registration"]["captcha"].value != capAns)
				err[err.length - 1] = fields.length - 1;
			
			if(err.length != 0)
			{
				for(x in err)
					errStr = errStr + fTitles[err[x]] + "\n";
				
				alert("Cannont Submit Form!\n\nYou have left blank or have not properly filled out the following fields:\n\n" + errStr);
				return false;
			}
		}
		
		function validate3()
		{
			var fields =  ["teamName", "name1", "email1", "phone1", "size1", "name2", "email2", "size2", "name3", "email3", "size3", "day", "time", "payment", "captcha"];
			var fTitles = ["Team Name", "Player 1's Name", "Player 1's Email", "Player 1's Phone", "Player 1's Shirt Size", "Player 2's Name", "Player 2's Email", "Player 2's Shirt Size", "Player 3's Name", "Player 3's Email", "Player 3's Shirt Size", "Day of Attendance", "Preferred Start Time", "Method of Payment", "Captcha"];
			var f;
			var err = new Array();
			var errStr = "";
			
			for(x in fields)
			{
				f = document.forms["registration"][fields[x]].value;
				if((f == null) || (f == ""))
				{
					err.push(x);
				}
			}
			
			if(document.forms["registration"]["captcha"].value != capAns)
				err[err.length - 1] = fields.length - 1;
			
			if(err.length != 0)
			{
				for(x in err)
					errStr = errStr + fTitles[err[x]] + "\n";
				
				alert("Cannont Submit Form!\n\nYou have left blank or have not properly filled out the following fields:\n\n" + errStr);
				return false;
			}
		}
		
		function loadForm()
		{
			if($("#number").val() == "1")
				$("#regform").load("singleForm.php");
			else if($("#number").val() == "3")
				$("#regform").load("tripleForm.php");
		}
		-->
		</script>
	</body>
</html>