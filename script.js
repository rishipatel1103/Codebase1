function setCameraFront() {
  // Set camera position for front view
  var viewpoint = document.getElementById('x3d-viewpoint'); // Assuming your viewpoint has an ID of 'x3d-viewpoint'
  viewpoint.setAttribute('position', '0 0 10'); // Adjust position as needed
}

function setCameraTop() {
  // Set camera position for top view
  var viewpoint = document.getElementById('x3d-viewpoint');
  viewpoint.setAttribute('position', '0 10 0'); // Adjust position as needed
}

function setCameraLeft() {
  // Set camera position for left view
  var viewpoint = document.getElementById('x3d-viewpoint');
  viewpoint.setAttribute('position', '-10 0 0'); // Adjust position as needed
}

function setCameraRight() {
  // Set camera position for right view
  var viewpoint = document.getElementById('x3d-viewpoint');
  viewpoint.setAttribute('position', '10 0 0'); // Adjust position as needed
}


function toggleLights() {
  // Toggle lights on or off
  var lights = document.getElementsByTagName('pointlight'); // Assuming you're using point lights
  for (var i = 0; i < lights.length; i++) {
    if (lights[i].getAttribute('on') === 'true') {
      lights[i].setAttribute('on', 'false');
    } else {
      lights[i].setAttribute('on', 'true');
    }
  }
}

function toggleWireframe() {
  // Toggle wireframe mode
  var model = document.getElementById('model'); // Assuming your model has an ID of 'model'
  if (model.getAttribute('render') === 'false') {
    model.setAttribute('render', 'true');
  } else {
    model.setAttribute('render', 'false');
  }
}


document.getElementById('show-image-btn').addEventListener('click', function() {
    var img = document.getElementById('wf-image');
    img.style.display = 'block';
});