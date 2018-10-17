let express = require('express'),
    app = express(),
    port = process.env.PORT || 3000,
    mongoose = require('mongoose')
    Locate = require('./api/models/locationModel')
    bodyParser = require('body-parser')
    require('dotenv').config()

mongoose.Promise = global.Promise
mongoose.connect(process.env.CONNECT,{ useNewUrlParser: true })

app.use(bodyParser.urlencoded({extended: true}))
app.use(bodyParser.json());

let locationRoutes = require('./api/routes/locationRoutes')
locationRoutes(app)

app.get('/', (req, res) => {
    res.json('welcome')
});

app.use(function(req, res){
    res.status(404).send({url: req.originalUrl + 'NOT FOUND'});
});

console.log()

app.listen(port, () => {
    console.log(`Server started on port ` +port);
});

