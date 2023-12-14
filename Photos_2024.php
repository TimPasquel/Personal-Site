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

	<p>You can view the Images in full by clicking on the desired Image</p>

	<?php
		#$dirname = "images/CWSPhotos/";
		$images = glob($dirname."*.jpg");

		echo '<div class="CWSPhotoTable">';
		echo '<table>';
		foreach($images as $image) {
			echo '<tr>';
			echo '<td>';
			echo '<div class="CWSPhotoSmallImage">';
			echo '<a href ="'.$image.'">';
			echo '<img src="'.$image.'">';
			echo '</a>';
			echo '</div>';
			echo '</td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '</div>';
	?>
	
	<div class="BackToTop">
		<form>
 			<input type="BUTTON" value="Back To Top of Page" onclick="window.location.href='#top'">
		</form>
	</div>

   <div class="CWSVideoTitle">	<h2>Youtube and Instagram Links:</h2> </div>
