<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schweppes</title>
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

// Description box
echo '<br>';
echo '<div class="description">';
echo '<h2>Schweppes</h2>';
echo '<p>Feel the fabulous fizz of Schweppes Classic: delicately balanced mixers sparkling with brilliant bubbles.</p>';
echo '</div>';

//Camera and Wireframe 
echo '<div class="container">';
echo '<div class="bootstrap-styled-section mt-5">';
echo '<div class="row mb-3">';
echo '<div class="col">';
echo '<div class="card">';
echo '<div class="card-body">';
echo '<div class="button-panel">';
echo '<h5 class="card-title">Toggle Views and Buttons</h5>';
echo '<button class="btn btn-primary" id="front-view-btn">Front View</button>';
echo '<p></p>';
echo '<button class="btn btn-primary" id="top-view-btn">Top View</button>';
echo '<p></p>';
echo '<button class="btn btn-primary" id="side-view-btn">Side View</button>';
echo '<p></p>';
echo '<button class="btn btn-primary" id="wireframe-btn">Wireframe</button>';
echo '</div>';

echo '<div class="image-container mt-3" id="image-container">';
echo '<img id="camera-image" src="" alt="Camera Image" style="display: none; max-width: 40%;">';
echo '</div>';
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 

?>        

<script>
document.addEventListener("DOMContentLoaded", function() {
    var imageVisible = false;
    var frontViewBtn = document.getElementById('front-view-btn');
    var topViewBtn = document.getElementById('top-view-btn');
    var sideViewBtn = document.getElementById('side-view-btn');
	var wireframeBtn = document.getElementById('wireframe-btn');
    var cameraImage = document.getElementById('camera-image');

    if (!frontViewBtn || !topViewBtn || !sideViewBtn || !cameraImage || !wireframeBtn ) {
        return;
    }

    frontViewBtn.addEventListener('click', function() {
        cameraImage.src = "SCH_FR.jpg";
        toggleImage();
    });

    topViewBtn.addEventListener('click', function() {
        cameraImage.src = "SCH_TOP.jpg";
        toggleImage();
    });

    sideViewBtn.addEventListener('click', function() {
        cameraImage.src = "SCH_SIDE.jpg";
        toggleImage();
    });
	
	wireframeBtn.addEventListener('click', function() {
        cameraImage.src = "WF.jpg";
        toggleImage();
    });

    function toggleImage() {
        if (imageVisible) {
            cameraImage.style.display = 'none';
        } else {
            cameraImage.style.display = 'block';
        }
        imageVisible = !imageVisible;
    }
});


</script>
</body>
</html>


<!--
// Include database.php
require_once 'database.php';

 // Empty div to dynamically insert the 3D model
  echo '<div id="model-container" class="model-container">';
  echo '</div>';

// Fetch model data from the database
try {
    $database = new Database('3dmodel.sql');
    $models = $database->getModels();
    // Check if models are retrieved successfully
    if (empty($models)) {
        echo '<script>';
        echo 'console.error("Failed to fetch model data");';
        echo '</script>';
    } else {
        // Extract model data
        $modelData = $models[0];
        // Create X3D element and set attributes
        $x3dElement = '<x3d width="100%" height="500px" id="model">';
        // Create inline X3D node and set DEF attribute
        $inlineElement = '<inline url="' . $modelData['model_url'] . '" DEF="modelNode"></inline>';
        // Append inline X3D node to X3D element
        $x3dElement .= $inlineElement;
        // Close X3D element
        $x3dElement .= '</x3d>';
        // Echo X3D element
        echo $x3dElement;
    }
} catch (Exception $e) {
    echo '<script>';
    echo 'console.error("Error:", "' . $e->getMessage() . '");';
    echo '</script>';
}

// Camera Panel Selection
echo '<div class="bootstrap-styled-section">';
echo '<div class="row mb-3">';
echo '<div class="col">';
echo '<div class="card">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Camera Panel</h5>';
echo '<div class="btn-group" role="group">';
echo '<button onclick="setCameraFront()" type="button" class="btn btn-primary mr-2">Front View</button>';
echo '<button onclick="setCameraTop()" type="button" class="btn btn-primary mr-2">Top View</button>';
echo '<button onclick="setCameraLeft()" type="button" class="btn btn-primary mr-2">Left View</button>';
echo '<button onclick="setCameraRight()" type="button" class="btn btn-primary">Right View</button>';
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 
echo '</div>'; 

// Button Panel Selection
echo '<div class="bootstrap-styled-section">';
echo '<div class="row mb-3">';
echo '<div class="col">';
echo '<div class="card">';
echo '<div class="card-body">';
echo '<h5 class="card-title">Toggle Buttons</h5>';
echo '<div class="btn-group" role="group">';
echo '<button onclick="toggleWireframe()" type="button" class="btn btn-info mr-2">Wireframe</button>';
echo '<button onclick="toggleLights()" type="button" class="btn btn-warning">Lights</button>';
echo '</div>';
echo '</div>'; 
echo '</div>';
echo '</div>'; 
echo '</div>';
echo '</div>'; 

// JavaScript code for interactivity
echo '<script>';
echo 'function setCameraFront() {';
echo '  document.getElementById("model").setAttribute("orientation", "0 0 1 0");';
echo '}';
echo 'function setCameraTop() {';
echo '  document.getElementById("model").setAttribute("orientation", "1 0 0 1.5708");';
echo '}';
echo 'function setCameraLeft() {';
echo '  document.getElementById("model").setAttribute("orientation", "0 1 0 1.5708");';
echo '}';
echo 'function setCameraRight() {';
echo '  document.getElementById("model").setAttribute("orientation", "0 1 0 -1.5708");';
echo '}';
echo 'function toggleWireframe() {';
echo '  var model = document.getElementById("model");';
echo '  var currentStyle = model.getAttribute("render");';
echo '  if (currentStyle === "true") {';
echo '    model.setAttribute("render", "false");';
echo '  } else {';
echo '    model.setAttribute("render", "true");';
echo '  }';
echo '}';
echo 'function toggleLights() {';
echo '  var lights = document.getElementsByTagName("DirectionalLight");';
echo '  for (var i = 0; i < lights.length; i++) {';
echo '    var currentStyle = lights[i].getAttribute("on");';
echo '    if (currentStyle === "true") {';
echo '      lights[i].setAttribute("on", "false");';
echo '    } else {';
echo '      lights[i].setAttribute("on", "true");';
echo '    }';
echo '  }';
echo '}';
echo '</script>';

-->


