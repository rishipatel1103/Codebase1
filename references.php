<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>References </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  
  <script type="text/javascript" src="https://www.x3dom.org/download/x3dom.js"></script>
  <link rel="stylesheet" type="text/css" href="https://www.x3dom.org/download/x3dom.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js" defer></script>
  <script src="ajax.js"></script>

  
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
 

function generateReference($url, $title) {
    echo '<div class="reference-box">';
    echo '<a href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($title) . '</a>';
    echo '</div>';
}

echo '<div class="container references-container">';
echo '<h1 class="references-title">References Used: </h1>';

generateReference("https://www.youtube.com/watch?v=9AkModwf40w", "3D Video");
generateReference("https://www.coca-cola.com/gb/en", "Text Information");
generateReference("https://images.google.co.uk/", "Model Angles");

echo '</div>';

 ?>
 
</body>
</html>