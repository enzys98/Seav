var fs = require('fs');
var path = require('path');
// In newer Node.js versions where process is already global this isn't necessary.
var process = require("process");

var moveFrom = "/services/automazione";

// Loop through all the files in the temp directory
fs.readdir(moveFrom, function (err, files) {
    if (err) {
        console.error("Could not list the directory.", err);
        process.exit(1);
    }

    files.forEach(function (file, index) {
        console.log('ciaoooooo');
    });
});
