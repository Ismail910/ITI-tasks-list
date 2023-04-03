const mongoose = require('mongoose');

const postSchema = new mongoose.Schema({
   
    title: String,
    body: String,
    auther: { type: mongoose.Schema.Types.ObjectId, ref: 'user'}
    
})


const postModel = mongoose.model('post', postSchema);

module.exports = postModel ;