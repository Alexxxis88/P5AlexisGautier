// ------------------------------------- //
// ----- AJAXGET Generic Function ------ //
// ------------------------------------- //

// Take the target URL and the callback function called in case of success as parameters
function ajaxGet(url, callback) {
    var req = new XMLHttpRequest();
    req.open("GET", url);
    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Call the callback function with the response as a parameter
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });
    req.addEventListener("error", function () {
        console.error("There has been an error with the URL " + url);
    });
    req.send(null);
}


