
var express = require('express');
var url = require('url');
var app = express();
var fs = require("fs");
var http = require('http');
var fs = require("fs");
var connect=require("connect");
var server = http.createServer(app).listen(9200);
app.use(express.static(__dirname + '/public'));
app.use(function (req, res, next) {
        res.header('Access-Control-Allow-Credentials', true);
        res.header('Access-Control-Allow-Origin', req.headers.origin);
        res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
        res.header('Access-Control-Allow-Headers', 'X-Requested-With, X-HTTP-Method-Override, Content-Type, Accept');
	res.setHeader("Access-Control-Allow-Origin", "http://localhost");
        next();
    });


app.get('/mine', function (req, res) {


res.send("Id sent is " + req.param("id")+"phone flag is "+req.param("phone"));




});

