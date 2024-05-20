<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coke Zero</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  
  <script type="text/javascript" src="https://www.x3dom.org/download/x3dom.js"></script>
  <link rel="stylesheet" type="text/css" href="https://www.x3dom.org/download/x3dom.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js" defer></script>
  <script src="ajax.js" defer></script>
  
</head>
<body>
<?php
  // Header section
  echo '<header>';
  echo '<h1 class="title">My Fizzy Drink.</h1>';
  echo '<p class="slogan">Sip and Burp</p>';
  echo '</header>';

  // Navigation section
  echo '<nav>';
  echo '<ul>';
  echo '<li class="dropdown">';
  echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">Models <span class="caret"></span></a>';
  echo '<ul class="dropdown-menu">';
  echo '<li><a href="coke0.php">Coke Zero</a></li>';
  echo '<li><a href="DrPepper.php">Dr Pepper</a></li>';
  echo '<li><a href="Schweppes.php">Schweppes</a></li>';
  echo '</ul>';
  echo '</li>';
  echo '<li><a href="index.php">Home</a></li>';
  echo '<li><a href="gallery.php">Gallery</a></li>';
  echo '<li><a href="references.php">References </a></li>';
  echo '</ul>';
  echo '</nav>';
  

echo '<div class="container gallery-container">';
echo '<h1 class="gallery-title">Image Gallery</h1>';
echo '<div class="row">';

$images = [
    'C0_BCK.jpg',
    'C0_FV.jpg',
	'C0_TP.jpg',
	'coke_zero.jpg',
	'DR_BK.jpg',
	'DR_FV.jpg',
	'DR_LFT.jpg',
	'DR_RGT.jpg',
	'DrPepper.jpg',
	'SCH_FR.jpg',
	'SCH_SIDE.jpg',
	'SCH_TOP.jpg',
	'Schewepps.jpg',
	'WF.jpg',
];

foreach($images as $image) {
    echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">';
    echo '<a href="' . htmlspecialchars($image) . '" class="fancybox" rel="ligthbox">';
    echo '<img src="' . htmlspecialchars($image) . '" class="img-fluid zoom img-thumbnail" alt="Image">';
    echo '</a>';
    echo '</div>';
}

echo '</div>';
echo '</div>';




?>