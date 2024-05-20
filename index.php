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

  // Images section
  echo '<div class="gallery">';
  echo '<div class="photo"><img src="coke_zero.jpg" alt="Coke Zero">
  <p> <br> Coke Zero, introduced in 2005 by The Coca-Cola Company, is a sugar-free, zero-calorie variation of the classic Coca-Cola. Marketed as having a taste closer to regular Coca-Cola than Diet Coke, Coke Zero is sweetened with a blend of aspartame and acesulfame potassium. It offers the same bold flavor profile as Coca-Cola Classic but without the sugar and calories, making it a popular choice for those seeking a guilt-free refreshment option. </p>
  </div>';
  
  echo '<div class="photo"><img src="DrPepper.jpg" alt="Dr Pepper">
  <p> <br> Dr Pepper, created in the 1880s by pharmacist Charles Alderton in Waco, Texas, is a distinctively flavored carbonated soft drink. Its unique blend of 23 flavors, often described as a mixture of cherry, cola, and other spices, sets it apart from other sodas. While its exact recipe remains a closely guarded secret, Dr Pepper is known for its bold and refreshing taste. It has become a beloved beverage choice in the United States and beyond, offering a one-of-a-kind soda experience. </p>
  </div>';
  
  echo '<div class="photo"><img src="Schewepps.jpg" alt="Schweppes">
  <p> <br><br><br> Schweppes, founded in 1783 by Jacob Schweppe, is a renowned brand known for its range of carbonated beverages, including tonic water, ginger ale, and club soda. Originally established in Switzerland, Schweppes has since become a global icon in the realm of soft drinks. Its products are characterized by their crisp and refreshing flavors, making them ideal mixers for cocktails or standalone refreshments. With a long history of innovation and quality, Schweppes continues to be a trusted name in the world of carbonated beverages. </p>
  </div>';
  
  echo '</div>';



// Button to show and play video
echo '<button onclick="showAndPlayVideo()" class="btn btn-primary">Show and Play Video</button>';


// Video section initially hidden
  echo '<div id="video-container" class="video-container" style="display: none;">';
  echo '<video controls autoplay id="video">';
  echo '<source src="coke0video.mp4" type="video/mp4">';
  echo '</video>';
  echo '</div>';


?>

<script>
  function showAndPlayVideo() {
    // Show the video container
    const videoContainer = document.getElementById('video-container');
    videoContainer.style.display = 'block';
    
    // Play the video
    const video = document.getElementById('video');
    video.play();
  }
</script>



</body>
</html>
