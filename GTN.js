// eslint version6
const express = require('express');
const bodyParser = require('body-parser');
const expressLayouts = require('express-ejs-layouts');
//const request = require('request');
const https = require("https");
const path = require('path');
const http = require("https");
const app = express();
const { google } = require('googleapis');
//const blogger = google.blogger('v3');

const blogger = google.blogger({
    version: 'v3',
    auth: 'AIzaSyDUho-xq_oyvuXj3xI456PkC7vUzISddb8'
});

const params = {
    blogId: '3213900'
};


app.use(express.static("public"));


// get the blog details
blogger.blogs.get(params, (err, res) => {
    if (err) {
        console.error(err);
        throw err;
    }
    console.log(`The blog url is ${res.data.url}`);
});

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

app.post('/makeNewPost', function(req, res) {
    req.body.articleName
    red.body.articleAuthor
    req.body.articleAuthor

})

//Blogger API Key: AIzaSyDUho-xq_oyvuXj3xI456PkC7vUzISddb8