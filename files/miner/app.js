var express = require('express');
var url = require('url');
var app = express();
var fs = require("fs");
var http = require('http');
var fs = require("fs");
var connect = require("connect");
var server = http.createServer(app).listen(8000);
app.use(express.static(__dirname + '/public'));

app.use(function (req, res, next) {
    res.header('Access-Control-Allow-Credentials', true);
    res.header('Access-Control-Allow-Origin', req.headers.origin);
    res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.header('Access-Control-Allow-Headers', 'X-Requested-With, X-HTTP-Method-Override, Content-Type, Accept');
    res.setHeader("Access-Control-Allow-Origin", "http://localhost");
    next();
});

var request = require("request");

var ip1 = 'http://192.168.233.145/';
var ip2 = 'http://192.168.233.145/';
var ip3 = 'http://192.168.233.145/';
var ip4 = 'http://192.168.233.145/';

app.get('/mine', function (req, res) {

    
    var plans = "[";
    var id = req.param("id");
    var phone = req.param("phone");
    var mine_path = '/getPlan.php?id='+id+"&phone="+phone;

    request.get(ip1 + mine_path, function (error, response, body) {

       plans+=body+",";

        request.get(ip2 + mine_path, function (error, response, body) {

            plans+=body+",";

            request.get(ip3 + mine_path, function (error, response, body) {

                plans+=body+",";

                request.get(ip4 + mine_path, function (error, response, body) {

                plans+=body+"]";
                res.send(plans);
            
                });
               

            });
           

        });

    });


});
