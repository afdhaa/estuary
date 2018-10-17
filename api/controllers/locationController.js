'use strict'

let mongoose = require('mongoose')
    Locate = mongoose.model('Locate')


exports.list_all_location = function(req, res){
    Locate.find({},function(err, Locate){
        if(err)
            res.send(err)
        res.json(Locate)
    })
}

exports.create_a_location = function(req, res){
    let new_Locate = new Locate(req.body)
    new_Locate.save(function(err, Locate){
        if(err)
            res.send(err)
        res.json(Locate)
    })
}

exports.read_a_location = function(req, res){
    Locate.findById(req.params.LocateId, function(err, Locate){
        if(err)
            res.send(err)
        res.json(Locate)
    })
}

exports.update_a_location = function (req, res) {
    Locate.findOneAndUpdate({_id: req.params.locationId}, req.body, {new:true}, function (err, Locate) {
        if (err)
            res.send(err)
        res.json(Locate)
    })
}

exports.delete_a_location = function (req, res) {
    console.log(req.params)
    Locate.remove({_id: req.params.locationId}, function (err, Locate) {
        if (err)
            res.send(err);
        res.json({
            message: 'Location successfully deleted'
        });
    });
};

