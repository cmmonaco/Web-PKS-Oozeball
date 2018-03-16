<?php
	$album = $_GET['album'];
	
	//Should be incremented to add new albums
	switch($album)
	{
		case 1:
			$directory = 'images/albums/11';
			$title = 'Oozeball 2011';
			break;
		case 0:
			$directory = 'images/albums/10';
			$title = 'Oozeball 2010';
			break;
	}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Photo Gallery - Oozeball - Alpha Nu Chapter of Phi Kappa Sigma</title>
		<link rel="stylesheet" type="text/css" href="css/master.css" />	
		<link rel="stylesheet" type="text/css" href="css/jqtransform.css" />
		<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css" />
		<link rel="stylesheet" type="text/css" href="js/lightbox/css/jquery.lightbox-0.5.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/lightbox/js/jquery.lightbox-0.5.pack.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		
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
					<li><a href="photo.php" class="selected">Photo Gallery</a></li>
					<li><a href="sponsor.php">Sponsors</a></li>
					<li><a href="eventinfo.php">This Years Event</a></li>
					<li><a href="teams.php">Teams</a></li>
				</ul>
			</div>
			<div id="body">
				<div id="outerBox">
					<p style="font-size: 22px; margin: 10px 0 10px 20px"><?php echo $title; ?></p>
					<div id="innerBox">
						<div id="gallery">
							<?php

								$allowed_types=array('jpg','jpeg','gif','png');
								$file_parts=array();
								$ext='';
								$title='';
								$i=0;

								$dir_handle = @opendir($directory) or die("There is an error with your image directory!");

								while ($file = readdir($dir_handle)) 
								{
									if($file=='.' || $file == '..') continue;
									
									$file_parts = explode('.',$file);
									$ext = strtolower(array_pop($file_parts));

									$title = implode('.',$file_parts);
									$title = htmlspecialchars($title);
									
									$nomargin='';
									
									if(in_array($ext,$allowed_types))
									{
										if(($i+1)%4==0) $nomargin='nomargin';
									
										echo '
										<div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
										<a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
										</div>';
										
										$i++;
									}
								}

								closedir($dir_handle);

							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy; 2011 The Alpha Nu Chapter of Phi Kappa Sigma. All rights reserved.</p>
		</div>
	</body>
</html>