<?php
	require_once("config.php");
	setcookie("LayoutType", "compact", time()+(60*60*24*30));
	
	$w = 693; $r = 9/16; 
	$playerDims = Array(
		"w" => $w, 
		"h" => ceil($w * $r)
	);
?>
<!doctype html>
<html lang="en">
<head>
	<?php require("headers.php"); ?>
	<link rel="stylesheet" type="text/css" href="css/layout-compact.css" />
</head>
<body class="layout_compact">
	<div id="extras">
		<div class="elem first"><a href="about.php" target="_blank">About</a></div>
	</div>
	<div id="banner"></div>
	<?php
		if(isset($_SESSION['error']))
		{
			print '<div id="errors" class="wrapper"><ul class="error">';
			foreach($_SESSION['error'] as $e)
			{
				print '<li>'.$e.'</li>';
			}
			print '</ul></div>';
			unset($_SESSION['error']);
		}
	?>
	<div class="wrapper">
		<div id="headbar">	
		</div>
	</div>
	<div id="main" class="wrapper">
		<div id="rightpane">
			
		</div>
		<div id="leftpane">
			<div id="videowrap">
				<div id="ytapiplayer">
					You need Flash player 8+ and JavaScript enabled to view this video.
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="wrapper">
		<center>
			<b>Theme</b><br>
			<span><a style="color:white" href="?LayoutType=hd">HD</a></span> | 
			<span><a style="color:white" href="?LayoutType=compact">Regular</a></span>
		</center>
	</div>
</body>
</html>  