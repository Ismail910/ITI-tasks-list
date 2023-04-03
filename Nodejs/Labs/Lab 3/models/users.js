const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
    firstName: {type: String, minlength: 3, require: true},
    lastName: {type: String, minlength: 3, require: true},
    email: {type: String,  require: true, match: /.+@.+\..+/ },
    age: Number
})


const userModel = mongoose.model('user', userSchema);

module.exports = userModel ;