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

var ip_info = (function() {
	var info_array = {};
	function set(val) {
		info_array = val;
	}
	return {
		setArray: function(val) {
			set(val);
		},
		getArray: function() {
			return info_array;
		}
	};
})();

var request = require("request");
var mysql = require("mysql");
var connection = mysql.createConnection({
	host : 'localhost',
	user : 'root',
	password : 'root',
	database : 'cellminer'
});

connection.connect(function(err) {
	if(err) {
		console.error('Error connecting to DB: ' + err.stack);
		return;
	}

	console.log('Connected as ID: ' + connection.threadId);
});

var ip1;
var ip2;
var ip3;
var ip4;

connection.query('SELECT name, address FROM Carrier LIMIT 4', function(err, results) {
	ip1 = results[0].address;
	ip2 = results[1].address;
	ip3 = results[2].address;
	ip4 = results[3].address;
});

// var ip1 = 'http://localhost/cellminer/';
// var ip2 = 'http://localhost/cellminer/';
// var ip3 = 'http://localhost/cellminer/';
// var ip4 = 'http://localhost/cellminer/';

app.get('/mine', function (req, res) {

	
	var plans = [];
    var id = req.param("id");
    var phone = req.param("phone");
    var mine_path = '/getPlan.php?id='+id+"&phone="+phone;

    request.get(ip1 + mine_path, function (error, response, body) {

        plans.push(body);

        request.get(ip2 + mine_path, function (error, response, body) {

            plans.push(body);

            request.get(ip3 + mine_path, function (error, response, body) {

                plans.push(body);

                request.get(ip4 + mine_path, function (error, response, body) {

                    plans.push(body);
                    res.send(JSON.stringify(plans));

                });
               

            });
           

        });

    });


});
