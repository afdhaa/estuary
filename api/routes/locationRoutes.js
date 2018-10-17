'use strict'
module.exports = function(app){
    let location = require('../controllers/locationController')

    app.route('/location')
        .get(location.list_all_location)
        .post(location.create_a_location)

    app.route('/location/:locationId')
         .put(location.update_a_location)
         .delete(location.delete_a_location)
}
