// eslint version6
const express = require('express');
const bodyParser = require('body-parser');
const expressLayouts = require('express-ejs-layouts');
//const request = require('request');
const https = require("https");
var path = require('path');
const http = require("https");
const app = express();
app.use(express.static("public"));



// const options = {
//     "method": "POST",
//     "hostname": "bloggerstefan-skliarovv1.p.rapidapi.com",
//     "port": null,
//     "path": "/fullPageUpdate",
//     "headers": {
//         "content-type": "application/x-www-form-urlencoded",
//         "x-rapidapi-key": "5767b444f7msh2d0be3565ee1d12p13ad1ejsnf7f7b874e947",
//         "x-rapidapi-host": "Bloggerstefan-skliarovV1.p.rapidapi.com",
//         "useQueryString": true
//     }
// };

// const req = http.request(options, function(res) {
//     const chunks = [];

//     res.on("data", function(chunk) {
//         chunks.push(chunk);
//     });

//     res.on("end", function() {
//         const body = Buffer.concat(chunks);
//         console.log(body.toString());
//     });
// });

// req.write(qs.stringify({ blogId: '<REQUIRED>', pageId: '<REQUIRED>', accessToken: '<REQUIRED>' }));
// req.end();

// req.end(function(res) {
//     if (res.error) throw new Error(res.error);

//     console.log(res.body);
// });


var GTN = {};
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.listen(process.env.PORT || 3000, function() {
    console.log("Server is running on port");
});



app.use(bodyParser.urlencoded({
    extended: true
}));

app.get('/', function(req, res) {
    res.render('Main Pages/index')
});

app.get('/addpost', function(req, res) {
    res.render('Main Pages/addpost2')
});