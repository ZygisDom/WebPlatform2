var express = require ("express"),
path = require("path"),
mustache = require('mustache-express'),
bodyParser = require('body-parser'),
controller = require('./controllers/routes.js');

var app = express();

app.set('port', process.env.PORT || 9000);

app.engine('mustache', mustache());
app.set('view engine', 'mustache');

//var staticPath = path.resolve(__dirname, "/static");
app.use(express.static('static'));

app.use(bodyParser.urlencoded({extended: true}));

app.use('/', controller);

app.use(function (req, res) {
    res.status(404);
    res.type('text/html');
    res.send("404 - Not found.");
});

app.listen(app.get('port'), function () {
    console.log('server started, ctl^c to quit');
})

