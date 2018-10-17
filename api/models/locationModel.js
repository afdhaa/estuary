'use strict'

let mongoose = require('mongoose')
let Schema = mongoose.Schema

let LocateSchema = new Schema({
  Location : {
    type : String,
  },
  Latitude : {
    type : String,
  },
  Longitude: {
    type: String,
  },
  Nearby : {
    type : String,
  }
})

module.exports = mongoose.model('Locate',LocateSchema)