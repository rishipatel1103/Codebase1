

function makeAjaxRequest(url, method, data, successCallback, errorCallback) {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the request
    xhr.open(method, url, true);

    // Set the content type if the method is POST
    if (method === 'POST') {
        xhr.setRequestHeader('Content-Type', 'application/json');
    }

    // Define a callback function to handle the response
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            // If the request was successful, call the success callback function
            if (successCallback) {
                successCallback(xhr.responseText);
            }
        } else {
            // If the request failed, call the error callback function
            if (errorCallback) {
                errorCallback(xhr.status, xhr.statusText);
            }
        }
    };

    // Define a callback function to handle errors
    xhr.onerror = function () {
        // Call the error callback function
        if (errorCallback) {
            errorCallback(xhr.status, xhr.statusText);
        }
    };

    // Send the request with optional data
    xhr.send(data);
}
