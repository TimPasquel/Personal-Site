<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture White Smoke Photos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Capture White Smoke Photos</h1>
	<?php include 'nav.html' ?>

	<div class="CWSnav">
	<nav>
		<ul>
			<li><a href="CWSPhotos.php">&larr;Back</a></li>
		</ul>
	</nav>
	</div>

	<?php include 'CWSPhotosNav.html' ?>

	<?php
		$dirname = "images/CWSPhotos/";
		$images = glob($dirname."*.jpg");

		echo '<div class="CWSPhotoTable">';
		echo '<table>';
		foreach($images as $image) {
			echo '<tr>';
			echo '<td>';
			echo '<div class="CWSPhotoSmallImage">';
   		echo '<img src="'.$image.'">';
			echo '</div>';
			echo '</td>';
			echo '</tr>'	;
		}
		echo '</table>';
		echo '</div>';
	?>
	
	<p>Place where a photo directory will be placed</p>
	
	<div class="BackToTop">
		<form>
 			<input type="BUTTON" value="Back To Top of Page" onclick="window.location.href='#top'">
		</form>
	</div>

   <div class="CWSVideoTitle">	<h2>Youtube and Instagram Links:</h2> </div>

	<div class="CWSLinkBox">
	<ul>
		<li><a href="https://www.instagram.com/capture_white_smoke/"</a>Instagram (@capture_white_smoke)</li>
		<li><a href="https://www.youtube.com/channel/UCa_SyInhAFLrDdE9AIFghmg"</a>Youtube (Capture White Smoke)</li>
	</ul>
	</div>

</body>
</html>
