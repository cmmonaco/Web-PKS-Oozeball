<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Teams - Oozeball - Alpha Nu Chapter of Phi Kappa Sigma</title>
		<link rel="stylesheet" type="text/css" href="css/master.css" />
			
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
					<p style="font-size: 22px; margin: 10px 0 10px 20px">Oozeball 2012 Teams</p>
					<form style="position: absolute; right: 20px; margin: 0; top: 12px;" action=""><input type="button" onclick="parent.location='registration.php'" value="Register" /></form>
					<div id="innerBox" class="teams">
						<!--<h2>Teams</h2>
						<table width="100%">
							<tr>
								<th width="40%">Team Name</th>
								<th colspan="3">Players</th>
							</tr>
							<tr>
								<td width="40%" align="center">The Flying Wombats</td>
								<td width="20%">1. Billy bob</td>
								<td width="20%">2. Jane Austen</td>
								<td width="20%">3. JayZ</td>
							</tr>
						</table>
						<h2>Single Players</h2>
						<table width="50%">
							<tr>
								<td width="50%" align="center">Jon Jacob</td>
								<td width="50%" align="center">Robert Robco</td>
							</tr>
						</table> -->
						<?php
							if(!file_exists("single.csv") && !file_exists("triple.csv"))
							{
								echo "<p>No teams are currently registered.</p>";
							}
							else
							{
								echo "<h2>Teams</h2>";
								if(!file_exists("triple.csv") || filesize("triple.csv") == 0)
									echo '<p style="width:100%">No teams are registered.</p>';
								else
								{
									echo '<table width="100%"><tr><th width="40%">Team Name</th><th colspan="3">Players</th></tr>';
									
									$handle = fopen("triple.csv", "r");
									while($data = fgetcsv($handle, 0, ","))
									{
										echo '<tr><td width="40%" align="center">' . $data[0]
											. '</td><td width="20%">1. ' . $data[1]
											. '</td><td width="20%">2. ' . $data[5]
											. '</td><td width="20%">3. ' . $data[9] . '</td></tr>';
									}
									
									echo '</table>';
									fclose($handle);
								}
									
								echo "<h2>Single Players</h2>";
								if(!file_exists("single.csv") || filesize("single.csv") == 0)
									echo "<p>No single players are registered.</p>";
								else
								{
									echo '<table width="50%">';
									$handle = fopen("single.csv", "r");
									$i = 1;
									while($data = fgetcsv($handle, 0, ","))
									{
										if($i == 1)
										{
											echo '<tr><td width="50%" align="center">' . $data[0] . '</td>';
											$i = 2;
										}
										else
										{
											echo '<td width="50%" align="center">' . $data[0] . '</td></tr>';
											$i = 1;
										}
									}
									
									echo '</table>';
									fclose($handle);
								}
							}
						?>
					</div>
					<form style="position: absolute; right: 20px; margin: 0; bottom: 12px;" action=""><input type="button" onclick="parent.location='registration.php'" value="Register" /></form>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy; 2011 The Alpha Nu Chapter of Phi Kappa Sigma. All rights reserved.</p>
		</div>
	</body>
</html>