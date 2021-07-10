// eslint version6
const express = require('express');
const bodyParser = require('body-parser');
const expressLayouts = require('express-ejs-layouts');
//const request = require('request');
const https = require("https");
const app = express();
app.use(express.static("public"));
app.use(expressLayouts);
var GTN = {};

app.set('view engine', 'ejs');

app.listen(process.env.PORT || 3000, function() {
    console.log("Server is running on port");
});



app.use(bodyParser.urlencoded({
    extended: true
}));

app.get('/', function(req, res) {
    var locals = {
        header: 'Page Header',
        footer: 'Page Footer'
    };
    res.render('Main Pages/index', locals)
});